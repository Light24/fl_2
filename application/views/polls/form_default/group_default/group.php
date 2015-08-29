<div>
    <h2><?= $group->title ?></h2>
    <p><?= $group->description ?></p>
    <?php foreach($questions as $questionId => $question): ?>
        <?= $question->render() ?>
    <?php endforeach; ?>
</div>