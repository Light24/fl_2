<div class="navbar navbar-static-top b-pane" style="position: relative;z-index: 1;">
    <div class="navbar-inner">
        <ul class="nav">
            <div class="btn-group">
                <button class="tab-switch btn active" type="button" data-tab="content">Содержимое</button>
                <button class="tab-switch btn" type="button" data-tab="properties">Свойства</button>
            </div>
        </ul>
        <ul class="nav pull-right">
            <div class="btn-group">
                <button class="btn btn-primary" type="submit" form="edit_page_form">Сохранить</button>
                <button id="pages_cancel" class="btn" type="button" form="edit_page_form">Вернуться</button>
            </div>
        </ul>
    </div>
</div>

<form id="edit_page_form" class="form-horizontal" style="padding: 16px; position: absolute;left: 0px;right: 0px;bottom: 0px;top: 41px;overflow: auto;margin: 0px;" action="/admin/module/pages/save_page" method="post">
    <input type="hidden" name="id" value="<?= $page->id ?>" />
    <div class="tab-content" data-tab="content">
        <div class="control-group">
            <label class="control-label" for="title">Заголовок</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="title" name="title" placeholder="Заголовок" value="<?= $page->title ?>" />
            </div>
        </div> 
        <div class="control-group input-append">
            <label class="control-label" for="parent_id">Родительская страница</label>
            <div class="controls">
                <input type="hidden" id="parent_id" name="parent_id" value="<?= $page->parentId ?>" />
                <?php if($page->parentId) $parent = $page->getParentPage(); ?>
                <input type="text" id="parent_id_title" value="<?php if(isset($parent)) echo $parent->title; ?>" disabled="disabled" />
                <button id="pages_choose_page" class="btn" type="button">Выбрать...</button>
            </div>
        </div> 
        <p>Текст страницы</p>
        <textarea name="prev_text" id="prev_text" rows="10"><?= $page->prevText ?></textarea>
    </div>
    <div class="tab-content" data-tab="properties" style="display: none;">
        <div class="control-group input-append">
            <label class="control-label" for="url">Url</label>
            <div class="controls">
                <input class="input-xxlarge" type="text" id="url" name="url" placeholder="Url" value="<?= $page->url ?>" />
                <button class="btn" type="button" id="translitUrl">Подобрать</button>
            </div>
        </div> 
        <div class="control-group">
            <label class="control-label" for="short_url">Короткий url</label>
            <div class="controls">
                <input type="text" id="short_url" name="short_url" placeholder="Короткий url" value="<?= $page->shortUrl ?>" />
            </div>
        </div> 
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="visible" value="1" <?php if($page->visible): ?>checked="checked"<?php endif; ?> />
                    Активна
                </label>
            </div>
        </div> 
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="searchable" value="1" <?php if($page->searchable): ?>checked="checked"<?php endif; ?> />
                    Учавствует в поиске
                </label>
            </div>
        </div> 
        <div class="control-group">
            <label class="control-label" for="main_template">Главный шаблон</label>
            <div class="controls">
                <input type="text" id="main_template" name="main_template" value="<?= $page->_mainTemplate ?>" />
            </div>
        </div> 
        <div class="control-group">
            <label class="control-label" for="page_template">Шаблон страницы</label>
            <div class="controls">
                <input type="text" id="page_template" name="page_template" value="<?= $page->_pageTemplate ?>" />
            </div>
        </div> 
        <div class="control-group">
            <label class="control-label" for="default_main_template">Главный шаблон по умолчанию для дочерних страниц</label>
            <div class="controls">
                <input type="text" id="default_main_template" name="default_main_template" value="<?= $page->default_mainTemplate ?>" />
            </div>
        </div> 
        <div class="control-group">
            <label class="control-label" for="default_page_template">Шаблон страницы по умолчанию для дочерних страниц</label>
            <div class="controls">
                <input type="text" id="default_page_template" name="default_page_template" value="<?= $page->default_pageTemplate ?>" />
            </div>
        </div>
    </div>
</form>
<script id="pages_choose_page_template" type="text/template">
    <div id="pages_choose_page_treeview" style="position: absolute; left: 4px; top: 4px; right: 4px; bottom: 44px;"></div>
    <div style="position: absolute; left: 4px; right: 4px; bottom: 4px;">
        <a id="pages_choose_page_save" class="k-button k-button-icontext k-grid-update" href="#">
            <span class="k-icon k-update"></span>
            Выбрать
        </a>
        <a id="pages_choose_page_cancel" class="k-button k-button-icontext k-grid-cancel" href="#">
            <span class="k-icon k-cancel"></span>
            Отмена
        </a>
    </div>
</script>
<script type="text/javascript">
    (function() {
        
        function urlLit(w, v) {
            var tr = 'a b v g d e ["zh","j"] z i y k l m n o p r s t u f h c ch sh ["shh","shch"] ~ y ~ e yu ya ~ ["jo","e"]'.split(' ');
            var ww = '';
            w = w.toLowerCase();
            w = w.replace('№','');
            for (i = 0; i < w.length; ++i) {
                cc = w.charCodeAt(i);
                ch = (cc >= 1072 ? tr[cc - 1072] : w[i]);
                if (ch.length < 3)
                    ww += ch;
                else
                    ww += eval(ch)[v];
            }
            return(ww.replace(/[^a-zA-Z0-9\-]/g, '-').replace(/[-]{2,}/gim, '-').replace(/^\-+/g, '').replace(/\-+$/g, ''));
        }
        
        $('#translitUrl').click(function(e){
            e.preventDefault();
            var title  = $('#title').val();
            if(title != '')
            {
                $('#url').val(urlLit(title));
            }
            else
            {
                $.pnotify({
                    title: 'Ошибка',
                    text: 'Заголовок должен быть заполнен',
                    type: 'error'
                });
            }
        });

        
        function createChoosePageWindow(callback) {
            
            function refreshTree() {
                var $tree = $w.find("#pages_choose_page_treeview");
                var treeView = $tree.data('kendoTreeView');
                treeView.expand($tree.find('.k-item').first());
                treeView.select($tree.find('.k-item').first());
            }
            
            var serviceRoot = "/admin/module/pages";
            
            var treeData = new kendo.data.HierarchicalDataSource({
                transport: {
                    read: {
                        url: serviceRoot + "/ajax_tree",
                        dataType: "json"
                    }
                },
                schema: {
                    model: {
                        id: "id",
                        hasChildren: "hasChild"
                    }
                },
                requestEnd: function(){
                    setTimeout(function() {
                        refreshTree();
                    }, 1);
                }
            });
            
            var $w = $('<div></div>');
            $w.html($('#pages_choose_page_template').html());
            $w.find("#pages_choose_page_treeview").kendoTreeView({
                dataSource: treeData,
                dataTextField: "title",
                loadOnDemand: true
            });
            $w.kendoWindow({
                modal: true,
                title: 'Выбор страницы',
                width: '600px',
                height: '400px'
            });
            $w.find("#pages_choose_page_save").click(function(event) {
                event.preventDefault();
                var treeView = $w.find("#pages_choose_page_treeview").data('kendoTreeView');
                var row = treeView.dataSource.getByUid(treeView.select().data('uid'));
                callback(row.id, row.title);
                $w.data('kendoWindow').close();
            });
            $w.find("#pages_choose_page_cancel").click(function(event) {
                event.preventDefault();
                $w.data('kendoWindow').close();
            });
            return $w;
        };
        
        $('#edit_page_form').submit(function(event) {
            event.preventDefault();
            $(this).find('[name="prev_text"]').val(CKEDITOR.instances.prev_text.getData());
            if($('#url').val() == '') $('#url').val(urlLit($('#title').val()));
            $.ajax({
                type: 'POST',
                url: '/admin/module/pages/update_page',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function () {
                    
                },
                complete: function () {
                    
                },
                success: function (json) {
                    if(json && json.status == true) {
                        var curId = $('[name="id"]').val();
                        if(curId == json.page) {
                            $.pnotify({
                                title: 'Изменения сохранены',
                                type: 'success'
                            });
                        } else {
                            navigate('/admin/module/pages/edit' + json.page);
                        }
                    } else if(json && json.status == false) {
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
        });
        
        var $w = createChoosePageWindow(function(id, title) {
            if(id == -1) {
                $('#parent_id').val('');
                $('#parent_id_title').val('');
            } else {
                $('#parent_id').val(id);
                $('#parent_id_title').val(title);
            }
        });
        
        $('#pages_choose_page').click(function(event) {
            event.preventDefault();
            $w.data('kendoWindow').center().open();
        });
        
        $('.tab-switch').click(function(event) {
            event.preventDefault();
            var curTab = $('.tab-switch.active').attr('data-tab');
            var newTab = $(this).attr('data-tab');
            $('.tab-switch.active').removeClass('active');
            $(this).addClass('active');
            $('.tab-content[data-tab="'+curTab+'"]').hide();
            $('.tab-content[data-tab="'+newTab+'"]').show();
        });
        
        CKEDITOR.replace('prev_text', {
            height: 500
        });
        
    })();
</script>
