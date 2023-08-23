<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  wp_head()  ?>
</head>

<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>\img\logo.svg">
                </div>

                <nav>
                    <!-- Barra navegación -->
                    <?php 
                    
                    $args = array(
                        'theme-location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );

                    wp_nav_menu($args);
                    
                    ?>
                </nav>
            </div>

        </div>
    </header>