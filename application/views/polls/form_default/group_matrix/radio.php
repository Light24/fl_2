<tr>
    <td><?= $question->text ?></td>
    <?php $i = 0; foreach($question->answers as $answer): ?>
        <td class="m-text-center"><label><input type="radio" name="<?= $question->getId() ?>" value="<?= $i ?>" <?php if(Arr::get($_POST, $question->getId()) === (string)$i): ?>checked="checked"<?php endif;?> /></td>
    <?php $i++; endforeach; ?>
</tr>