  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Indoor Jungle Project</title>

    <?php wp_head();?>
     
</head>
<body>

<header>
  
  <h1 class="logo">
   <a href="/">
  The Indoor Jungle Project
</a>
</h1>

  <?php
  wp_nav_menu(
    array(
       'theme-location' => 'top-menu',
       'menu_class' => 'top-bar',
    )
);
?> 
</header>