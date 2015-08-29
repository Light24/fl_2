<div>
    <h4><?= $question->text ?></h4>
    <?php $i = 0; foreach($question->answers as $answer): ?>
        <div>
            <label><input type="radio" name="<?= $question->getId() ?>" value="<?= $i ?>" <?php if(Arr::get($_POST, $question->getId()) === (string)$i): ?>checked="checked"<?php endif;?> /><?= $answer ?></label>
        </div>
    <?php $i++; endforeach; ?>
    <?php if (isset($question->options['user_variant'])): ?>
        <div>
            <label><input type="radio" name="<?= $question->getId() ?>" value="user" <?php if(Arr::get($_POST, $question->getId()) === 'user'): ?>checked="checked"<?php endif;?> />Ваш вариант</label>
            <input type="text" name="<?= $question->getId() ?>_user_value" value="<?= Arr::get($_POST, $question->getId() . "_user_value") ?>" />
        </div>
    <?php endif; ?>
</div>