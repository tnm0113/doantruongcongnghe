<?php // $Id: block.tpl.php,v 1.1 2009/07/03 07:40:11 agileware Exp $ ?>
  
  <div class="Block-body">
    <?php if ($block->subject): ?>
      <div class="BlockHeader">
        <div class="l"></div>
        <div class="r"></div>
        <div class="header-tag-icon">
          <div class="t">
            <?php echo $block->subject; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="BlockContent">
      <div class="BlockContent-body">
        <?php echo $block->content; ?>
      </div>
    </div>
  </div>

