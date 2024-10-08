<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Jaap Wouters</title>

<?php wp_head();?>

</head>
<body>

<header>
    <div class="container">
        <a href="/wordpress/" title="Home" rel="home" class="navbar-logo"> <img src="/wordpress/wp-content/uploads/2024/10/JW-logo-donker-blauw.svg" alt="Home" class="jw-logo"></a>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                //Hardcode: 'menu' => 'Top Bar'
                'menu_class' => 'top-bar'
            )
        );
        ?>
        <div class="contact-knop">
            <a href="" class="btn btn-contact">Contact</a>
        </div>
    </div> 

</header>
