<div class="navbar navbar-static-top b-pane">
    <div class="navbar-inner">
        <ul class="nav">
            <div class="btn-group" data-toggle="buttons-radio">
                <button data-cc-navigate="modules" class="btn <?php if($activeTab == 'modules'): ?>active<?php endif; ?>">Модули</button>
                <button data-cc-navigate="system" class="btn <?php if($activeTab == 'system'): ?>active<?php endif; ?>">Система</button>
            </div>
        </ul>
    </div>
</div>
<div id="cc-content" class="b-main_content"></div>
<script type="text/javascript">
    ajax_div('#cc-content', '<?= $activeTabUrl ?>');
    
    $('button[data-cc-navigate]').click(function (event) {
        var $target = $(this);
        event.preventDefault();
        if ($target.hasClass('active')) {
            return;
        }
        var url = $target.data('ccNavigate');
        navigateNoLoad('/admin/module/controlcenter/' + url);
        ajax_div('#cc-content', '/admin/module/controlcenter/ajax_' + url);
    });
</script>