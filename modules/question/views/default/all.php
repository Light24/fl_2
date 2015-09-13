<div class="center-block">
    <p class="head-center-block">Вопросы участников:</p>
    <div class="result-block">
        <div class="leader-result">
            <p class="period-p">Период:</p>
            <ul class="result-ul">
                <li <? if (isset($duration_cat) && strcmp($duration_cat, 'week') == 0 ) :?> class = 'active' <? endif ?>> <a href = '/question/week/<?= $catID ?>'> за неделю</a>
                </li>
                <li <? if (isset($duration_cat) && strcmp($duration_cat, 'all') == 0 ) :?> class = 'active' <? endif ?>> <a href = '/question/all/<?= $catID ?>'>за все время</a>
                </li>
            </ul>
        </div>
    </div>

    <? if ($is_search) : ?>
      <font class = "small" style = "top: -25px;">
        найдено вопросов: <?= $questions_total ?>
      </font>
    <? endif ?>
    <? require_once('questions.php'); ?>
</div>