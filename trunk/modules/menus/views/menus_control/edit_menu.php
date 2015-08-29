<div style="width: 100%; height: 100%; border: 0px; overflow: hidden;">
    <div class="navbar navbar-static-top b-pane">
        <div class="navbar-inner">
            <span class="brand" href="#">Редактирование меню</span>
            <ul class="nav pull-right">
                <li><button id="menu_item_add_form" class="btn" type="button">Создать пункт меню</button></li>
            </ul>
        </div>
    </div>
    <div class="content_pane" style="position: absolute; top: 41px; bottom: 0px; width: 100%;">
        <div id="menu_items_grid" style="border: 0px; height: 100%;"></div>
    </div>
</div>
<script id="menus_add_item_template" type="text/template">
    <form id="menus_add_item_form" action="" method="post" style="margin: 0px;">
        <input type="hidden" name="id" value="" />
        <input type="hidden" name="menu" value="" />
        <div class="k-edit-form-container">
            <div class="k-edit-label">
                <label for="title">Заголовок</label>
            </div>
            <div class="k-edit-field">
                <input type="text" class="k-input k-textbox" name="title" required="required" style="display: block; width: 400px;">
            </div>
            <div class="k-edit-label">
                <label for="parent">Родительский пункт меню</label>
            </div>
            <div class="k-edit-field" style="white-space: nowrap;">
                <input type="hidden" name="parent" />
                <input type="text" class="k-input k-textbox" name="parentName" disabled="disabled" style="display: inline-block; width: 300px;">
                <button class="choose_item k-button" type="button" style="vertical-align: top; width: 94px;">Выбрать</button>
            </div>
            <div class="k-edit-label">
                <label for="position">Порядковый номер</label>
            </div>
            <div class="k-edit-field">
                <input type="text" class="k-input k-textbox" name="position" required="required" style="display: block; width: 400px;">
            </div>
            <div class="k-edit-label">
                <label for="url_type">Тип ссылки</label>
            </div>
            <div class="k-edit-field">
                <select name="url_type" id="url_type">
                    <option value="url">Адрес</option>
                    <option value="pages_page">Страница</option>
                </select>
            </div>
            <div class="url_type_url url_type_block">
                <div class="k-edit-label">
                    <label for="url">Адрес</label>
                </div>
                <div class="k-edit-field">
                    <input type="text" class="k-input k-textbox" name="url" style="display: block; width: 400px;">
                </div>
            </div>
            <div class="url_type_pages_page url_type_block" style="display: none;">
                <div class="k-edit-label">
                    <label for="pageTitle">Страница</label>
                </div>
                <div class="k-edit-field" style="white-space: nowrap;">
                    <input type="text" class="k-input k-textbox" name="pageTitle" disabled="disabled" style="display: inline-block; width: 300px;">
                    <button class="choose_page k-button" type="button" style="vertical-align: top; width: 94px;">Выбрать</button>
                </div>
            </div>
            <div class="k-edit-label">
                <label class="control-label" for="image">Картинка</label>
            </div>
            <div class="k-edit-label control-group input-append">
                <div class="controls">
                    <input type="text" id="image" name="image" value="" style="width:292px;">
                    <button id="menu_choose_image" class="btn" type="button">Выбрать...</button>
                </div>
            </div>
            <div class="k-edit-label">
                <label for="tooltip">Подсказка</label>
            </div>
            <div class="k-edit-field">
                <input type="text" class="k-input k-textbox" name="tooltip" style="display: block; width: 400px;">
            </div>
            <div class="k-edit-label">
                <label for="options">Дополнительно</label>
            </div>
            <div class="k-edit-field">
                <textarea class="k-input k-textbox" name="options" style="display: block; width: 400px;"></textarea>
            </div>
            <a id="menus_add_item_form_save" class="k-button k-button-icontext k-grid-update" href="#">
                <span class="k-icon k-update"></span>
                Сохранить
            </a>
            <a id="menus_add_item_form_cancel" class="k-button k-button-icontext k-grid-cancel" href="#">
                <span class="k-icon k-cancel"></span>
                Отмена
            </a>
        </div>
    </form>
    <div id="window"></div>
</script>
<script id="menus_choose_item_template" type="text/template">
    <div id="menus_choose_item_treeview" style="position: absolute; left: 4px; top: 4px; right: 4px; bottom: 44px;"></div>
    <div style="position: absolute; left: 4px; right: 4px; bottom: 4px;">
    <a id="menus_choose_item_save" class="k-button k-button-icontext k-grid-update" href="#">
    <span class="k-icon k-update"></span>
    Выбрать
    </a>
    <a id="menus_choose_item_cancel" class="k-button k-button-icontext k-grid-cancel" href="#">
    <span class="k-icon k-cancel"></span>
    Отмена
    </a>
    </div>
</script>
<script id="pages_choose_page_template" type="text/template">
    <div id="pages_choose_page_treeview" style="position: absolute; left: 4px; top: 4px; right: 4px; bottom: 44px;"></div>
    <div style="position: absolute; left: 4px; right: 4px; bottom: 4px;">
    <a id="pages_choose_page_save" class="k-button k-button-icontext k-grid-update" href="#">
    <span class="k-icon k-update"></span>
    Выбрать
    </a>
    <a id="pages_choose_page_cancel" class="k-button k-button-icontext k-grid-cancel" href="#">
    <span class="k-icon k-cancel"></span>
    Отмена
    </a>
    </div>
</script>
<script type="text/javascript">
    (function() {
        var serviceRoot = "/admin/module/menus";
        var menuId = <?= $menuId ?>

        function createChooseItemWindow(callback) {

            function refreshTree() {
                var $tree = $w.find("#menus_choose_item_treeview");
                var treeView = $tree.data('kendoTreeView');
                treeView.expand($tree.find('.k-item').first());
                treeView.select($tree.find('.k-item').first());
            }

            var serviceRoot = "/admin/module/menus";

            var treeData = new kendo.data.HierarchicalDataSource({
                transport: {
                    read: {
                        url: serviceRoot + "/ajax_item_tree",
                        dataType: "json",
                        data: {
                            menuId: menuId
                        }
                    }
                },
                schema: {
                    model: {
                        id: "id",
                        hasChildren: "hasChild",
                        children: 'childs'
                    }
                },
                requestEnd: function() {
                    setTimeout(function() {
                        refreshTree();
                    }, 1);
                }
            });

            var $w = $('<div></div>');
            $w.html($('#menus_choose_item_template').html());
            $w.find("#menus_choose_item_treeview").kendoTreeView({
                dataSource: treeData,
                dataTextField: "title",
                loadOnDemand: true
            });
            $w.kendoWindow({
                modal: true,
                title: 'Выбор пункта меню',
                width: '600px',
                height: '400px'
            });
            $w.find("#menus_choose_item_save").click(function(event) {
                event.preventDefault();
                var treeView = $w.find("#menus_choose_item_treeview").data('kendoTreeView');
                var row = treeView.dataSource.getByUid(treeView.select().data('uid'));
                callback(row.id, row.title);
                $w.data('kendoWindow').close();
            });
            $w.find("#menus_choose_item_cancel").click(function(event) {
                event.preventDefault();
                $w.data('kendoWindow').close();
            });
            return $w;
        }
        ;

        function createChoosePageWindow(callback) {

            function refreshTree() {
                var $tree = $w.find("#pages_choose_page_treeview");
                var treeView = $tree.data('kendoTreeView');
                treeView.expand($tree.find('.k-item').first());
                treeView.select($tree.find('.k-item').first());
            }

            var serviceRoot = "/admin/module/pages";

            var treeData = new kendo.data.HierarchicalDataSource({
                transport: {
                    read: {
                        url: serviceRoot + "/ajax_tree",
                        dataType: "json"
                    }
                },
                schema: {
                    model: {
                        id: "id",
                        hasChildren: "hasChild"
                    }
                },
                requestEnd: function() {
                    setTimeout(function() {
                        refreshTree();
                    }, 1);
                }
            });

            var $w = $('<div></div>');
            $w.html($('#pages_choose_page_template').html());
            $w.find("#pages_choose_page_treeview").kendoTreeView({
                dataSource: treeData,
                dataTextField: "title",
                loadOnDemand: true
            });
            $w.kendoWindow({
                modal: true,
                title: 'Выбор страницы',
                width: '600px',
                height: '400px'
            });
            $w.find("#pages_choose_page_save").click(function(event) {
                event.preventDefault();
                var treeView = $w.find("#pages_choose_page_treeview").data('kendoTreeView');
                var row = treeView.dataSource.getByUid(treeView.select().data('uid'));
                callback(row.id, row.title);
                $w.data('kendoWindow').close();
            });
            $w.find("#pages_choose_page_cancel").click(function(event) {
                event.preventDefault();
                $w.data('kendoWindow').close();
            });
            return $w;
        }
        ;

        function createWindow() {
            var $w = $('<div id="menusEditMenuItemWindow"></div>');
            $w.html($('#menus_add_item_template').html());
            $w.kendoWindow({
                modal: true,
                width: '600px',
                title: 'Редактирование пункта меню'
            });
            $w.find('#url_type').change(function() {
                $w.find('.url_type_block').hide();
                $w.find('.url_type_' + $(this).val()).show();
            });
            var $wi = createChooseItemWindow(function(id, title) {
                $w.find('[name="parent"]').val(id);
                $w.find('[name="parentName"]').val(title);
            });
            var $wp = createChoosePageWindow(function(id, title) {
                $w.find('[name="url"]').val(id);
                $w.find('[name="pageTitle"]').val(title);
            });
            $w.find('.choose_item').click(function(event) {
                event.preventDefault();
                $wi.data('kendoWindow').center().open();
            });
            $w.find('.choose_page').click(function(event) {
                event.preventDefault();
                $wp.data('kendoWindow').center().open();
            });
            return $w;
        }
        ;

        if ($('#menusEditMenuItemWindow').length == 0)
            createWindow();

        var listData = new kendo.data.DataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_items_list",
                    dataType: "json",
                    data: {
                        menuId: menuId
                    }
                }
            },
            schema: {
                data: 'data',
                total: 'total',
                model: {
                    id: 'id',
                    fields: {
                        id: {type: "number"},
                        menu: {type: "string"},
                        parentId: {type: "string"},
                        parentName: {type: "string"},
                        position: {type: "string"},
                        title: {type: "string"},
                        url_type: {type: "string"},
                        url: {type: "string"},
                        urlTitle: {type: "string"},
                        image: {type: "string"},
                        tooltip: {type: "string"},
                        options: {type: "string"}
                    }
                }
            },
            //pageSize: 20,
            serverPaging: false,
            serverFiltering: false,
            serverSorting: false
        });

        function gridOnCreateItem(menu, parent, dataSource, options) {
            var $w = $('#menusEditMenuItemWindow');
            $w.find('#menus_add_item_form input[name=id]').val('');
            $w.find('#menus_add_item_form input[name=menu]').val(menu);
            $w.find('#menus_add_item_form input[name=parent]').val(parent);
            $w.find('#menus_add_item_form input[name=parentName]').val(options ? options.parentName : '');
            $w.find('#menus_add_item_form input[name=position]').val('');
            $w.find('#menus_add_item_form input[name=title]').val('');
            $w.find('#menus_add_item_form select[name=url_type]').val('url').trigger('change');
            $w.find('#menus_add_item_form input[name=url]').val('');
            $w.find('#menus_add_item_form input[name=pageTitle]').val('');
            $w.find('#menus_add_item_form input[name=image]').val('');
            $w.find('#menus_add_item_form input[name=tooltip]').val('');
            $w.find('#menus_add_item_form textarea[name=options]').val('');
            $w.find('#menus_add_item_form_save').off('click').click(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: serviceRoot + "/ajax_item_add",
                    dataType: 'json',
                    data: $w.find('#menus_add_item_form').serialize(),
                    beforeSend: function() {

                    },
                    complete: function() {
                    },
                    success: function(json) {
                        if (json && json.status == true) {
                            $.pnotify({
                                text: 'Пункт меню добавлено удачно.',
                                type: 'success'
                            });
                            dataSource.read();
                            $w.data('kendoWindow').close();
                        } else if (json && json.status == false) {
                            $.pnotify({
                                title: 'Ошибка',
                                text: json.message,
                                type: 'error'
                            });
                        } else {
                            $.pnotify({
                                title: 'Ошибка',
                                text: 'Запрос завершился неудачно. Попробуйте позже.',
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
            });
            $w.find('#menus_add_item_form_cancel').off('click').click(function(event) {
                event.preventDefault();
                $w.data('kendoWindow').close();
            });
            $w.data('kendoWindow').center().open();
        }

        function gridOnEdit(e) {
            e.preventDefault();
            var _this = this;
            var $w = $('#menusEditMenuItemWindow');
            var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
            if (!dataItem) {
                return;
            }
            $w.find('#menus_add_item_form input[name=id]').val(dataItem.id);
            $w.find('#menus_add_item_form input[name=menu]').val(dataItem.menu);
            $w.find('#menus_add_item_form input[name=parent]').val(dataItem.parentId);
            $w.find('#menus_add_item_form input[name=parentName]').val(dataItem.parentName);
            $w.find('#menus_add_item_form input[name=position]').val(dataItem.position);
            $w.find('#menus_add_item_form input[name=title]').val(dataItem.title);
            $w.find('#menus_add_item_form select[name=url_type]').val(dataItem.url_type).trigger('change');
            $w.find('#menus_add_item_form input[name=url]').val(dataItem.url);
            $w.find('#menus_add_item_form input[name=pageTitle]').val(dataItem.urlTitle);
            $w.find('#menus_add_item_form input[name=image]').val(dataItem.image);
            $w.find('#menus_add_item_form input[name=tooltip]').val(dataItem.tooltip);
            $w.find('#menus_add_item_form textarea[name=options]').val(dataItem.options);
            $w.find('#menus_add_item_form_save').off('click').click(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: serviceRoot + "/ajax_item_edit",
                    dataType: 'json',
                    data: $w.find('#menus_add_item_form').serialize(),
                    beforeSend: function() {

                    },
                    complete: function() {
                    },
                    success: function(json) {
                        if (json && json.status == true) {
                            $.pnotify({
                                text: 'Изменения сохранены.',
                                type: 'success'
                            });
                            _this.dataSource.read();
                            $w.data('kendoWindow').close();
                        } else if (json && json.status == false) {
                            $.pnotify({
                                title: 'Ошибка',
                                text: json.message,
                                type: 'error'
                            });
                        } else {
                            $.pnotify({
                                title: 'Ошибка',
                                text: 'Запрос завершился неудачно. Попробуйте позже.',
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
            });
            $w.find('#menus_add_item_form_cancel').off('click').click(function(event) {
                event.preventDefault();
                $w.data('kendoWindow').close();
            });
            $w.data('kendoWindow').center().open();
        }
        ;

        function gridOnDelete(e) {
            e.preventDefault();
            var _this = this;
            var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
            if (!dataItem) {
                return;
            }
            if (confirm('Вы действительно хотите удалить пункт меню?') == false)
                return;
            $.ajax({
                type: 'POST',
                url: serviceRoot + "/ajax_item_delete",
                dataType: 'json',
                data: {id: dataItem.id},
                beforeSend: function() {

                },
                complete: function() {
                    _this.dataSource.read();
                },
                success: function(json) {
                    if (json && json.status == true) {
                        $.pnotify({
                            text: 'Пункт меню удалено.',
                            type: 'success'
                        });
                    } else if (json && json.status == false) {
                        $.pnotify({
                            title: 'Ошибка',
                            text: json.message,
                            type: 'error'
                        });
                    } else {
                        $.pnotify({
                            title: 'Ошибка',
                            text: 'Запрос завершился неудачно. Попробуйте позже.',
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
        ;

        function gridOnDetailInit(e) {
            e.detailCell.html('<div></div>');

            var dataSource = new kendo.data.DataSource({
                transport: {
                    read: {
                        url: serviceRoot + "/ajax_items_list",
                        dataType: "json",
                        data: {
                            menuId: menuId,
                            id: e.data.id
                        }
                    }
                },
                schema: {
                    data: 'data',
                    total: 'total',
                    model: {
                        id: 'id',
                        fields: {
                            id: {type: "number"},
                            menu: {type: "string"},
                            parentId: {type: "string"},
                            position: {type: "string"},
                            title: {type: "string"},
                            url_type: {type: "string"},
                            url: {type: "string"},
                            image: {type: "string"},
                            tooltip: {type: "string"},
                            options: {type: "string"}
                        }
                    }
                },
                //pageSize: 20,
                serverPaging: false,
                serverFiltering: false,
                serverSorting: false
            });

            e.detailRow.find('div').kendoGrid({
                dataSource: dataSource,
                filterable: false,
                sortable: false,
                pageable: false,
                columns: [
                    {
                        field: "title",
                        title: "Заголовок",
                        width: '40%'
                    }, {
                        field: "urlTitle",
                        title: "Ссылка",
                        width: '40%'
                    }, {
                        command: [
                            {
                                name: 'editMenu',
                                text: '<i class="icon-pencil"></i>',
                                click: gridOnEdit
                            }, {
                                name: 'delete',
                                text: '<i class="icon-trash"></i>',
                                click: gridOnDelete
                            }
                        ]
                    }
                ],
                toolbar: [
                    {
                        template: '<button class="menus_create_item k-button" type="button">Создать пункт меню</button>'
                    }
                ],
                detailInit: gridOnDetailInit
            });
            e.detailRow.find('.menus_create_item').click(function() {
                gridOnCreateItem(menuId, e.data.id, dataSource, {parentName: e.data.title});
            });
        }

        $("#menu_items_grid").kendoGrid({
            dataSource: listData,
            filterable: false,
            sortable: false,
            pageable: false,
            columns: [
                {
                    field: "title",
                    title: "Заголовок",
                    width: '40%'
                }, {
                    field: "urlTitle",
                    title: "Ссылка",
                    width: '40%'
                }, {
                    command: [
                        {
                            name: 'editMenu',
                            text: '<i class="icon-pencil"></i>',
                            click: gridOnEdit
                        }, {
                            name: 'delete',
                            text: '<i class="icon-trash"></i>',
                            click: gridOnDelete
                        }
                    ]
                }
            ],
            detailInit: gridOnDetailInit
        });

        $('#menu_item_add_form').click(function() {
            gridOnCreateItem(menuId, '', listData);
        });
        
//        
//        $(document).ready(function(){
//           $('#imageUpload').popupWindow({ 
//               windowURL:'elfinder/elfinder.html', 
//               windowName:'Filebrowser',
//               height:490, 
//               width:950,
//               centerScreen:1
//           }); 
//        });
//
//        function processFile(file){
//           $('#picture').html('<img src="' + file + '" />');
//           $('#featured_image').val(file);
//        }
        
        
    
        var window = $("#window");
    
        window.kendoWindow({
            modal: true,
            iframe: true,
            title: 'Выбор картинки',
            width: '800px',
            height: '600px',
            actions: ["Refresh", "Maximize", "Close"],
            content: "/assets/lib/elfinder/elfinder_standalone.html"
        });
        

        $("#menu_choose_image").click( function (e) {
            e.preventDefault();
            filemanager.field = '#image';
            filemanager.window = window.data("kendoWindow");
            window.data("kendoWindow").open().center();
        });

    })();
</script>