<tr>
    <td><?= $question->text ?></td>
    <?php $i = 0; foreach($question->answers as $answer): ?>
        <td class="m-text-center"><input type="checkbox" name="<?= $question->getId() ?>_<?= $i ?>" <?php if(isset($_POST[$question->getId() . '_' . $i])): ?>checked="checked"<?php endif;?> /></td>
    <?php $i++; endforeach; ?>
</tr>
