<div>
    <h2><?= $group->title ?></h2>
    <p><?= $group->description ?></p>
    <table class="b-poll_matrix">
        <tr>
            <th>Вид услуг/работ</th>
            <th>Чаще самостоятельно</th>
            <th>Иногда самостоятельно</th>
            <th>Профессиональное обслуживание</th>
        </tr>
        <?php foreach($questions as $questionId => $question): ?>
            <?= $question->render() ?>
        <?php endforeach; ?>
    </table>
</div>