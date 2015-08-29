<div class="pagination">
    <ul>
	<?php if ($first_page !== FALSE): ?>
        <li><a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first">
                    <?php echo __('<span class="enable-quote-left-2">&nbsp;</span>') ?></a></li>
	<?php else: ?>
		<li><?php echo __('<span class="disable-quote-left-2">&nbsp;</span>') ?></li>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
                <li><a href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev">
                    <?php echo __('<span class="enable-quote-left-1">&nbsp;</span>') ?></a></li>
	<?php else: ?>
		<li><?php echo __('<span class="disable-quote-left-1">&nbsp;</span>') ?></li>
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
                <li><strong><?php echo $i ?></strong></li>
		<?php else: ?>
                <li><a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a></li>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
                <li><a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next">
                    <?php echo __('<span class="enable-quote-right-1">&nbsp;</span>') ?></a></li>
	<?php else: ?>
		<li><?php echo __('<span class="disable-quote-right-1">&nbsp;</span>') ?></li>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
                <li><a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last">
                    <?php echo __('<span class="enable-quote-right-2">&nbsp;</span>') ?></a></li>
	<?php else: ?>
		<li><?php echo __('<span class="disable-quote-right-2">&nbsp;</span>') ?></li>
	<?php endif ?>
    </ul>
</div><!-- .pagination -->