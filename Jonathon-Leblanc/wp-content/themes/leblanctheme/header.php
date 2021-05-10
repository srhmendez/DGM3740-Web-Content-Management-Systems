<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leblanc Cuisine</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Bootstrap Style Sheet Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Custom Style Sheet Link -->
    <link rel="stylesheet" href="https://dgm3740.sarahmendez.com/Jonathon-Leblanc/wp-content/themes/leblanctheme/CSS/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://dgm3740.sarahmendez.com/Jonathon-Leblanc/"><img class="logoImages" src="https://dgm3740.sarahmendez.com/Jonathon-Leblanc/wp-content/themes/leblanctheme/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
             wp_nav_menu( array(
             'menu'              => 'primary',
             'theme_location'    => 'header-menu',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => '',
             'container_id'      => '',
             'menu_class'        => 'navbar-nav mr-auto',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );
        ?>
          <div class="telephoneDiv">
            <p class="footerText telColor"><a class="phoneLink telColor" href="tel:+(801)696-1195"><i class="fas fa-phone"></i>(801) 696-1195</a></p>
          </div>
          </div>
        </div>
      </nav>
<main>
<!-- End of Header -->