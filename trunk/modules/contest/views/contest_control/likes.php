<div class="navbar navbar-static-top b-pane">
    <div class="navbar-inner">
        <span class="brand">Лайки вопроса </span>
        <!--<form class="navbar-form pull-right" id="likePlusForm">
            <input type="hidden" name="work_id" value="<?//= $work->id ?>">
            <input type="text" class="span1" name="likePlusCount" id="likePlusCount">
            <button type="submit" class="btn" id="likePlusSubmit" placeholder="Введите число для накрутки">Добавить лайки</button>
        </form>-->
        <ul class="nav pull-right">
            <li>
                <div class="btn-group">
                    <a href="/admin/module/contest/ajax_contests_workform/<?= $work->id ?>?contestId=<?= $work->contest_id ?>" id="editWorkButton" class="btn">Изменить работу</a>
                    <a href="/admin/module/contest/ajax_contests_worksgrid/<?= $work->contest_id ?>" id="backButton" class="btn">Назад</a>
                </div>
            </li>
            <li class="divider-vertical"></li>
        </ul>
    </div>
</div>
<div id="likes_grid" style="border: 0px; height: 100%;"></div>
<script type="text/javascript">
    (function() {
        $('#backButton,#editWorkButton').click(function(e) {
            e.preventDefault();
            ajax_div('#content_pane', $(this).attr('href'), function() {

            });
        });
        
      /*  $('#likePlusForm').submit(function(event){
            if($('#likePlusCount').val() <= 0)
            {
                $.pnotify({
                    title: 'Ошибка',
                    text: 'Укажите кол-во голосов для накрутки',
                    type: 'error'
                });
                
                return false;
            }
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/admin/module/contest/ajax_like_plus',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(json) {
                    if (json && json.status == true) {
                        $.pnotify({
                            title: 'Голоса добавлены',
                            type: 'success'
                        });
                        $("#likes_grid").data("kendoGrid").dataSource.read();
                        $('#likes_grid').data('kendoGrid').refresh();
                    } else if (json && json.status == false) {
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
        });
*/
        var serviceRoot = "/admin/module/contest";
        var listData = new kendo.data.DataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_contests_likes/<?= $work->id ?>",
                    dataType: "json",
                }
            },
            schema: {
                data: 'data',
                total: 'total',
                model: {
                    fields: {
                        fio: {type: "string"},
                        date: {type: "datetime"},
                        ip: {type: "string"},
                        useragent: {type: "string"}
                    }
                }
            },
            pageSize: 20,
            serverPaging: false,
            serverFiltering: false,
            serverSorting: false
        });

        $("#likes_grid").kendoGrid({
            dataSource: listData,
            autoBind: true,
            filterable: false,
            sortable: false,
            pageable: true,
            resizable: true,
            columns: [
                {
                    field: "user",
                    title: "Пользователь"
                }, {
                    field: "date",
                    title: "Дата"
                }, {
                    field: "ip",
                    title: "IP"
                }, {
                    field: "useragent",
                    title: "User Agent"
                }, {
                    title: "Действия",
                    width: 80,
                    command: [
                        {
                            name: 'delete',
                            text: '<i class="icon-trash"></i>',
                            click: function(e) {
                                e.preventDefault();
                                if(!confirm("Вы действительно хотите удалить лайк?")) return;
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));

                                $.ajax({
                                    type: 'GET',
                                    url: '/admin/module/contest/ajax_contests_deletelike/'+dataItem.id,
                                    dataType: 'json',
                                    success: function (json) {
                                        if(json.status === true)
                                        {
                                            listData.remove(dataItem.id);
                                            $("#likes_grid").data("kendoGrid").removeRow(e.currentTarget);
                                            $.pnotify({
                                                title: 'Лайк удалён',
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
    })();
</script>