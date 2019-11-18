<?php get_header(); ?>

<div class="row">

        <!-- Entradas -->
        <div class="col-lg-12">

            <!-- Entrada -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <div class="row no-gutters">
                <div class="col-md-4">
                <?php
                   // Checar si existe la imagen destacada
                    if (has_post_thumbnail() ) {
                        the_post_thumbnail( 'post-thumbnails', array( 'class' => 'card-img' ) );
                    }
                ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php
                            the_excerpt();
                        ?></p>
                        <p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small>
                            <span class="card-text"><small class="text-muted"> / <?php
                                the_author();
                            ?></small></span>
                        </p>

                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <?php endwhile; endif; ?>

            <!-- Entrada -->

       </div>

        <!-- Entradas -->

        <!-- Aside -->

        <!-- <div class="col-lg-3">

        </div> -->

        <!-- Aside -->
    </div>

    <!-- Blog -->

    <?php get_footer(); ?>