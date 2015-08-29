<table id="cc-modules-list" class="table table-hover">
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Версия</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($modules as $module): ?>
            <tr>
                <td><a data-cc-goto-module="<?= $module->url ?>" href="<?= $module->url ?>"><?= $module->title ?></a></td>
                <td><?= $module->description ?></td>
                <td><?= $module->version ?></td>
                <td style="padding: 2px;"><button data-cc-goto-module="<?= $module->url ?>" class="btn"><i class="icon-cog"></i></button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script type="text/javascript">
    $('#cc-modules-list [data-cc-goto-module]').click(function(event) {
        var $target = $(this);
        event.preventDefault();
        navigate($target.data('ccGotoModule'));
    });
</script>