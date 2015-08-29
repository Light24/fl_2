<div id="splitter" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; height: 100%; border: 0px; overflow: hidden;">
    <div id="sidebar_left_pane">
        <div class="navbar navbar-static-top b-pane">
            <div class="navbar-inner">
                <span class="brand">Дерево</span>
                <ul class="nav pull-right">
                    <li><a id="refreshTree" href="#" title="Обновить список"><b class="icon icon-refresh"></b></a></li>
                    <!-- TODO: Сделать автоматическое сворачивание и разворачивание списков -->
                    <!--<li><a href="#"><b class="icon icon-eye-open"></b></a></li>-->
                </ul>
            </div>
        </div>
        <div id="pages_treeview" style="position: absolute; top: 41px; bottom: 0px; left: 0px; right: 0px;"></div>
    </div>
    <div id="content_pane">
        <div class="b-main_content">
            <div id="pages_grid" style="border: 0px; height: 100%;"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function() {

        function getMode() {
            var path = document.location.pathname.split('/');
            var command = path[path.length - 1];
            if (command.toLowerCase() == 'pages') {
                return 'show';
            }
            var result = /^show(\d+)$/.exec(command);
            if (result) {
                return 'show';
            }
            result = /^(?:edit(\d*)|new)$/.exec(command);
            if (result) {
                return 'edit';
            }
            return 'unknown';
        }

        function getSelectedPage() {
            var path = document.location.pathname.split('/');
            var command = path[path.length - 1];
            var result = /^show(\d+)$/.exec(command);
            if (result) {
                return result[1];
            } else {
                return -1;
            }
        }

        function getEditPage() {
            var path = document.location.pathname.split('/');
            var command = path[path.length - 1];
            var result = /^edit(\d+)$/.exec(command);
            if (result) {
                return result[1];
            } else {
                return -1;
            }
        }

        function refreshTree() {
            var treeView = $("#pages_treeview").data('kendoTreeView');
            var record = treeData.get(select);
            if (record) {
                var uid = record.uid;
                var $e = treeView.findByUid(uid);
                treeView.select($e);
                treeView.expand($e.parents());

                listData.transport.options.read.data = {
                    parent_id: record.id
                };
                listData.read();
                if (!$("#pages_grid").data('kendoGrid')) {
                    //initList();
                }
            }
            treeView.expand($("#pages_treeview").find('.k-item').first());
        }


        var mode = getMode();
        var select = getSelectedPage();
        var edit = getEditPage();

        function initForm() {
            var onSuccess = function() {
                if (edit == -1) {
                    var parent_id = select;
                    if (parent_id == -1) {
                        parent_id = '';
                    } else {
                        $('#edit_page_form #parent_id_title').val(treeData.get(select).title);
                    }
                    $('#edit_page_form #parent_id').val(parent_id);
                }
                $('#pages_cancel').click(function(event) {
                    event.preventDefault();
                    listData.read();
                    initList();
                    if (select > 0) {
                        navigateNoLoad('/admin/module/pages/show' + select);
                    } else {
                        navigateNoLoad('/admin/module/pages');
                    }
                });
            }

            $('#content_pane').empty();
            if (edit == -1) {
                ajax_div('#content_pane', '/admin/module/pages/edit_page', onSuccess);
            } else {
                ajax_div('#content_pane', '/admin/module/pages/edit_page?id=' + edit, onSuccess);
            }
        }

        var serviceRoot = "/admin/module/pages";

        var treeData = new kendo.data.HierarchicalDataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_full_tree",
                    dataType: "json"
                }
            },
            schema: {
                model: {
                    id: "id",
                    //hasChildren: "hasChild",
                    children: 'childs'
                }
            },
            requestEnd: function() {
                setTimeout(function() {
                    refreshTree();
                }, 1);
            }
        });

        var listData = new kendo.data.DataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_list",
                    dataType: "json",
                    data: {
                        parent_id: -1
                    }
                }
            },
            schema: {
                data: 'data',
                total: 'total',
                model: {
                    fields: {
                        id: {type: "number", editable: false},
                        title: {type: "string"},
                        url: {type: "string"}
                    }
                }
            },
            pageSize: 20,
            serverPaging: false,
            serverFiltering: false,
            serverSorting: false
        });

        function initList() {
            $('#content_pane').empty();
            $('#content_pane').html('<div id="pages_grid" style="border: 0px; height: 100%;"></div>');
            $("#pages_grid").kendoGrid({
                dataSource: listData,
                autoBind: true,
                filterable: false,
                sortable: false,
                pageable: true,
                resizable: true,
                toolbar: [
                    {
                        template: '<a id="pages_create_page" class="k-button" href="\\#">Создать страницу</a>'
                    }
                ],
                columns: [
                    {
                        field: "title",
                        title: "Заголовок"
                    }, {
                        field: "url",
                        title: "Url"
                    }, {
                        title: "Действия",
                        width: 210,
                        command: [
                            {
                                name: 'change',
                                text: '<i class="icon-pencil"></i>',
                                click: function(e) {
                                    e.preventDefault();
                                    var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                                    $('#pages_grid').html('');
                                    $('#pages_grid').removeData();
                                    //$("#pages_treeview").data('kendoTreeView').select($());
                                    mode = 'edit';
                                    edit = dataItem.id;
                                    initForm();
                                    navigateNoLoad('/admin/module/pages/edit' + dataItem.id);
                                    //navigate('/admin/module/pages/edit_page?id='+dataItem.id);
                                }
                            },
                            {
                                name: 'delete',
                                text: '<i class="icon-trash"></i>',
                                click: function(e) {
                                    e.preventDefault();
                                    if (!confirm("Вы действительно хотите удалить страницу?"))
                                        return;
                                    var dataItem = this.dataItem($(e.currentTarget).closest("tr"));

                                    $.ajax({
                                        type: 'GET',
                                        url: '/admin/module/pages/delete_page?id=' + dataItem.id,
                                        dataType: 'json',
                                        success: function(json) {
                                            if (json.status === true)
                                            {
                                                $('.icon-refresh').trigger('click');
                                                $.pnotify({
                                                    title: 'Страница удалена',
                                                    type: 'success'
                                                });
                                            }
                                            else
                                            {
                                                $.pnotify({
                                                    title: 'Ошибка',
                                                    text: json.message,
                                                    type: 'error'
                                                });
                                            }
                                        },
                                        error: function() {
                                            $.pnotify({
                                                title: 'Ошибка',
                                                text: 'Запрос завершился неудачно. Попробуйте позже.',
                                                type: 'error'
                                            });
                                        }
                                    });
                                }
                            }
                        ]
                    }
                ]
            });
            listData.trigger('change');
            $('#pages_create_page').click(function(event) {
                event.preventDefault();
                $('#pages_grid').html('');
                $('#pages_grid').removeData();
                //$("#pages_treeview").data('kendoTreeView').select($());
                mode = 'edit';
                edit = -1;
                initForm();
                navigateNoLoad('/admin/module/pages/new');
                //navigate('/admin/module/pages/edit_page');
            });
        }

        $("#pages_treeview").kendoTreeView({
            dataSource: treeData,
            dataTextField: "title",
            loadOnDemand: false,
            select: function(e) {
                var model = treeData.getByUid($(e.node).data('uid'));
                mode = 'show';
                select = model.id;
                listData.transport.options.read.data = {
                    parent_id: model.id
                };
                listData.read();
                if (!$("#pages_grid").data('kendoGrid')) {
                    initList();
                }
                if (model.id > 0) {
                    navigateNoLoad('/admin/module/pages/show' + model.id);
                } else {
                    navigateNoLoad('/admin/module/pages');
                }
            }
        });

        $('#refreshTree').click(function(event) {
            event.preventDefault();
            treeData.read();
        });

        $("#splitter").kendoSplitter({
            orientation: "horizontal",
            panes: [
                {collapsible: true, size: "350px", min: "100px", max: "350px"},
                {collapsible: false}
            ]
        }).data("kendoSplitter");

        if (mode == 'show') {
            initList();
        } else if (mode == 'edit') {
            initForm();
        }

    })();
</script>