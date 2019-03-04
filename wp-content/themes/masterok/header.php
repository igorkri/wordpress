<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title><?php the_title() ?></title>
    <link rel="icon" href="<?=get_template_directory_uri()?>/favicon.png" type="image/png">
    <?php wp_head(); ?>
    </head>
<body>

<!--Header_section-->
<header id="header_wrapper">
    <div class="container-fluid">
        <div class="header_box">
            <?php the_custom_logo() ?>
<!--            <div class="logo"><a href="#"><img src="--><?//=get_template_directory_uri()?><!--/assets/img/logo2.png" alt="logo"></a></div>-->
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="main-nav" class="collapse navbar-collapse navStyle">
                    <?php

                        wp_nav_menu([
                                'theme_location' => 'menu-1',
                        ])

                    ?>
<!--                    <ul class="nav navbar-nav" id="mainNav">-->
<!--                        <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>-->
<!--                        <li><a href="#aboutUs" class="scroll-link">About Us</a></li>-->
<!--                        <li><a href="#service" class="scroll-link">Services</a></li>-->
<!--                        <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>-->
<!--                        <li><a href="#clients" class="scroll-link">Clients</a></li>-->
<!--                        <li><a href="#team" class="scroll-link">Team</a></li>-->
<!--                        <li><a href="#contact" class="scroll-link">Contact</a></li>-->
<!--                    </ul>-->
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Header_section-->

<?php
//var_dump(get_template_directory_uri());
//wp_list_pages();
//echo '<hr>';
//the_category()
?>

