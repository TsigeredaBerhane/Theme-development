<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo('name') ?></title>
    
</head>

<header class="sticky-top navbar navbar-expand-lg navbar-dark grey darken-4 ">
    <b><a class="navbar-brand" href="/wordpress"><?php bloginfo('name') ?></a></b>    
 
    <div class="menu-container float-left">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

    </div>
    
</header>



<body>
