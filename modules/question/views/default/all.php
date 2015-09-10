<div class="center-block">
    <p class="head-center-block">Вопросы участников:</p>
    <? if ($is_search) : ?>
      <font class = "small" style = "top: -25px;">
        найдено вопросов: <?= $questions_total ?>
      </font>
    <? endif ?>
    <? require_once('questions.php'); ?>
</div>