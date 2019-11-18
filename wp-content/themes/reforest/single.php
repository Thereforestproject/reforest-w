<?php get_header(); ?>
<!-- Entrada -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid" style="padding-top: 100px">
            <div class="container rounded shadow" style="">
                <div style="background: #F7F7F9">
                    <div class="row" style="background: #F7F7F9">
                        <div class="col-8" style="padding-left: 0px; padding-right: 0px">
                                    <?php
                            // Checar si existe la imagen destacada
                                if (has_post_thumbnail() ) {
                                    the_post_thumbnail( 'post-thumbnails', array( 'class' => 'card-img' ) );
                                }
                            ?>
                            <!-- <img src="img/amazonas.png" style="width: 550px"> -->
                        </div>
                        <div class="col-4" style="margin-top: auto;margin-bottom: auto;">
                            <div class="titulo" style="font-size: 50px;font-family: Montserrat; margin-top: auto;margin-bottom: auto;">
                             <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="datos" style="margin-top: 50px;">
                            <small class="text-muted text-uppercase"><?php   the_time('F j, Y'); ?> </small>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="texto" style="padding: 50px; font-family: Montserrat;">
                <?php the_content(); ?>
                </div>
                <div class="propiedades">
                <p>
                    <small class="text-muted">Autor: <?php  the_author(); ?> </small>
                </p>
                <p>
                    <small class="text-muted">Publicado: <?php   the_time('F j, Y'); ?> </small>
                </p>
                </div>
                <hr>
                <div class="comentario">
                <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        
                        ?>
                </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<!-- Entradas -->



    <?php get_footer(); ?>