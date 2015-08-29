<form class="b-poll-form" action="" method="POST">
    <input type="hidden" name="formId" value="<?= $form->getId() ?>" />
    <h1><?= $form->title ?></h1>
    <p><?= $form->description ?></p>
    <?php foreach($groups as $groupId => $group): ?>
        <?= $group->render() ?>
    <?php endforeach; ?>
    <button class="std-button" type="submit">Отправить</button>
</form>