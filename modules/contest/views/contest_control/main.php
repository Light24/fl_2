<div id="splitter" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; height: 100%; border: 0px; overflow: hidden;">
    <div id="sidebar_left_pane">
        <div class="navbar navbar-static-top b-pane">
            <div class="navbar-inner">
                <span class="brand">Список категорий</span>
                <ul class="nav pull-right">
                    <li><a id="addContest" href="#" title="Добавить"><b class="icon icon-plus-sign"></b> Добавить</a></li>
                </ul>
            </div>
        </div>
        <div id="contestList" style="position: absolute; top: 41px; bottom: 0px; left: 0px; right: 0px;"></div>
    </div>
    <div id="content_pane">
        <div class="b-main_content">
            <div id="pages_grid" style="border: 0px; height: 100%;"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function() {
        var serviceRoot = "/admin/module/contest";

        $('#addContest').click(function(e) {
            e.preventDefault();
            ajax_div('#content_pane', serviceRoot + '/ajax_contests_form', function() {
                
            });

        });

        $('#contestList').on('click', '.contestLink', function(e) {
            e.preventDefault();
            ajax_div('#content_pane', $(this).attr('href'), function() {
                
            });
        });

        var contestsData = new kendo.data.DataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_contests_list",
                    dataType: "json"
                }
            },
            schema: {
                data: 'data',
                total: 'total',
                model: {
                    fields: {
                        id: {type: "number", editable: false},
                        category: {type: "string"}
                    }
                }
            },
            serverPaging: false,
            serverFiltering: false,
            serverSorting: false
        });

        var contestsGrid = $("#contestList").kendoGrid({
            dataSource: contestsData,
            autoBind: true,
            filterable: false,
            sortable: false,
            pageable: false,
            resizable: true,
            columns: [
                {
                    field: "category",
                    title: "Название",
                    template: '<a href="' + serviceRoot + '/ajax_contests_form/#=id#" class="contestLink">#=category#</a>'
                }, {
                    title: "",
                    width: 90,
                    command: [
                        {
                            name: 'works',
                            text: '<i class="icon-tasks" data-id="#=id#" title="Работы"></i>',
                            click: function(e) {
                                e.preventDefault();
                                
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                                ajax_div('#content_pane', '/admin/module/contest/ajax_contests_worksgrid/' + dataItem.id, function() {
                
                                });
                            }
                        },
                        {
                            name: 'delete',
                            text: '<i class="icon-trash" data-id="#=id#"></i>',
                            click: function(e) {
                                e.preventDefault();
                                if (!confirm("Вы действительно хотите удалить категорию?"))
                                    return;

                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));

                                $.ajax({
                                    type: 'GET',
                                    url: '/admin/module/contest/ajax_contests_delete/' + dataItem.id,
                                    dataType: 'json',
                                    success: function(json) {
                                        if (json.status === true)
                                        {
                                            $('.icon-refresh').trigger('click');
                                            $.pnotify({
                                                title: 'Категория удалена',
                                                type: 'success'
                                            });
                                            contestsData.remove(dataItem.id);
                                            $("#contestList").data("kendoGrid").removeRow(e.currentTarget);
                                            $('#content_pane').html('');
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

        $("#splitter").kendoSplitter({
            orientation: "horizontal",
            panes: [
                {collapsible: true, size: "350px", min: "100px", max: "350px"},
                {collapsible: false}
            ]
        }).data("kendoSplitter");
    })();
</script>