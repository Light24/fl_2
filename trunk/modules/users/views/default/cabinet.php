<?
if ($user['points'] <= 99)
  $level = 'Новичок';

else if ($user['points'] <= 249)
  $level = 'Ученик';

else if ($user['points'] <= 499)
  $level = 'Знаток';

else if ($user['points'] <= 999)
  $level = 'Профи';

else if ($user['points'] <= 2499)
  $level = 'Мастер';

else if ($profile['points'] <= 4999)
  $level = 'Гуру';

else if ($user['points'] <= 9999)
  $level = 'Мыслитель';

else if ($user['points'] <= 19999)
  $level = 'Мудрец';

else
  $level = 'Просветленный';
?>

<div class="right-element">
    <div style="position:relative" class="center-block">
        <p class="pers-cab-h">&nbsp;</p>

        <div class="perconal-cab">
          <div class="ava-block">
            <img class="ava-inner img-circle" src="<?= $user['photo'] ?>" alt="<?= $user['fio'] ?>">
            <p class="end-av"><?= $level ?>/<?= $user['points'] ?></p>
          </div>
            <div class="right-av-block">

               <p style="margin-top: -50px;
  position: absolute;" class="name"><?= $user['fio'] ?><a  class="linkcab" href="http://<?= $_SERVER['HTTP_HOST'] ?>/user?id=<?= $user['id'] ?>">@id<?= $user['id'] ?>  </a></p>
              <!--  <p style="line-height:25px;">Количество баллов: <?//= $user['points'] ?> </p>-->
                <div style="  width: 180px;
  height: 150px;
  float: left;" class="link-blck">
                    <ul class="soc-cab">
                        <? if ($user['uid_vk'] != '') { ?>
                            <li><img src="/assets/default/img/vk.png" alt="" class="link-sc">
                                <a style="width:180px" target="_blabk" href="<?= $user['uid_vk'] ?>">
                                    id<?= $user['uid_vk'] ?>
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
                        <li> <a href="/user/setting"> <img class="btnimg" src="/assets/default/img/custom.png" alt=""> Настройки </a> </li>
                        <li> <a href="/user/photos" class="add-photo3"> <img class="btnimg" src="/assets/default/img/photo.png" alt=""> Фотографии </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>