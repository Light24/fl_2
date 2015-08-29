<div class="navbar navbar-static-top b-pane" style="position: relative;z-index: 1;">
    <div class="navbar-inner">
        <span class="brand"><?php if (isset($contest->id) && !empty($contest->id)): ?> Редактирование категории <?php else: ?>Добавление категории <?php endif; ?></span>
        <ul class="nav pull-right">
            <div class="btn-group">
          
                <button class="btn btn-primary" type="submit" form="add_contest_form">Сохранить</button>
            </div>
        </ul>
    </div>
</div>

<form id="add_contest_form" class="form-horizontal" style="padding: 16px; position: absolute;left: 0px;right: 0px;bottom: 0px;top: 41px;overflow: auto;margin: 0px;" action="/admin/module/contest/ajax_save_contest" method="post">
    <input type="hidden" name="id" value="<?= $contest->id ?>" />
    <div class="tab-content" data-tab="content">
        <div class="control-group">
            <label class="control-label" for="category">Название категории</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="category" name="category" placeholder="Название категории" value="<?= $contest->category ?>" />
            </div>
        </div>
  

    </div>    
</form>
<div id="window"></div>
<script type="text/javascript">
    (function() {

 


        var window = $("#window");




        $('#add_contest_form').submit(function(event) {
            event.preventDefault();
           
            $.ajax({
                type: 'POST',
                url: '/admin/module/contest/ajax_save_contest',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(json) {
                    if (json && json.status == true) {
                        $("#contestList").data('kendoGrid').dataSource.read();
                        var curId = $('[name="id"]').val();
                        if (curId == json.id) {
                            $.pnotify({
                                title: 'Изменения сохранены',
                                type: 'success'
                            });
                        } else {
                            $.pnotify({
                                title: 'Категория добавлена',
                                type: 'success'
                            });
                            ajax_div('#content_pane', '/admin/module/contest/ajax_contests_form/' + json.id, function() {

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
