<div class="left-block">

    <div class="topical_issues">
        <p class="head-category"><a href = "/question/best">Актуальные вопросы:</a></p>
        <ul class="topical">
            <?
            foreach ($questionP as $itemP)
            {
            ?>
                <li>
                    <?
                    if($user['id'] == $itemP['user_id'])
                    {
                    ?>
                      <a href="/cabinet">
                        <img class="base-circle-img img-circle" alt="<?= $itemP['fio'] ?>" src="<?= $itemP['photo'] ?>" />
                      </a>
                    <?
                    }
                    else
                    {
                    ?>
                      <a href="/user/<?= $itemP['user_id'] ?>">
                        <img class="base-circle-img img-circle" alt="<?= $itemP['fio'] ?>" src="<?= $itemP['photo'] ?>" />
                      </a>
                    <?
                    }
                    ?>
                    <div class="issues">
                      <a href="#">
                        <p><?= strip_tags(mb_substr($itemP['text_q'], 0, 180)) ?></p>
                      </a>
                    </div>
                </li>
            <? } ?>
        </ul>
    </div>

    <div class="active_members">
        <p class="head-category"><a href = "/user/leaders?target=3">Активные участники:</a></p>
        <ul class="topical">
            <?
            foreach ($usersA as $itemUser)
            {
                if ($itemUser['points'] <= 249) {
                    $level = 'Ученик';
                } elseif ($itemUser['points'] > 249 && $itemUser['points'] <= 499) {
                    $level = 'Знаток';
                } elseif ($itemUser['points'] > 499 && $itemUser['points'] <= 999) {
                    $level = 'Профи';
                } elseif ($itemUser['points'] > 999 && $itemUser['points'] <= 2499) {
                    $level = 'Мастер';
                } elseif ($itemUser['points'] > 2499 && $itemUser['points'] <= 4999) {
                    $level = 'Гуру';
                } elseif ($itemUser['points'] > 4999 && $itemUser['points'] <= 9999) {
                    $level = 'Мыслитель';
                } elseif ($itemUser['points'] > 9999 && $itemUser['points'] <= 19999) {
                    $level = 'Мудрец';
                } else {
                    $level = 'Просветленный';
                }
                ?>
                <li>
                    <a href="/user/<?= $itemUser['id'] ?>">
                        <img class="base-circle-img img-circle" alt="" src="<?= $itemUser['photo'] ?>" />
                        <div class="name-members">
                            <p><b><?= $itemUser['login'] ?> - <span style="font-size:14px;"><?=$level?></span></b>
                            </p>
                        </div>

                    </a>
                </li>
            <? } ?>
        </ul>


    </div>
    <!--
                    <div class="hashtags">
                        <a href="#">#Lorem</a>
                        <a href="#">#Ipsum</a>
                        <a href="#">#is</a>
                        <a href="#">#simply</a>
                        <a href="#">#dummy</a>
                        <a href="#">#text</a>
                        <a href="#">#of</a>
                        <a href="#">#the</a>
                        <a href="#">#printing</a>
                        <a href="#">#and</a>
                        <a href="#">#typesetting</a>
                        <a href="#">#industry</a>
                    </div>-->
</div>