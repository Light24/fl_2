<div class="right-element">
    <div class="center-block">
        <p class="head-center-block">Лидеры проекта:</p>
        <div class="result-block">
            <div class="leader-result">
                <p class="period-p">Период:</p>
                <ul class="result-ul">
                    <li><a href = '/user/leaders?sort_category=<?= $sort_category ?>&durations=day'>за сутки</a>
                    </li>
                    <li><a href = '/user/leaders?sort_category=<?= $sort_category ?>&durations=all'>за все время</a>
                    </li>
                </ul>
            </div>
            <div class="leader-result nomination">
                <p class="period-p">Лидеры по:</p>
                <ul class="result-ul">
                    <? $sort_category; ?>

                    <li><a <? if ($sort_category != '' && $sort_category != 'points') { ?> style="border-bottom: none;text-decoration: none" <? } ?> href="/user/leaders?sort_category=points">набранным баллам</a>
                    </li>
                    <li><a <? if ($sort_category != 'answers') { ?> style="border-bottom: none; text-decoration: none" <? } ?> href="/user/leaders?sort_category=answers">количесту ответов</a>
                    </li>
                    <li><a <? if ($sort_category != 'questions') { ?> style="border-bottom: none; text-decoration: none" <? } ?> href="/user/leaders?sort_category=questions">количеству вопросов</a>
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
                                            ?>
                                            <?= $itemA['qnt'] ?>
                                            <?
                                            if ($sort_category == '' || $sort_category == 'points')
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