<style>
.nav-tabs
{
  display: inline-block !important;
}

.nav-tabs > li > a
{
  font-size: 12px !important;
}
</style>


<div class="right-element">
    <div class="center-block">
        <p class="head-center-block">Лидеры проекта:</p>
        <div class="result-block">
            <div class="leader-result">
                <p class="period-p">Период:</p>
                <ul class="result-ul">
                    <li><a href = '/user/leaders/<?= $select_category ?>/week/<?= $cid ?>'>за неделю</a>
                    </li>
                    <li><a href = '/user/leaders/<?= $select_category ?>/all/<?= $cid ?>'>за все время</a>
                    </li>
                </ul>
            </div>
            <div class="leader-result nomination">
                <p class="period-p" style = "margin-top: 10px;">Лидеры по:</p>
                <ul class="nav nav-tabs">
                    <li class = "<? if ($select_category == '' || strcmp($select_category , 'points') == 0)  echo "active"; ?>"><a href="/user/leaders/points/<?= $duration_type ?>/<?= $cid ?>">набранным баллам</a>
                    </li>
                    <li class = "<? if (strcmp($select_category , 'answers') == 0)  echo "active"; ?>"><a href="/user/leaders/answers/<?= $duration_type ?>/<?= $cid ?>">количесту ответов</a>
                    </li>
                    <li class = "<? if (strcmp($select_category , 'questions') == 0)  echo "active"; ?>"><a href="/user/leaders/questions/<?= $duration_type ?>/<?= $cid ?>">количеству вопросов</a>
                    </li>
                </ul>
            </div>


            <div class="leader-block">
                <div class="row">
                    <div style="width:100%" class="col-xs-6">
                        <ol class="leader-ul">
                            <? foreach ($users as $itemA) { ?>
                                <li style="width:100%">
                                    <a href="/user/<?= $itemA['id'] ?>">
                                        <img class="base-circle-img img-circle" alt="<?= $itemA['fio'] ?>" src="<?= $itemA['photo'] ?>" />

                                        <div style="min-width:40%" class="name-members">
                                            <p> <b><?= $itemA['login'] ?></b>
                                            </p>
                                        </div>

                                        <div style="padding-left: 0; font-size: 15px;" class="numbers-leader">
                                            <?= $itemA['qnt'] ?>
                                            <?
                                            $level = 'Новичок';
                                            if ($itemA['qnt'] <= 249) {
                                                $level = 'Ученик';
                                            } elseif ($itemA['qnt'] > 249 && $itemA['qnt'] <= 499) {
                                                $level = 'Знаток';
                                            } elseif ($itemA['qnt'] > 499 && $itemA['qnt'] <= 999) {
                                                $level = 'Профи';
                                            } elseif ($itemA['qnt'] > 999 && $itemA['qnt'] <= 2499) {
                                                $level = 'Мастер';
                                            } elseif ($itemA['qnt'] > 2499 && $itemA['qnt'] <= 4999) {
                                                $level = 'Гуру';
                                            } elseif ($itemA['qnt'] > 4999 && $itemA['qnt'] <= 9999) {
                                                $level = 'Мыслитель';
                                            } elseif ($itemA['qnt'] > 9999 && $itemA['qnt'] <= 19999) {
                                                $level = 'Мудрец';
                                            } else {
                                                $level = 'Просветленный';
                                            }

                                            if ($select_category == '' || $select_category == 'points')
                                              echo ' - ' . $level;
                                            ?>
                                        </div>

                                    </a>
                                </li>
                            <? } ?>
                        </ol>


                    </div>


                </div>



            </div>

        </div>
    </div>
</div>