<div id="search" class="container-inline">
	<?php if (empty($var['form']['#block']->subject)) : ?>
   	 	<h2 class="element-invisible"><?php print t('Search form'); ?></h2>
	<?php endif; ?>
	<?php print $search_form; ?>
</div>