<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="../Modularization/CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,800;1,600&display=swap" rel="stylesheet">   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title><?php echo($pageTitle); ?></title>
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
            <li class="home"><a href="index.php">Home</a></li>
            <li class="cruises"><a href="cruises.php">Cruises</a></li>
            <li class="parent"><a href="#">Agents</a>
                <ul id="nestedUL">
                    <li class="nested"><a class="nestedLI" href="agent-2.php">Joanna Livingston</a></li>
                    <li class="nested"><a class="nestedLI" href="agent-1.php">Juan Carlos</a></li>
                </ul>
            </li>
            <li class="book"><a href="booking.php">Book</a></li>
        </ul>
    </nav>



<main>