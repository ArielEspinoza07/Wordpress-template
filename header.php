<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
    <?php
        wp_title('|','true','right');
        bloginfo('name');
    ?>
    </title>
    <link rel="stylesheet"  href="<?php bloginfo('template_directory'); ?>/style.css" charset="utf-8">
    <?php wp_head(); ?>
  </head>
</html>
<body>
