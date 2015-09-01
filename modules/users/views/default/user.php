<?

if ($profile['points'] <= 99)
  $level = 'Новичок';

else if ($profile['points'] <= 249)
  $level = 'Ученик';

else if ($profile['points'] <= 499)
  $level = 'Знаток';

else if ($profile['points'] <= 999)
  $level = 'Профи';

else if ($profile['points'] <= 2499)
  $level = 'Мастер';

else if ($profile['points'] <= 4999)
  $level = 'Гуру';

else if ($profile['points'] <= 9999)
  $level = 'Мыслитель';

else if ($profile['points'] <= 19999)
  $level = 'Мудрец';

else
  $level = 'Просветленный';
?>

<?
if (Arr::get($user, 'id') != '')
{
    $myQuestionAnsw = DB::query(Database::SELECT, "SELECT * FROM `answers_yes` WHERE `user_id`=" . $user['id'])->execute()->as_array();
    $allQuestionAnsw = DB::query(Database::SELECT, "SELECT * FROM `answers_yes`")->execute()->as_array();


    $myansw = array();
    foreach ($myQuestionAnsw as $intA) {

        array_push($myansw, $intA['work_id']);
    }

    $compare = array();

    foreach ($allQuestionAnsw as $qa) {

        if (in_array($qa['work_id'], $myansw)) {
            if ($user['id'] != $qa['user_id']) {
                array_push($compare, $qa['user_id']);
            }
        }
    }
    $getId = (int) Arr::get($_GET, 'id');

    if ($getId != '') {
        $compare = (array_count_values($compare));
        $countAsk = 0;
        foreach ($compare as $key => $value) {
            if ($key == $getId)
                $countAsk = $value;
        }

        $countAsk = $countAsk / count($myQuestionAnsw);
    }
}
?>

<div class="modal fade" id="modalSMS" tabindex="-1" role="dialog" aria-labelledby="modalSMSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="modal-title" id="modalSMSLabel">Введите текст сообщения</p>
            </div>
            <div class="modal-body">
                <form class="fixed form-modal" id="sms_form" name="sms_form" method="post" action="#">
                    <fieldset>

                        <textarea style="max-width:268px;" id="smsField" name="smsField" rows="10" cols="25" 
                                  placeholder="Текст сообщения..."></textarea>

                        <input type="hidden" id="uidSmsUser" name="uidSmsUser" value="<?= $profile['id'] ?>">

                    </fieldset>


                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-sms" type="button" class="btn btn-enter2">Отправить</button>
            </div>
        </div>
    </div>
</div>



    <div style="position:relative" class="center-block">

        <div class="perconal-cab">
            <div class="ava-block">

                <img class="ava-inner img-circle" <? if ($profile['photo'] != '') { ?> src="/assets/default/avatar/<?= $profile['photo'] ?>"<? } else { ?> src="/assets/default/img/Avatar.png" <? } ?>alt="<?= $profile['fio'] ?>">
                <p class="end-av"><?= $level ?>/<?= $profile['points'] ?></p>
            </div>
            <div class="right-av-block">
                <p style="min-width: 160px; max-width: 163px;float:none" class="name"><?= $profile['fio'] ?><a  class="linkcab" href="http://<?= $_SERVER['HTTP_HOST'] ?>/user/<?= $profile['id'] ?>">@id<?= $profile['id'] ?>  </a> </p>


                <div style="  width: 180px;
                     height: 150px;
                     float: left;" class="link-blck">
                    <ul class="soc-cab">
                        <? if ($profile['uid_vk'] != '') { ?>
                            <li><img src="/assets/default/img/vk.png" alt="" class="link-sc">
                                <a style="width:180px" target="_blabk" href="<?= $profile['uid_vk'] ?>">
                                    id<?= $profile['uid_vk'] ?> 
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
                            <li style="height:auto">
                                <a style="font-size:12px;" <? if (Arr::get($user, 'id') != '') { ?> data-toggle="modal" data-target="#modalSMS" href="#"<? } else { ?>href="/user/registration" <?}?>>
                                    <img class="btnimg" src="/assets/default/img/message.png" alt="">
                                    Отправить сообщение
                                </a>

                                <a style="font-size:12px;" href="/user/photos/<?= $profile['id'] ?>">
                                    <img class="btnimg" src="/assets/default/img/photo.png" alt=""> 
                                    Фотографии
                                </a>
                            </li>
                        <!--       <li style="height:auto">
           <b> Дата рождения:</b> <? //= $profile['date_birth']  ?>     
       </li>
       <li style="height:auto">
           <b>Город:</b> <? //= $profile['city']  ?>     
       </li>-->

                    </ul>


                </div>


            </div>
            <?
            $getBest = Arr::get($_GET, 'sBest');
            ?>

        </div>


    </div>



    <script>
    $("#btn-sms").click(function(e)
    {
        e.preventDefault();

        var id_user = $("#uidSmsUser").val();
        var msg = $("#smsField").val();
        if (msg != '') {
            $.ajax({
                type: 'POST',
                url: "/module_users/ajax_send_message",
                dataType: "json",
                data: {
                    idUser: id_user,
                    msg: msg,
                },
                success: function(data) {

                    if (data.success === true) {
                        $("#modalSMS .close").click();
                        alert(data.message);

                    }
                    else {
                        alert(data.message)
                    }
                }
            });
            return false;
        }
        else {

            return false;
        }

    });

    </script>