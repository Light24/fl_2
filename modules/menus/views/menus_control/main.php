<div style="width: 100%; height: 100%; border: 0px; overflow: hidden;">
    <div class="navbar navbar-static-top b-pane">
        <div class="navbar-inner">
            <span class="brand" href="#">Меню</span>
            <ul class="nav pull-right">
                <li><button id="menus_add_form" class="btn" type="button">Создать меню</button></li>
            </ul>
        </div>
    </div>
    <div id="menus_grid" style="border: 0px;"></div>
</div>
<script id="menus_add_menu_template" type="text/template">
    <form id="menus_add_menu_form" action="" method="post" style="margin: 0px;">
        <input type="hidden" name="id" value="" />
        <div class="k-edit-form-container">
            <div class="k-edit-label">
                <label for="name">Имя</label>
            </div>
            <div class="k-edit-field">
                <input type="text" class="k-input k-textbox" name="name" required="required" style="display: block; width: 400px;">
            </div>
            <div class="k-edit-label">
                <label for="description">Описание</label>
            </div>
            <div class="k-edit-field">
                <textarea class="k-input k-textbox" name="description" style="display: block; width: 400px;"></textarea>
            </div>
            <div class="k-edit-label">
                <label for="template">Шаблон</label>
            </div>
            <div class="k-edit-field">
                <input type="text" class="k-input k-textbox" name="template" style="display: block; width: 400px;">
            </div>
            <a id="menus_add_menu_form_save" class="k-button k-button-icontext k-grid-update" href="#">
                <span class="k-icon k-update"></span>
                Сохранить
            </a>
            <a id="menus_add_menu_form_cancel" class="k-button k-button-icontext k-grid-cancel" href="#">
                <span class="k-icon k-cancel"></span>
                Отмена
            </a>
        </div>
    </form>
</script>
<script type="text/javascript">
    (function() {
    var serviceRoot = "/admin/module/menus";
    
    function createWindow() {
        var $w = $('<div id="menusEditMenuWindow"></div>');
        $w.html($('#menus_add_menu_template').html());
        $w.kendoWindow({
            modal: true,
            width: '600px',
            title: 'Редактирование меню'
        });
        return $w;
    };
    
    if ($('#menusEditMenuWindow').length == 0) createWindow();
    
    var listData = new kendo.data.DataSource({
        transport: {
            read: {
                url: serviceRoot + "/ajax_menus_list",
                dataType: "json"
            }
        },
        schema: {
            data: 'data',
            total: 'total',
            model: {
                id: 'id',
                fields: {
                    id: { type: "number"},
                    name: { type: "string"},
                    description: { type: "string"},
                    template: { type: "string"}
                }
            }
        },
        //pageSize: 20,
        serverPaging: false,
        serverFiltering: false,
        serverSorting: false
    });
    
    $("#menus_grid").kendoGrid({
        dataSource: listData,
        filterable: false,
        sortable: false,
        pageable: false,
        columns: [
            {
                field: "description",
                title: "Описание",
                width: '40%'
            }, {
                field: "name",
                title: "Имя",
                width: '40%'
            }, {
                command: [
                    {
                        name: 'editMenu',
                        text: '<i class="icon-pencil"></i>',
                        click: function(e) {
                            e.preventDefault();
                            var $w = $('#menusEditMenuWindow');
                            var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                            $w.find('#menus_add_menu_form input[name=id]').val(dataItem.id);
                            $w.find('#menus_add_menu_form input[name=name]').val(dataItem.name);
                            $w.find('#menus_add_menu_form textarea[name=description]').val(dataItem.description);
                            $w.find('#menus_add_menu_form input[name=template]').val(dataItem.template);
                            $w.find('#menus_add_menu_form_save').off('click').click(function(event) {
                                event.preventDefault();
                                $.ajax({
                                    type: 'POST',
                                    url: serviceRoot + "/ajax_menu_edit",
                                    dataType: 'json',
                                    data: $w.find('#menus_add_menu_form').serialize(),
                                    beforeSend: function () {

                                    },
                                    complete: function () {
                                    },
                                    success: function (json) {
                                        if(json && json.status == true) {
                                            $.pnotify({
                                                text: 'Изменения сохранены.',
                                                type: 'success'
                                            });
                                            listData.read();
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
                                    error: function () {
                                        $.pnotify({
                                            title: 'Ошибка',
                                            text: 'Запрос завершился неудачно. Попробуйте позже.',
                                            type: 'error'
                                        });
                                    }
                                });
                            });
                            $w.find('#menus_add_menu_form_cancel').off('click').click(function(event) {
                                event.preventDefault();
                                $w.data('kendoWindow').close();
                            });
                            $w.data('kendoWindow').center().open();
                        }
                    }, {
                        name: 'editMenuItems',
                        text: '<i class="icon-list"></i>',
                        click: function(e) {
                            e.preventDefault();
                            var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                            navigate('/admin/module/menus/edit_'+dataItem.id);
                        }
                    }, {
                        name: 'delete',
                        text: '<i class="icon-trash"></i>',
                        click: function(e) {
                            e.preventDefault();
                            if (confirm('Вы действительно хотите удалить меню?') == false) return;
                            var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                            $.ajax({
                                type: 'POST',
                                url: serviceRoot + "/ajax_menu_delete",
                                dataType: 'json',
                                data: {id: dataItem.id},
                                beforeSend: function () {

                                },
                                complete: function () {
                                    listData.read();
                                },
                                success: function (json) {
                                    if(json && json.status == true) {
                                        $.pnotify({
                                            text: 'Меню удалено.',
                                            type: 'success'
                                        });
                                    } else if(json && json.status == false) {
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
                                error: function () {
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
    
    $('#menus_add_form').click(function() {
        var $w = $('#menusEditMenuWindow');
        $w.find('#menus_add_menu_form input[name=id]').val('');
        $w.find('#menus_add_menu_form input[name=name]').val('');
        $w.find('#menus_add_menu_form textarea[name=description]').val('');
        $w.find('#menus_add_menu_form input[name=template]').val('');
        $w.find('#menus_add_menu_form_save').off('click').click(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: serviceRoot + "/ajax_menu_add",
                dataType: 'json',
                data: $w.find('#menus_add_menu_form').serialize(),
                beforeSend: function () {

                },
                complete: function () {
                },
                success: function (json) {
                    if(json && json.status == true) {
                        $.pnotify({
                            text: 'Меню добавлено удачно.',
                            type: 'success'
                        });
                        listData.read();
                        $w.data('kendoWindow').close();
                    } else if(json && json.status == false) {
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
                error: function () {
                    $.pnotify({
                        title: 'Ошибка',
                        text: 'Запрос завершился неудачно. Попробуйте позже.',
                        type: 'error'
                    });
                }
            });
        });
        $w.find('#menus_add_menu_form_cancel').off('click').click(function(event) {
            event.preventDefault();
            $w.data('kendoWindow').close();
        });
        $w.data('kendoWindow').center().open();
    });
    })();
</script>