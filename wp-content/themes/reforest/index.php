<?php get_header(); ?>

<div class="container">
    <div class="row">
        <!-- Entradas -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Entrada -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card" style="border: 0px solid rgba(0,0,0,.125); border-radius: 0;">
                        <?php
                        // Checar si existe la imagen destacada
                            if (has_post_thumbnail() ) {
                                the_post_thumbnail( 'post-thumbnails', array( 'class' => 'card-img' ) );
                            }
                        ?>
                         <p class="card-text" style="margin-top: 0.50rem; margin-bottom: 0.25rem;">
                         <?php the_tags('','/',''); ?>
                        </p>
                        <a href="<?php the_permalink();?>">
                            <h5 class="card-title" style="font-family: Montserrat; padding-top: 10px; color: #565656;
                            /* padding-bottom: 10px; */
                            "><?php
                                the_title();
                            ?></h5>
                        </a>
                       
                        <div class="card-body" style="padding: 0rem; #5d738d">
                            <?php
                            the_excerpt();
                        ?>
                        </div>
                        <p class="card-text">
                            <small class="text-muted text-uppercase"><?php the_time('F j, Y'); ?></small>
                            <span class="card-text"><small class="text-muted"> / <?php
                                the_author();
                            ?></small></span>
                        </p>
                      
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>

            <!-- Entrada -->

            <!-- Paginación -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <?php get_template_part('template-parts/content', 'paginacion')?>

                </ul>
            </nav>

            <!-- Paginación -->
        </div>

        <!-- Entradas -->
    </div>
</div>


<!-- Blog -->

<?php get_footer(); ?>