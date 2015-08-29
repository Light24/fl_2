<div class="navbar navbar-static-top b-pane" style="position: relative;z-index: 1;">
    <div class="navbar-inner">
        <span class="brand">Редактирование настроек</span>
        <ul class="nav pull-right">
            <div class="btn-group">
                <button class="btn btn-primary" type="submit" form="settings_form">Сохранить</button>
            </div>
        </ul>
    </div>
</div>

<form id="settings_form" class="form-horizontal" style="padding: 16px; position: relative;left: 0px;right: 0px;bottom: 0px;top: 41px;overflow: auto;margin: 0px;" action="/admin/module/settings/ajax_save_settings" method="post">
    <div class="tab-content" data-tab="content">
        <div class="control-group">
            <label class="control-label" for="to">E-mail получателя системных сообщений</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="to" name="to" placeholder="" value="<?= Arr::get(Arr::get($config, 'SMTP'), 'to') ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="hostname">SMTP хост</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="hostname" name="hostname" placeholder="" value="<?= Arr::get(Arr::get(Arr::get($config, 'SMTP'), 'options'), 'hostname') ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="port">SMTP порт</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="port" name="port" placeholder="" value="<?= Arr::get(Arr::get(Arr::get($config, 'SMTP'), 'options'), 'port') ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="username">SMTP логин</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="username" name="username" placeholder="" value="<?= Arr::get(Arr::get(Arr::get($config, 'SMTP'), 'options'), 'username') ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">SMTP пароль</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="password" name="password" placeholder="" value="<?= Arr::get(Arr::get(Arr::get($config, 'SMTP'), 'options'), 'password') ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="encryption">SMTP шифрование</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="encryption" name="encryption" placeholder="" value="<?= Arr::get(Arr::get(Arr::get($config, 'SMTP'), 'options'), 'encryption') ?>" />
            </div>
        </div>
    </div>    
</form>

<?
 
?>




<div id="window"></div>




<script type="text/javascript">
    
    (function() {
        
           
        
        
        
        $('#settings_form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/admin/module/settings/ajax_save_settings',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(json) {
                    if (json && json.status == true) {
                        $.pnotify({
                            title: 'Изменения сохранены',
                            type: 'success'
                        });
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
