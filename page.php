<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
</head>
<body class="p-4">
  <div>
    <?php
      while( have_posts() ) : the_post();
        the_title( '<h1  style="font-family: Rochester, cursive;color: #ee7639;">', '</h1>' );
        the_content();
      endwhile;
    ?>
  </div>
  <?php wp_footer() ?>
</body>
</html>
