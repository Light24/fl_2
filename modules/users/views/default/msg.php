
<?
$level = 'Новичок';
if ($user['points'] <= 249) {
    $level = 'Ученик';
} elseif ($user['points'] > 249 && $user['points'] <= 499) {
    $level = 'Знаток';
} elseif ($user['points'] > 499 && $user['points'] <= 999) {
    $level = 'Профи';
} elseif ($user['points'] > 999 && $user['points'] <= 2499) {
    $level = 'Мастер';
} elseif ($user['points'] > 2499 && $user['points'] <= 4999) {
    $level = 'Гуру';
} elseif ($user['points'] > 4999 && $user['points'] <= 9999) {
    $level = 'Мыслитель';
} elseif ($user['points'] > 9999 && $user['points'] <= 19999) {
    $level = 'Мудрец';
} else {
    $level = 'Просветленный';
}
?>

    <div style="position:relative" class="center-block">
        <p class="pers-cab-h">&nbsp;</p>
        <div class="perconal-cab">
            <div class="ava-block">

                <img class="ava-inner img-circle" src="<?=$user['photo']?>" alt="<?= $user['fio'] ?>">
                <p class="end-av"><?= $level ?>/<?= $user['points'] ?></p>
            </div>
            <div class="right-av-block">

                <p style="min-width: 160px; max-width: 163px;" class="name"><?= $user['fio'] ?></p>
                <p style="line-height:25px;">Количество баллов: <?= $user['points'] ?> </p>
                <div class="link-blck">
                    <ul class="soc-cab">
                        <? if ($user['uid_vk'] != '') { ?>
                            <li><img src="/assets/default/img/vk.png" alt="" class="link-sc">
                                <a style="width:180px" target="_blabk" href="<?= $user['uid_vk'] ?>">
                                    <?= $user['uid_vk'] ?>
                                </a>
                            </li>
                        <? } ?>
                        <? if ($user['uid_tw'] != '') { ?>
                            <li><img src="/assets/default/img/tw.png" alt="" class="link-sc">

                                <a style="width:180px" target="_blabk" href="<?= $user['uid_tw'] ?>">
                                    id<?= $user['uid_tw'] ?>      
                                </a>
                            </li>
                        <? } ?>
                        <? if ($user['uid_fb'] != '') { ?>
                            <li><img src="/assets/default/img/fb.png" alt="" class="link-sc"> 

                                <a style="width:180px" target="_blabk" href="<?= $user['uid_fb'] ?>">
                                  id<?= $user['uid_fb'] ?>
                                </a>
                            </li>
                        <? } ?>
                        <? if ($user['uid_in'] != '') { ?>
                            <li><img src="/assets/default/img/in.png" alt="" class="link-sc"> 

                                <a style="width:180px" target="_blabk" href="<?= $user['uid_in'] ?>">
                                  id<?= $user['uid_in'] ?>
                                </a>
                            </li>
                        <? } ?>
                    </ul>


                </div>
                <div class="btn-pers-bl">
                    <ul>
                        <li> <a href="/user/profile/messages"> <img class="btnimg" src="/assets/default/img/message.png" alt=""> Мои сообщения </a> </li>
                        <li> <a href="/user/profile"> <img class="btnimg" src="/assets/default/img/custom.png" alt=""> Настройки </a> </li>
                        <li> <a href="/user/photos" class="add-photo3"> <img class="btnimg" src="/assets/default/img/photo.png" alt=""> Фотографии </a> </li>
                    </ul>
                </div>


            </div>

            <!-- TABS -->
            <div class="tabs-block">
               <!-- <ul class="nav nav-tabs">
                    <li><a href="#adopted" data-toggle="tab" class="active">Принятые <span><?//= count($msgRes) ?></span></a></li>
                    <li><a href="#sent" data-toggle="tab">Отправленные <span><?//= count($msgSend) ?></span></a></li>
                </ul> -->


                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="adopted">
                        <?
                        if (count($msgRes) > 0) {
                            ?>
                            <? foreach ($msgRes as $itemSend) { ?>
                                <div class="quest message">
                                    <a href="#">
                                        <div class="left-block-q">
                                            <img class="base-circle-img-center img-circle" alt="<?= $itemSend['login'] ?>" src="<?= $itemSend['photo'] ?>" />
                                            <p class="login-name"><?= $itemSend['login'] ?></p>

                                        </div>
                                    </a>
                                    <div class="right-block-q">
                                        <p><?= $itemSend['message'] ?></p>
                                    </div>
                                   
                                </div>
                            <? } ?>

                        <? } else { ?>
                            <h4>В папке нет писем.</h4>   
                        <? } ?>

                            <form style="margin-left: 20px" action="/user/profile/reply" name="snd" id="snd" method="POST">
                                <input type="hidden" value="<?=$msgId?>" name="idQ">
                                
                                <textarea style="border: 1px solid #d7d7d7; max-width: 640px;max-height: 120px;"
                                          name="msgSend" 
                                          rows="10" cols="25" placeholder="Напишите свой ответ..."></textarea>
                                <input type="submit" value="Ответить">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>