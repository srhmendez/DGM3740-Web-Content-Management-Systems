<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,800;1,600&display=swap" rel="stylesheet">   
    <title>Cabot Cruises<?php wp_title(); ?></title>
</head>
<body>

<!-- HEADER HTML -->
    <header>
        <div id="header">
            <div class="logo" id="logo">
                <figure id="logo2">
                    <img src="<?php echo get_template_directory_uri(); ?>/Images/Cabot_Cruises_Logo.svg" alt="logo" id="logo3" srcset="<?php echo get_template_directory_uri(); ?>/Images/Logo-2.svg 1x,<?php echo get_template_directory_uri(); ?>/Images/Logo-3.svg 2x">
                </figure>
            </div>
            <div class="phoneNum">
                <a id="telephoneNum" href="tel:8015555555"><p>801-555-5555</p></a>
            </div>
        </div>

    </header>

<!-- NAVIGATION HTML -->
    <nav id="nav" class="clearfix">
        <div id="mobileBar">
            <button id="hamburgerBtn">
                <span><i>&otimes;</i>CLOSE</span>
                <span><i>&equiv;</i>OPEN</span>
            </button>
            <div class="search"> 
                <form class="searchForm method="get" action="/Wordpress_Template/">
                    <input class="sfield" id="form1" type="search" name="s" placeholder="Search..">
                    <input class="search" type="submit" value="&#128269;">
                </form>
                
            </div>
        </div>    
        <?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>
    </nav>



<main>