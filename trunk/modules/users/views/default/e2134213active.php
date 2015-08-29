<div class="right-element">
    <div class="center-block">
        <p class="head-center-block">Активные участники:</p>
        <div class="result-block">

            <div class="leader-block">
                <div class="row">
                    <div style="width:100%" class="col-xs-6">
                        <ol class="leader-ul">
                            <? foreach ($usersA as $itemA) { ?>
                                <li style="width:100%">
                                    <a href="/user/<?= $itemA['id'] ?>">
                                        <img class="base-circle-img img-circle" alt="<?= $itemA['fio'] ?>"
                                             <? if ($itemA['photo'] != '') { ?> src="/assets/default/avatar/<?= $itemA['photo'] ?>"<? } else { ?>    
                                                 src="/assets/default/img/base-img.png" <? } ?> />     

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