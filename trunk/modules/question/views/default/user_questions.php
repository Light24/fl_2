<!-- TABS -->
<div class = "center-block">
<div class="tabs-block">
    <ul class="nav nav-tabs">
        <li <? if ($getBest != 1) { ?>class="active"<? } ?>>
          <a href="#quest" data-toggle="tab" <? if ($getBest != 1) { ?> class="active"<? } ?>>Вопросы <span><?= count($profile_questions) ?></span></a>
        </li>
        <li>
          <a id="myansw" href="#answer" data-toggle="tab">Ответы <span></span></a>
        </li>
        <? if ($user !== NULL)
        {
        ?>
          <li <? if ($getBest == 1){ ?>class="active"<? } ?>><a href="#answers" <? if ($getBest == 1) { ?> class="active"<? } ?> data-toggle="tab">Отвечают <span></span></a></li>
        <?
        }
        ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane <? if ($getBest != 1) { ?> active<? } ?>" id="quest">
            <div class="allandbest">
                <ul>
                    <li><a href="#">Все </a> <span>/</span></li>
                    <li><a href="#">Лучшие </a> <span></span></li>
                </ul>

            </div>
            <? if (count($profile_questions) > 0)
            {
                foreach ($profile_questions as $item_aq)
                {
                ?>
                    <div class="quest">
                        <a href="/user/<?= $item_aq['user_id'] ?>">
                            <div class="left-block-q">
                                <?
                                $avatarImg = '';
                                $avatar = $item_aq['photo'];
                                $avatarPath = '/assets/default/avatar/' . $item_aq['photo'];
                                if ($avatar != '' && file_exists($avatarPath))
                                {
                                    $avatarImg = $avatarPath;
                                }
                                else
                                {
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
            else
            {
            ?>
                <div class="quest">
                    <p>Вы еще не задали ни одного вопроса.</p>
                </div>
            <?
            }
            ?>
        </div>


        <div class="tab-pane" id="answer">



<? if (count($answers) > 0) { ?>
    <?
    foreach ($answers as $item_aq) {
        ?>
                                <? if ($item_aq['liken'] != '' || $item_aq['likey'] != '') { ?>
                                    <div class="quest">
                                        <a href="/user/<?= $item_aq['user_id'] ?>">
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
            <?
        }
    }
    ?>

                        <? } else { ?>
                            <div class="quest">
                                <p>Вы еще не задали ни одного вопроса.</p>

                            </div>

<? } ?>
                    </div>

                    <div class="tab-pane <? if ($getBest == 1) { ?> active<? } ?>" id="answers">

                        <div style="min-height:350px" class="quest">
                            <a href="#">
                                <div class="left-block-q">


                                </div>
                            </a>
                            <div class="right-block-q">
                                <p style="text-align:center; margin-top:25px;" class="login-name">Сходство ответов: <?/*= $countAsk * 100*/ ?>%</p> 

                            </div>

                        </div>
                    </div>

                </div>
            </div>
</div>
<script>
        $(document).ready(function() {
            $("#myansw span").text(<?= count($answers) ?>)
        })

</script>
