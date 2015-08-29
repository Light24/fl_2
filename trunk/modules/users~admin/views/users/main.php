<div id="content_pane">

    <div class="navbar navbar-static-top b-pane">
        <div class="navbar-inner">
            <span class="brand">Пользователи сайта</span>
            <ul class="nav pull-right">
                <div class="btn-group">
                    <a href="/admin/module/users/ajax_users_form/" id="addUser" class="btn"><i class="icon icon-plus-sign"></i>Добавить</a>
                </div>
            </ul>
        </div>
    </div>
    <div class="b-main_content">
        <div id="users_grid" style="border: 0px; height: 100%;"></div>
    </div>
</div>
<script type="text/javascript">
    (function() {
        $('#addUser').click(function(e) {
            e.preventDefault();
            ajax_div('#content_pane', $(this).attr('href'), function() {

            });
        });

        var serviceRoot = "/admin/module/users";
        var listData = new kendo.data.DataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_users_list/",
                    dataType: "json",
                }
            },
            schema: {
                data: 'data',
                total: 'total',
                model: {
                    fields: {
                        id: {type: "number", editable: false},
                        fio: {type: "string"},
                        login: {type: "string"},                    
                        email: {type: "string"},
                        date_birth: {type: "string"},
                        city: {type: "string"},
                        points: {type: "string"},
                        last_activity: {type: "string"},
                        socialLinks: {type: "object"}
                    }
                }
            },
            pageSize: 20,
            serverPaging: true,
            serverFiltering: true,
            serverSorting: false
        });

        $("#users_grid").kendoGrid({
            dataSource: listData,
            autoBind: true,
            filterable: {
                extra: false,
                operators: {
                    string: {
                        startswith: "Строка является",
                        eq: "эквивалентной",
                        neq: "не эквивалентной"
                    }
                }
            },
            sortable: false,
            pageable: true,
            resizable: true,
            columns: [
                {
                    field: "id",
                    title: "ID",
                    width: 50,
                    filterable: false
                }, {
                    field: "fio",
                    title: "ФИО"
                },  {
                    field: "login",
                    title: "Логин"
                },{
                    field: "email",
                    title: "E-mail"
                }, {
                    field: "date_birth",
                    title: "Дата рождения",
                    width: 130,
                    filterable: false
                }, {
                    field: "city",
                    title: "Город",
                    filterable: false
                }, {
                    field: "points",
                    title: "Баллы",
                    width: 100,
                    filterable: false
                },
                {
                    field: "last_activity",
                    title: "Последняя активность",
                    filterable: false
                },
                {
                    field: "socialLinks",
                    title: "Соц. аккаунт",
                    template: '<a target="_blanc" href="#=socialLinks#" class="contestLink">#=socialLinks#</a>',
                    filterable: false
                }, {
                    title: "Действия",
                    width: 160,
                    command: [
                        {
                            name: 'change',
                            text: '<i class="icon-pencil"></i>',
                            click: function(e) {
                                e.preventDefault();
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                                $('#users_grid').html('');
                                $('#users_grid').removeData();
                                ;
                                ajax_div('#content_pane', '/admin/module/users/ajax_users_form/' + dataItem.id + '', function() {

                                });
                            }
                        },
                        {
                            name: 'delete',
                            text: '<i class="icon-trash"></i>',
                            click: function(e) {
                                e.preventDefault();
                                if (!confirm("Вы действительно хотите удалить пользователя?"))
                                    return;
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));

                                $.ajax({
                                    type: 'GET',
                                    url: '/admin/module/users/ajax_users_delete/' + dataItem.id,
                                    dataType: 'json',
                                    success: function(json) {
                                        if (json.status === true)
                                        {
                                            listData.remove(dataItem.id);
                                            $("#users_grid").data("kendoGrid").removeRow(e.currentTarget);
                                            $.pnotify({
                                                title: 'Пользователь удалён',
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
    })();
</script>