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
            <?
            $answers = NULL;
            $answ = htmlspecialchars(Arr::get($_GET, 'answ'), ENT_NOQUOTES);
            $getBest = Arr::get($_GET, 'do');
            ?>
            <!-- TABS -->
            <div class="tabs-block">
                <ul class="nav nav-tabs">
                    <li <? if ($answ == '' && $getBest == '') { ?> class="active" <? } ?>><a href="#quest" data-toggle="tab" class="active">Вопросы <span><?= count($user_question) ?></span></a></li>
                    <li class="<? if ($answ != '') { ?>active<? } ?> countAnsw"><a href="#answer" data-toggle="tab">Ответы <span></span></a></li>
                    <li <? if ($getBest != '') { ?> class="active" <? } ?> id="otherAnsw"><a href="#answers" data-toggle="tab">Отвечают <span></span></a></li>
                </ul> 


                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane <? if ($answ == '' && $getBest == '') { ?>active<? } ?>" id="quest">
                        <div class="allandbest">
                            <ul>
                                <li><a href="/cabinet">Все </a> <span>/</span></li>
                                <li><a href="/cabinet?best=1">Лучшие </a> <span></span></li>
                            </ul>

                        </div>
                        <? if (count($user_question) > 0) { ?>
                            <?
                            foreach ($user_question as $item_aq) {
                                ?>
                                <div class="quest">
                                    <a href="/user?id=<?= $item_aq['user_id'] ?>">
                                        <div class="left-block-q">
                                            <?
                                            $avatarImg = '';
                                            $avatar = $item_aq['photo'];
                                            $avatarPath = '/assets/default/avatar/' . $item_aq['photo'];
                                            if ($avatar != '' && file_exists($avatarPath)) {
                                                $avatarImg = $avatarPath;
                                            } else {
                                                $avatarImg = '/assets/default/img/base-img.png';
                                            }
                                            ?>
                                            <img class="base-circle-img-center img-circle" alt="<?= $item_aq['login'] ?>" src="<?= $avatarImg ?>" />
                                            <p class="login-name"><?= strip_tags($item_aq['login']); ?></p>

                                        </div>
                                    </a>
                                    <div class="right-block-q">
                                        <p><?= strip_tags($item_aq['text_q']); ?></p>

                                    </div>
                                    <div class="end-quest-block">
                                        <p class="category-txt"><?= strip_tags($item_aq['category']); ?></p>
                                        <p class="time-q"><?= Controller_Contest::friendlyDate($item_aq['date_post']) ?></p>
                                        <div class="button-rait">
                                            <button class="no-btn btn" type="button">Нет(<?= ($item_aq['liken'] != '') ? $item_aq['liken'] : "0"; ?>)</button>
                                            <button class="yes-btn btn" type="button">Да(<?= ($item_aq['likey'] != '') ? $item_aq['likey'] : "0"; ?>)</button>

                                        </div>
                                        <div class="rait-bl">
                                            <button class="rait cross  btn" type="button">
                                                <img class="plusminus" src="/assets/default/img/cross.png"><span>Пожаловаться</span>
                                            </button>
                                            <button class="rait btn plus-rait" type="button">
                                                <img class="plusminus" src="/assets/default/img/rait-plus.png"><?= ($item_aq['likes'] != '') ? $item_aq['likes'] : "0"; ?></button>

                                        </div>




                                    </div>
                                </div>
                            <? } ?>

                        <? } else { ?>
                            <div class="quest">
                                <p>Вы еще не задали ни одного вопроса.</p>

                            </div>

                        <? } ?>

                    </div>


                    <div class="tab-pane <? if ($answ != '') { ?>active<? } ?>" id="answer">
                        <div class="allandbest">
                            <?
                            $answ = htmlspecialchars(Arr::get($_GET, 'answ'), ENT_NOQUOTES);
                            if ($answ == '')
                                $answ = 'yes';
                            ?>
                            <ul>
                                <li><a <? if (($answ == 'yes') || ($answ == '')) { ?> style="text-decoration:underline"<? } ?> href="/cabinet?answ=yes">Да </a> <span>/</span></li>
                                <li><a <? if (($answ == 'no') || ($answ == '')) { ?> style="text-decoration:underline"<? } ?> href="/cabinet?answ=no">Нет </a> <span></span></li>
                            </ul>

                        </div>
                        <?
                        $answerArr = array();
                        $query = DB::query(Database::SELECT, "SELECT `work_id` FROM `answers_$answ` WHERE `user_id`=" . $user['id'])
                                        ->execute()->as_array();

                        foreach ($query as $itq) {
                            array_push($answerArr, $itq['work_id']);
                        }


                        if (count($answerArr) > 0) {
                            $pSearch='';
$tid = Arr::get($_GET, 'tid');
if($tid!=''){
    $pSearch = ' AND `contest_id`=' . $tid . ' ';
}
                            $answers = DB::query(Database::SELECT, "SELECT question.*,question.id as
            uidQuest, category.*,users.*, users.fio as `user`,
            `l`.`cnt` as `likes`, `ly`.`cnt` as `likey`, `ln`.`cnt` as `liken`
            FROM `question`
            LEFT JOIN `users` ON question.user_id = users.id
            LEFT JOIN `category` ON question.contest_id = category.id
            
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_yes` GROUP BY work_id) as ly  ON question.id = ly.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers_no` GROUP BY work_id) as ln  ON question.id = ln.work_id
            LEFT JOIN (SELECT count(*) `cnt`, `work_id` FROM `answers` GROUP BY work_id) as l  
            ON question.id = l.work_id
            WHERE question.user_id<>" . $user['id'] . $pSearch. " AND question.id IN (" . implode(',', $answerArr) . ")
            ")->execute()->as_array();
                            ?>
                            <? if (count($answers) > 0) { ?>
                                <?
                                foreach ($answers as $item_aq) {
                                    ?>
                                    <? if ($item_aq['liken'] != '' || $item_aq['likey'] != '') { ?>
                                        <div class="quest">
                                            <a href="/user?id=<?= $item_aq['user_id'] ?>">
                                                <div class="left-block-q">
                <?
                $avatarImg = '';
                $avatar = $item_aq['photo'];
                $avatarPath = '/assets/default/avatar/' . $item_aq['photo'];
                if ($avatar != '' && file_exists($avatarPath)) {
                    $avatarImg = $avatarPath;
                } else {
                    $avatarImg = '/assets/default/img/base-img.png';
                }
                ?>
                                                    <img class="base-circle-img-center img-circle" alt="<?= $item_aq['login'] ?>" src="<?= $avatarImg ?>" />
                                                    <p class="login-name"><?= strip_tags($item_aq['login']); ?></p>

                                                </div>
                                            </a>
                                            <div class="right-block-q">
                                                <p><?= strip_tags($item_aq['text_q']); ?></p>

                                            </div>
                                            <div class="end-quest-block">
                                                <p class="category-txt"><?= strip_tags($item_aq['category']); ?></p>
                                                <p class="time-q"><?= Controller_Contest::friendlyDate($item_aq['date_post']) ?></p>

                                                <div class="button-rait">
                                                    <button <? if ($item_aq['user_id'] != $user['id']) { ?> data-id="<?= $item_aq['uidQuest'] ?>" <? } ?> class="no-btn btn <? if ($item_aq['user_id'] == $user['id']) { ?> disabled <? } else { ?> doNo<? } ?>" type="button">Нет(<?= ($item_aq['liken'] != '') ? $item_aq['liken'] : "0"; ?>)</button>
                                                    <button <? if ($item_aq['user_id'] != $user['id']) { ?> data-id="<?= $item_aq['uidQuest'] ?>" <? } ?> class="yes-btn btn <? if ($item_aq['user_id'] == $user['id']) { ?> disabled <? } else { ?> doYes<? } ?>"  type="button">Да(<?= ($item_aq['likey'] != '') ? $item_aq['likey'] : "0"; ?>)</button>

                                                </div>
                                                <div class="rait-bl">
                                                    <button class="rait cross  btn" type="button">
                                                        <img class="plusminus" src="/assets/default/img/cross.png"><span>Пожаловаться</span>
                                                    </button>
                                                    <button <? if ($item_aq['user_id'] != $user['id']) { ?> data-id="<?= $item_aq['uidQuest'] ?>" <? } ?> class="rait btn plus-rait <? if ($item_aq['user_id'] == $user['id']) { ?> disabled <? } else { ?> doLike <? } ?>" type="button">
                                                        <img class="plusminus" src="/assets/default/img/rait-plus.png"><span><?= ($item_aq['likes'] != '') ? $item_aq['likes'] : "0"; ?></span></button>

                                                </div>




                                            </div>
                                        </div>
                <?
            }
        }
        ?>

                            <? } else { ?>
                                <div class="quest">
                                    <p>Нет результатов.</p>

                                </div>

    <? }
} else { ?>
                            <p>Нет результатов.</p>
                        <? } ?>
                    </div>

                    <div  class="tab-pane <? if ($getBest) { ?>active<? } ?>" id="answers">

                        <div class="allandbest">
                            <ul>
                                <li><a <? if (!isset($getBest) || $getBest == '' || $getBest == 1) { ?> style="text-decoration:underline"<? } ?> href="/cabinet?do=1">Как вы </a> <span>/</span></li>
                                <li><a <? if (isset($getBest) && $getBest == 2) { ?> style="text-decoration:underline"<? } ?> href="/cabinet?do=2">Не как вы </a> <span></span></li>
                            </ul>

                        </div>
<?
$usersA = DB::query(Database::SELECT, "SELECT user.id, user.photo, user.fio,user.login, user.email
            FROM `users` user")->execute()->as_array();
$questionA = DB::query(Database::SELECT, "SELECT * FROM `question`")->execute()->as_array();



if (!isset($getBest) || $getBest == '' || $getBest == 1) {
    $myQuestionAnsw = DB::query(Database::SELECT, "SELECT * FROM `answers_yes` WHERE `user_id`=" . $user['id'])->execute()->as_array();
    $allQuestionAnsw = DB::query(Database::SELECT, "SELECT * FROM `answers_yes`")->execute()->as_array();
} else {
    $myQuestionAnsw = DB::query(Database::SELECT, "SELECT * FROM `answers_no` WHERE `user_id`=" . $user['id'])->execute()->as_array();
    $allQuestionAnsw = DB::query(Database::SELECT, "SELECT * FROM `answers_no`")->execute()->as_array();
}

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
$compare = array_unique($compare);
$glI = 0;
?>
                        <? foreach ($usersA as $usComp) { ?>
                            <?
                            if (in_array($usComp['id'], $compare)) {
                                $glI++;
                                ?>
                                <div class="quest">
                                    <a href="/user?id=<?= $usComp['id'] ?>">
                                        <div class="left-block-q">
        <?
        $avatarImg = '';
        $avatar = $usComp['photo'];
        $avatarPath = '/assets/default/avatar/' . $usComp['photo'];
        if ($avatar != '' && file_exists($avatarPath)) {
            $avatarImg = $avatarPath;
        } else {
            $avatarImg = '/assets/default/img/base-img.png';
        }
        ?>
                                            <img class="base-circle-img-center img-circle" alt="<?= $usComp['login'] ?>" src="<?= $avatarImg ?>">
                                            <p class="login-name"><?= $usComp['login'] ?></p>

                                        </div>
                                    </a>

                                    <div class="right-block-q">

                                        <p>ФИО: <?= strip_tags($usComp['fio']); ?></p>
                                        <p>Еmail: <?= $usComp['email']; ?></p>
                                        <p><a href="/user?id=<?=$usComp['id']?>&sBest=1">Схожесть ответов</a></p>

                                    </div>

                                    <div class="end-quest-block">







                                    </div>
                                </div>
        <?
    }
}
?>
                    </div>

                </div>

            </div>
        </div>


    </div>
</div>



    <script>
        $(document).ready(function() {
            $(".countAnsw span").text(<?= count($answers) ?>)

            $("#otherAnsw span").text(<?= $glI ?>)

        })

    </script>