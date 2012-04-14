<?php // $Id: node.tpl.php,v 1.1 2009/07/03 07:40:11 agileware Exp $ ?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> Post">
  <div class="Post-tl"></div>
  <div class="Post-tr"></div>
  <div class="Post-bl"></div>
  <div class="Post-br"></div>
  <div class="Post-tc"></div>
  <div class="Post-bc"></div>
  <div class="Post-cl"></div>
  <div class="Post-cr"></div>
  <div class="Post-cc"></div>
  <div class="Post-body">
    <div class="Post-inner">
      <?php if ($teaser): ?>
        <h2 class="PostHeaderIcon-wrapper"> <span class="PostHeader"><a href="<?php echo $node_url; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></span></h2>
      <?php endif; ?>
      <div class="PostHeaderIcons metadata-icons">
        <?php if ($submitted) { echo art_submitted_worker($submitted, $date, $name);} ?>
      </div>
      <div class="PostContent">
        <div class="article">
          <?php echo $content;?>
          <?php if (isset($node->links['node_read_more'])) { echo '<div class="read_more">'.get_html_link_output($node->links['node_read_more']).'</div>'; }?>
        </div>
      </div>
      <div class="cleared"></div>
      <div class="PostFooterIcons metadata-icons">
        <?php if (!empty($links)) { echo art_links_woker($node->links);} ?>
        <?php if (!empty($terms)) { echo art_terms_worker($node);} ?>
      </div>
    </div>
  </div>
</div>
