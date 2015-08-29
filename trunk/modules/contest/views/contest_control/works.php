
<div class="navbar navbar-static-top b-pane">
    <div class="navbar-inner">
        <span class="brand">Вопросы категории "<?= $contest->category ?>"</span>
        <ul class="nav pull-right">
            <div class="btn-group">
            <a href="/admin/module/contest/ajax_contests_workform/?contestId=<?= $contest->id ?>" id="addButton" class="btn btn-primary">Добавить вопрос</a>
            </div>
        </ul>
    </div>
</div>
<div id="works_grid" style="border: 0px; height: 100%;"></div>
<script type="text/javascript">
    (function() {
        
        

        function setCookie(name, value, expires, path, domain, secure) {
            document.cookie = name + "=" + escape(value) +
                    ((expires) ? "; expires=" + expires : "") +
                    ((path) ? "; path=" + path : "") +
                    ((domain) ? "; domain=" + domain : "") +
                    ((secure) ? "; secure" : "");
        }

        function getCookie(name) {
            var cookie = " " + document.cookie;
            var search = " " + name + "=";
            var setStr = null;
            var offset = 0;
            var end = 0;
            if (cookie.length > 0) {
                offset = cookie.indexOf(search);
                if (offset != -1) {
                    offset += search.length;
                    end = cookie.indexOf(";", offset)
                    if (end == -1) {
                        end = cookie.length;
                    }
                    setStr = unescape(cookie.substring(offset, end));
                }
            }
            return(setStr);
        }
        $('#backButton,#addButton').click(function(e) {
            e.preventDefault();
            ajax_div('#content_pane', $(this).attr('href'), function() {

            });
        });

        var idPage = (getCookie("selectedPageWork"));

        if (idPage == null)
            idPage = 1;

        var serviceRoot = "/admin/module/contest";
        var listData = new kendo.data.DataSource({
            transport: {
                read: {
                    url: serviceRoot + "/ajax_contests_works/<?= $contest->id ?>",
                    dataType: "json",
                }
            },
            schema: {
                data: 'data',
                total: 'total',
                model: {
                    fields: {
                        id: {type: "number", editable: false},
                        text_q: {type: "string"},
                        user: {type: "string"},
                        datePost: {type: "datetime"},
                        likes: {type: "string"},
                        likey: {type: "string"},
                        liken: {type: "string"}
                    }
                }
            },
            pageSize: 20,
            page: idPage,
            serverPaging: false,
            serverFiltering: false,
            serverSorting: false
        });

        $("#works_grid").kendoGrid({
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
                    field: "text_q",
                    title: "текст вопроса",
                    width: 200
                }, {
                    field: "user",
                    title: "Пользователь",
                    width: 100
                }, {
                    field: "datePost",
                    title: "Дата добавления",
                    width: 100
                },  {
                    field: "likes",
                    title: "Лайков",
                    width: 50
                }, 
                 {
                    field: "likey",
                    title: "Да",
                    width: 50
                }, 
                 {
                    field: "liken",
                    title: "Нет",
                    width: 50
                },
                {
                    title: "Действия",
                    width: 155,
                    command: [
                        {
                            name: 'likes',
                            text: '<i class="icon-thumbs-up"></i>',
                            click: function(e) {
                                e.preventDefault();
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                                $('#works_grid').html('');
                                $('#works_grid').removeData();
                                ;
                                ajax_div('#content_pane', '/admin/module/contest/ajax_contests_likesgrid/' + dataItem.id + '?contestId=<?= $contest->id ?>', function() {

                                });
                            }
                        },
                                             {
                            name: 'change',
                            text: '<i class="icon-pencil"></i>',
                            click: function(e) {
                                setCookie("selectedPageWork", $(".k-state-selected").text());

                                e.preventDefault();
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
                                $('#works_grid').html('');
                                $('#works_grid').removeData();
                                ;
                                ajax_div('#content_pane', '/admin/module/contest/ajax_contests_workform/' + dataItem.id + '?contestId=<?= $contest->id ?>', function() {

                                });
                            }
                        },
                        {
                            name: 'delete',
                            text: '<i class="icon-trash"></i>',
                            click: function(e) {
                                e.preventDefault();
                                if (!confirm("Вы действительно хотите удалить работу?"))
                                    return;
                                var dataItem = this.dataItem($(e.currentTarget).closest("tr"));

                                $.ajax({
                                    type: 'GET',
                                    url: '/admin/module/contest/ajax_contests_deletework/' + dataItem.id,
                                    dataType: 'json',
                                    success: function(json) {
                                        if (json.status === true)
                                        {
                                            listData.remove(dataItem.id);
                                            $("#works_grid").data("kendoGrid").removeRow(e.currentTarget);
                                            $.pnotify({
                                                title: 'Работа удалена',
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