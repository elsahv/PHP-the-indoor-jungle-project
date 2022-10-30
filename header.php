<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>the Indoor Jungle Project</title>
  <?php wp_head(); ?>
</head>

<body>
  <div id="header-text">
    <div id="frontpage-nav">
      <nav class="nav-grid border-dark border-2" id="text">
        <a class="logo navbar-brand" href="/">
          <?php echo get_bloginfo('name'); ?>
        </a>


        <div class="menu">
          <?php
          wp_nav_menu(
            array(
              'theme-location' => 'top-menu',
              'menu_class' => 'navbar',
            )
          );
          ?>
        </div>

      </nav>
    </div>
  </div>