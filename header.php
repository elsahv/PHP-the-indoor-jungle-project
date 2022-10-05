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

    <nav class="navbar navbar-expand border border-dark border-2 pb-4" id="most-recent-header">
      <div class="container-fluid">

        <a id="logo" class="text-primary navbar-brand pl-5" href="/">
          <?php echo get_bloginfo('name'); ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

          <?php
          wp_nav_menu(
            array(
              'theme-location' => 'top-menu',
              'menu_class' => 'navbar-nav',
            )
          );
          ?>
        </div>
      </div>
    </nav>