<div class="navbar navbar-static-top b-pane" style="position: relative;z-index: 1;">
    <div class="navbar-inner">

        <span class="brand"><?php if (isset($work->id) && !empty($work->id)): ?> Редактирование вопроса <?php else: ?>Добавление вопроса <?php endif; ?> для конкурса "<?= $contest->category ?>"</span>
        <ul class="nav pull-right">
            <div class="btn-group">
                <a href="/admin/module/contest/ajax_contests_worksgrid/<?= $contest->id ?>" id="worksButton" class="btn">К списку вопросов</a>
                <a href="/admin/module/contest/ajax_contests_form/<?= $contest->id ?>" id="backButton" class="btn">К редактированию категории</a>
                <button class="btn btn-primary" type="submit" form="add_work_form">Сохранить</button>
            </div>
        </ul>
    </div>
</div>

<form id="add_work_form" class="form-horizontal" style="padding: 16px; position: absolute;left: 0px;right: 0px;bottom: 0px;top: 41px;overflow: auto;margin: 0px;" action="/admin/module/contest/ajax_save_work" method="post">
    <input type="hidden" name="contest_id" value="<?= $contest->id ?>" />
    <input type="hidden" name="id" value="<?= $work->id ?>" />
   
    <div class="control-group">
        <label class="control-label" for="user_id">ID пользователя</label>
        <div class="controls">
            <input class="input-xxlarge" type="text" id="user_id" name="user_id" placeholder="Укажите Id владельца работы" value="<?= $work->user_id ?>"  style="width:292px;">
            <button id="work_choose_user" class="btn" type="button">Выбрать...</button>
        </div>
    </div>
    
  
    
    <div class="control-group">
        <label class="control-label" for="text_q">Текст вопроса</label>
        <div class="controls">
            <textarea name="text_q" id="description" class="input-xxlarge"><?= $work->text_q ?></textarea>
        </div>
    </div>
    
</form>
<div id="window"></div>
<script type="text/javascript">

                $(document).ready(function() {
                    var str = '';
               
              
                });

                var selectUsers = {};
                (function() {

                    $('#worksButton').click(function(e) {
                        e.preventDefault();
                        ajax_div('#content_pane', $(this).attr('href'), function() {

                        });
                    });


                    $('#backButton').click(function(e) {
                        e.preventDefault();
                        ajax_div('#content_pane', $(this).attr('href'), function() {

                        });
                    });


                    var window = $("#window");

                
                    $("#work_choose_user").click(function(e) {
                        e.preventDefault();

                        window.kendoWindow({
                            modal: true,
                            iframe: true,
                            title: 'Выбор пользователя',
                            width: '800px',
                            height: '600px',
                            actions: ["Refresh", "Maximize", "Close"],
                            content: "/admin/module/users/ajax_users_select"
                        });

                        selectUsers.field = $('#user_id');
                        selectUsers.win = window;
                        window.data("kendoWindow").open().center();
                    });

                    $('#add_work_form').submit(function(event) {
                        event.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: '/admin/module/contest/ajax_save_work',
                            dataType: 'json',
                            data: $(this).serialize(),
                            beforeSend: function() {

                            },
                            complete: function() {

                            },
                            success: function(json) {
                                if (json && json.status == true) {
                                    var curId = $('[name="id"]').val();
                                    if (curId == json.id) {
                                        $.pnotify({
                                            title: 'Изменения сохранены',
                                            type: 'success'
                                        });
                                    } else {
                                        $.pnotify({
                                            title: 'Вопрос добавлен',
                                            type: 'success'
                                        });
                                        ajax_div('#content_pane', '/admin/module/contest/ajax_contests_workform/' + json.id + '?contestId=<?= $contest->id ?>', function() {

                                        });
                                    }
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
                })();

</script>
