<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <style type="text/css" media="screen">
	#nav li.home a {background: #2266BB !important;color: #FFF !important}
	</style>
    <?php print $scripts ?>
 
  </head>
  <body>
<body id="">
<div id="wrapper">

<div id="main">

<div id="column">
<?php
          // Prepare header
          $site_fields = array();
          if ($site_name) {
            $site_fields[] = check_plain($site_name);
          }
          if ($site_slogan) {
            $site_fields[] = check_plain($site_slogan);
          }
          $site_title = implode(' ', $site_fields);
          if ($site_fields) {
            $site_fields[0] = '<span>'. $site_fields[0] .'</span>';
          }
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
            print '<a href="'. check_url($front_page) .'" title="'. $site_title .'">';
            if ($logo) {
              print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
            }
            print '</a>';
          }
        ?>

<div id="nav">
<?php if ($left): ?>
<?php if ($search_box): ?><div class="block"><?php print $search_box ?></div><?php endif; ?>
<?php print $left ?>
<?php endif; ?>


<?php if ($right): ?>
       
          <?php if (!$left && $search_box): ?><div class="block"><?php print $search_box ?></div><?php endif; ?>
          <?php print $right ?>
      <?php endif; ?>
</div><!--/nav-->
</div><!--/column-->



<div id="main-content">
<div id="header">

</div><!--/header-->

<div id="content">

 <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>
        <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>
<?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>

            <?php print $content ?>


</div><!--/content-->

<div id="footer">
  <?php print $feed_icons ?>
<?php print $footer_message . $footer ?>

</div><!--/footer-->

</div><!--/main-content-->

<div class="clear"></div>
</div><!--/main-->

</div><!--/wrapper-->

  <?php print $closure ?>
  </body>
</html>





