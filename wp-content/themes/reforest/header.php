<!DOCTYPE html>
<html>

<head>
    <!-- <title>Reforest</title> -->
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>

    <meta name="description"
        content="Reforest es una asociación sin fines de lucro que proporciona un medio masivo a la comunidad para que se integre en ayudar al medio ambiente reforestando diversas zonas del estado.">
    <meta name="keywords" content="Reforest, reforestacion,campañas,comunidad,donaciones">
    <meta name="author" content="">

</head>

<body>

    <header class="container-fluid">

        <!-- Menú -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.html">
                <img src="img/reforest.png" height="30" alt="log-reforest" title="logo-reforest">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'menu-principal',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse justify-content-end',
                            'container_id'      => 'navbarSupportedContent',
                            'menu_class'        => 'navbar-nav align-items-center',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                ?>
            
                <!-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                    <div class="navbar-nav align-items-center">
                        <a class="nav-link" href="index.html">Inicio
                            <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="campañas.html">Campañas</a>
                        <a class="nav-link" href="comunidad/index.html">Comunidad</a>
                        <a class="nav-link" href="comunidad.html">Comunidad</a>
                    </div>
                </div> -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="donaciones.php">
                                <button type="button" class="btn btn-primary">
                                    Donar
                                </button>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>
        <!-- menú -->
    </header>

    <!-- Blog -->

    <h2 class="text-center" style="font-size: 50px; padding-bottom: 30px; font-family: Montserrat;">
        Reforest Blog</h2>
    <hr>