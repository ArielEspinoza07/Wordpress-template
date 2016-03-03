<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>
    <?php
        wp_title('|','true','right');
        bloginfo('name');
    ?>
    </title>
    <link rel="stylesheet" href="/css/master.css" href="<?php bolginfo('template_url'); ?>/style.css" charset="utf-8">
    <?php wp_head(); ?>
  </head>
</html>
