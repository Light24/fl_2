<div class="navbar navbar-static-top b-pane" style="position: relative;z-index: 1;">
    <div class="navbar-inner">
        <span class="brand"><?php if (isset($user->id) && !empty($user->id)): ?> Редактирование пользователя <?php else: ?>Добавление пользователя <?php endif; ?></span>
        <ul class="nav pull-right">
            <div class="btn-group">
                <a href="/admin/module/users/" id="backButton" class="btn">К списку пользователей</a>
                <button class="btn btn-primary" type="submit" form="add_user_form">Сохранить</button>
            </div>
        </ul>
    </div>
</div>

<form id="add_user_form" class="form-horizontal" style="padding: 16px; position: absolute;left: 0px;right: 0px;bottom: 0px;top: 41px;overflow: auto;margin: 0px;" action="/admin/module/users/ajax_save_user" method="post">
    <input type="hidden" name="id" value="<?= $user->id ?>" />
    <div class="tab-content" data-tab="content">
        
        <div class="control-group">
            <label class="control-label" for="fio">Фамилия Имя Отчество</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="first_name" name="fio" p
                       laceholder="Фамилия Имя Отчество" value="<?= $user->fio ?>" />
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="login">Логин</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="login" name="login" p
                       laceholder="логин" value="<?= $user->login ?>" />
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="city">Город</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="city" name="city" 
                       placeholder="Город" value="<?= $user->city ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="photo">Аватар</label>
            <div class="controls">
                <input type="text" id="photo" name="photo" value="<?= $user->photo ?>" style="width:292px;">
                <button id="user_choose_photo" class="btn" type="button">Выбрать...</button>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="email" name="email" placeholder="E-mail" value="<?= $user->email ?>" />
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="password"><?php if (isset($user->id) && !empty($user->id)): ?>Новый пароль<?php else: ?>Пароль<?php endif; ?></label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="password" name="password" placeholder="Введите пароль" value="" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date_birth">Дата рождения</label>
            <div class="controls">
                <input id="birth_date" name="date_birth" value="<?= $user->date_birth ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="sex">Пол</label>
            <div class="controls">
                <select name="sex" id="sex">
                <?php
                    $array = array('','мужской','женский');
                    foreach ($array as $val)
                    {
                        if($user->sex == $val) $ch = 'selected="selected"';
                        else $ch = '';
                        
                        echo '<option value="'.$val.'" '.$ch.'>'.$val.'</option>';
                    }
                ?>
                </select>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="confirmed">Регистрация подтверждена</label>
            <div class="controls">
                <input type="checkbox" id="confirmed" name="confirmed" value="1" class="input" <?php if ($user->confirmed == 'Да'): ?>checked="checked"<?php endif; ?>>
            </div>
        </div>
    </div>    
</form>
<div id="window"></div>
<script type="text/javascript">
    (function() {

        $('#backButton').click(function(e){
            e.preventDefault();
            ajax_div('#content_pane', $(this).attr('href'), function() {
                
            });
        });
        var window = $("#window");

        $("#user_choose_photo").click(function(e) {
            e.preventDefault();

            window.kendoWindow({
                modal: true,
                iframe: true,
                title: 'Выбор файла',
                width: '800px',
                height: '600px',
                actions: ["Refresh", "Maximize", "Close"],
                content: "/assets/lib/elfinder/elfinder_standalone.html"
            });

            filemanager.field = '#photo';
            filemanager.window = window.data("kendoWindow");
            window.data("kendoWindow").open().center();
        });
        
        var start = $("#birth_date").kendoDatePicker({
            format: "yyyy-MM-dd"
        }).data("kendoDatePicker");

        $('#add_user_form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/admin/module/users/ajax_save_user',
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
                                title: 'Пользователь добавлен',
                                type: 'success'
                            });
                            ajax_div('#content_pane', '/admin/module/users/ajax_users_form/' + json.id + '', function() {

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
