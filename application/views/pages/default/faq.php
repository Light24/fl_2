<div class="container-margin-left content">
    <div class="main-content-top-layer"></div>
    <div class="main-content">
        <h2 class="h2-title-style h2-rools">
            <?= $page->title ?>
        </h2>
        <h2 style="margin-right:145px;" class="h2-archive-right">
            Задать вопрос
        </h2>
        <div style="" class="faq-list page-list">
            <ul>
                <?php
                $pages = $page->getChildPages();
                if (!empty($pages)) {
                    foreach ($pages as $page) {
                        echo <<<eof
<li><a href="#"> {$page->title}</a>
    <div>
        {$page->prevText}
    </div>
</li>          
eof;
                    }
                }
                ?>
            </ul>    
        </div>
        <div style="width:300px; margin-left:10px;" class="page-list-right">
            <form action="" method="post">
                <div  class="new-select-style-wpandyou-faq">
                    <select  style="" id="theme" name="theme">
                        <option value="">тема не указана</option>
<?php
$menu = Menus::getMenuByName('feedbackMenu');
$items = $menu->getItems();
foreach ($items as $itemId => $item) {
    $post = Arr::get($_POST,'theme');
    if($item->title == $post) $ch = 'selected="selected"';
    $ch = '';
    
    echo <<<eof
        <option value="{$item->title}" {$ch}>{$item->title}</option>
eof;
}
?>
                    </select>
                </div>
                <div class="input-group input-group-small">
                    <input type="text" class="form-control" name="fio" placeholder="Ваше имя" value="<?= Arr::get($_POST,'fio') ?>">
                </div>
                <div class="input-group input-group-small">
                    <input type="text" class="form-control" name="email" placeholder="Email *" value="<?= Arr::get($_POST,'email') ?>">
                </div>   
                <textarea class="textarea-group-small" placeholder="Сообщение" name="message"><?= Arr::get($_POST,'message') ?></textarea>

                <span class="text-span-captcha">Введите защитный код</span>
                <br/><br/>
                <div class="input-group input-group-sm">
                    <input type="text" id="code-captcha" name="captcha" class="form-control">
                </div>
<?= Captcha::instance(); ?>
                <a href="#" onclick="reload();
                    return false;" class="reload-captcha"> Обновить картинку</a>
                <br/><br/>
                <button type="submit" class="send-request" style="border:0px;"></button>
                <?php
                    if(isset($error) && !empty($error)) echo '<p style="width: 100%; float: left; display: block;margin:15px 0 0 5px;" class="error-captcha">'.$error.'</p>';
                    if(isset($success) && !empty($success)) echo '<p class="error-captcha" style="width: 100%; float: left; display: block;margin:15px 0 0 5px;color:green !important;">'.$success.'</p>';
                ?>
            </form>
        </div>
    </div>
</div><!-- .content -->