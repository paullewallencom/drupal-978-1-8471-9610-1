<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; ?></span>
  <?php endif; ?>

  <div class="content clear-block">
  		<!-- map -->
          <p>
			<img src="http://maps.google.com/staticmap?center=<?php print $node->latitude; ?>,<?php print $node->longitude; ?>&markers=<?php print $node->latitude; ?>,<?php print $node->longitude; ?>,red&zoom=12&size=600x150&key=ABQIAAAAlgDdVLfedJKmiafQpRNLlBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSA_UGnl6s1KwwqtBqkEFeipPiv2g" alt="Map" />
			</p>
    <?php print $content ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    </div>

    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

</div>
