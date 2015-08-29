
<div class="right-element">
    <div class="center-block">
        <? if ($text == '') { ?>
            <p class="head-center-block">Вопросы участников:</p>

        <? } else { ?>
            <p class="head-center-block"><?= $text ?>:</p>
        <? } ?>

        <? if ($countN != '') { ?>
            <b>   Найдено ответов: <?= $countN ?></b>
        <? }
        ?>

        <?$imgalery=0;
        foreach ($all_question as $item_aq) {
            $imgalery++;
            ?>
            <div class="quest">
                <a href="/user?id=<?= $item_aq['user_id'] ?>">
                    <div class="left-block-q">
                        <?
                        $avatarImg = '';
                        $avatar = $item_aq['photo'];
                        $avatarPath = 'assets/default/avatar/' . $item_aq['photo'];
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
                    <?
                    $photos = json_decode($item_aq['photos']);

                    if (!empty($photos)) {
                        ?>
                        <? if (count($photos) > 4) { ?>
                            <ul class="showPhoto"> 
                                <? foreach ($photos as $photo) { ?>
                                    <li><a rel="group<?=$imgalery?>" class="fancyImg"   href="/assets/default/photosQ/original/<?= $photo ?>">
                                            <img src="/assets/default/photosQ/middle/<?= $photo ?>" width="100" height="100" alt="<?= strip_tags($item_aq['login']); ?>"/>
                                        </a></li>
                                <? } ?>
                            </ul>
                        <? } elseif (count($photos) == 1) { ?>
                            <ul class="showPhoto"> 
                                <? foreach ($photos as $photo) { ?>
                                    <li><a rel="group<?=$imgalery?>" class="fancyImg"  href="/assets/default/photosQ/original/<?= $photo ?>">
                                            <img src="/assets/default/photosQ/original/<?= $photo ?>" width="350" height="350" alt="<?= strip_tags($item_aq['login']); ?>"/>
                                        </a></li>
                                <? } ?>
                            </ul>
                        <? } elseif (count($photos) == 2) { ?>
                            <ul class="showPhoto"> 
                                <? foreach ($photos as $photo) { ?>
                                    <li><a rel="group<?=$imgalery?>" class="fancyImg"  href="/assets/default/photosQ/original/<?= $photo ?>">
                                            <img src="/assets/default/photosQ/middle/<?= $photo ?>" width="250" height="200" alt="<?= strip_tags($item_aq['login']); ?>"/>
                                        </a></li>
                                <? } ?>
                            </ul>
                        <? } elseif (count($photos) == 4 || count($photos) == 3) { ?>
                            <ul class="showPhoto"> 
                                <? $cntInt = 1; ?>
                                <? foreach ($photos as $photo) { ?>
                                    <? if ($cntInt == 1) { ?>

                                        <li><a rel="group<?=$imgalery?>" class="fancyImg"  href="/assets/default/photosQ/original/<?= $photo ?>">
                                                <img src="/assets/default/photosQ/original/<?= $photo ?>" width="350" height="300" alt="<?= strip_tags($item_aq['login']); ?>"/>
                                            </a></li>
                                    <? } ?>
                                    <? if ($cntInt > 1) { ?> 
                                        <li><a rel="group<?=$imgalery?>" class="fancyImg"  href="/assets/default/photosQ/original/<?= $photo ?>">
                                                <img src="/assets/default/photosQ/middle/<?= $photo ?>" width="160" height="93" alt="<?= strip_tags($item_aq['login']); ?>"/>
                                            </a></li> 

                                    <? } ?>

                                    <? $cntInt++ ?>
                                <? } ?>

                            </ul>

                        <? } ?>

                    <? }
                    ?>
                </div>
                <div class="end-quest-block">
                    <p class="category-txt"><?= strip_tags($item_aq['category']); ?></p>
                    <p class="time-q"><?= Controller_Contest::friendlyDate($item_aq['date_post']) ?></p>

                    <div class="button-rait">
                        <button <? if ($item_aq['user_id'] != $_SESSION['id']) { ?> data-id="<?= $item_aq['uidQuest'] ?>" <? } ?> class="no-btn btn <? if ($item_aq['user_id'] == $_SESSION['id']) { ?> disabled <? } else { ?> doNo<? } ?>" type="button">Нет(<span class="n"><?= ($item_aq['liken'] != '') ? $item_aq['liken'] : "0"; ?></span>)</button>
                        <button <? if ($item_aq['user_id'] != $_SESSION['id']) { ?> data-id="<?= $item_aq['uidQuest'] ?>" <? } ?> class="yes-btn btn <? if ($item_aq['user_id'] == $_SESSION['id']) { ?> disabled <? } else { ?> doYes<? } ?>"  type="button">Да(<span class="y"><?= ($item_aq['likey'] != '') ? $item_aq['likey'] : "0"; ?></span>)</button>

                    </div>
                    <div class="rait-bl">
                        <button class="rait cross  btn" type="button">
                            <img class="plusminus" src="/assets/default/img/cross.png"><span>Пожаловаться</span>
                        </button>
                        <button <? if ($item_aq['user_id'] != $_SESSION['id']) { ?> data-id="<?= $item_aq['uidQuest'] ?>" <? } ?> class="rait btn plus-rait <? if ($item_aq['user_id'] == $_SESSION['id']) { ?> disabled <? } else { ?> doLike <? } ?>" type="button">
                            <img class="plusminus" src="/assets/default/img/rait-plus.png"><span><?= ($item_aq['likes'] != '') ? $item_aq['likes'] : "0"; ?></span></button>

                    </div>




                </div>
            </div>
        <? } ?>



    </div>

