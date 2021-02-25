<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="../Cabot_Cruises/SCSS/style.css">

    <title>Cabot Cruizes</title>
</head>
<body>

<!-- HEADER HTML -->
    <header>
        <div id="header">
            <div class="logo" id="logo">
                <figure id="logo2">
                    <img src="/Images/Cabot_Cruises_Logo.svg" alt="logo" id="logo3" srcset="./Images/Logo-2.svg 1x,./Images/Logo-3.svg 2x">
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
                <form>
                    <input id="form1" type="text" placeholder="Search..">
                </form>
                <button class="search">&#128269;</button>
            </div>
        </div>    
        <ul id="primaryNav">
            <li class="home current-menu-item"><a href="index.php">Home</a></li>
            <li class="cruises"><a href="cruises.php">Cruises</a></li>
            <li class="parent"><a href="#">Agents</a>
                <ul>
                    <li class="nested"><a class="nestedLI" href="#">Find An Agent</a></li>
                    <li class="nested"><a class="nestedLI" href="#">Pricing</a></li>
                </ul>
            </li>
            <li class="book"><a href="#">Book</a></li>
        </ul>
    </nav>



<main>