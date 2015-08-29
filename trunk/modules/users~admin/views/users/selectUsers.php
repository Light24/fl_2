<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/lib/kendo/styles/kendo.common.min.css" rel="stylesheet">
        <link href="/assets/lib/kendo/styles/kendo.default.min.css" rel="stylesheet">
        <link href="/assets/lib/kendo/styles/kendo.bootstrap.min.css" rel="stylesheet">
        <link href="/assets/lib/pnotify/jquery.pnotify.default.css" rel="stylesheet">
        <link href="/assets/lib/pnotify/jquery.pnotify.default.css" rel="stylesheet">
        <link href="/assets/control/css/control.css" rel="stylesheet">
        
        <script type="text/javascript" src="/assets/lib/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/lib/kendo/js/kendo.web.min.js"></script>
        <script type="text/javascript" src="/assets/lib/kendo/js/cultures/kendo.culture.ru-RU.min.js"></script>
        <script type="text/javascript" src="/assets/lib/pnotify/jquery.pnotify.min.js"></script>
    </head>
    <body>
        <div id="cc_main_content" class="b-main_content" style="top:0px;">
            <div id="selectusers_grid" style="border: 0px;"></div>
        </div>
        <script type="text/javascript">
            (function() {

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
                                email: {type: "string"},
                                phone: {type: "string"},
                                sex: {type: "string"},
                                birth_date: {type: "string"},
                                city: {type: "string"},
                                confirmed: {type: "string"}
                            }
                        }
                    },
                    pageSize: 20,
                    serverPaging: false,
                    serverFiltering: false,
                    serverSorting: false
                });

                $("#selectusers_grid").kendoGrid({
                    dataSource: listData,
                    autoBind: true,
                    filterable: false,
                    sortable: false,
                    pageable: true,
                    resizable: true,
                    columns: [
                        {
                            field: "id",
                            title: "ID",
                            width: 50
                        }, {
                            field: "fio",
                            title: "ФИО"
                        }, {
                            field: "email",
                            title: "E-mail"
                        }, {
                            field: "phone",
                            title: "Телефон"
                        }, {
                            field: "sex",
                            title: "Пол"
                        }, {
                            field: "birth_date",
                            title: "Дата рождения"
                        }, {
                            field: "city",
                            title: "Город"
                        }, {
                            field: "confirmed",
                            title: "Подтверждён"
                        }, {
                            title: "Действия",
                            width: 80,
                            command: [
                                {
                                    name: 'select',
                                    text: '<i class="icon-ok"></i>',
                                    click: function(e) {
                                        e.preventDefault();
                                        var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                                        window.parent.selectUsers.field.val(dataItem.id);
                                        window.parent.selectUsers.win.data("kendoWindow").close();
                                    }
                                }
                            ]
                        }
                    ]
                });
            })();
        </script>
    </body>
</html>