<?php get_header(); ?>

<div class="container">
    <div class="row">
        <!-- Entradas -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Entrada -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card" style="border: 0px solid rgba(0,0,0,.125); border-radius: 0; margin-bottom: 15px">
                        <?php
                            // Checar si existe la imagen destacada
                            if (has_post_thumbnail() ) {
                                the_post_thumbnail( 'post-thumbnails', array( 'class' => 'card-img' ) );
                            }
                        ?>

                        <span class="post-tags">
                            <?php the_tags('',' / ',''); ?>
                        </span>

                        <div class="post-tittle">
                            <a class="link-post-tittle" href="<?php the_permalink();?>">
                                <h2 class="card-title">
                                    <?php the_title();?> 
                                </h2>
                            </a>
                        </div>
                       
                        <div class="card-body" style="padding: 0rem; #5d738d">
                            <?php the_excerpt(); ?>
                        </div>

                        <div class="post-more">
                            <small class="text-muted text-uppercase"> <?php the_time('F j, Y'); ?> </small>
                            <small class="text-muted"> / <?php the_author();?> </small>
                            <a class="float-right read-more" href="<?php the_permalink(); ?> ">Leer más</a>
                        </div>
                           
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