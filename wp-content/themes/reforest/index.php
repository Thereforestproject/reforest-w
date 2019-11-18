<?php get_header(); ?>

<div class="container">
    <div class="row">
        <!-- Entradas -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Entrada -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <?php
                        // Checar si existe la imagen destacada
                            if (has_post_thumbnail() ) {
                                the_post_thumbnail( 'post-thumbnails', array( 'class' => 'card-img' ) );
                            }
                        ?>
                        <a href="<?php the_permalink();?>">
                            <h5 class="card-title"><?php
                                the_title();
                            ?></h5>
                        </a>
                        <div class="card-body">
                            <p class="card-text"><?php
                            the_excerpt();
                        ?></p>
                        </div>
                        <p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small>
                            <span class="card-text"><small class="text-muted"> / <?php
                                the_author();
                            ?></small></span>
                        </p>
                        <p class="card-text"><small class="text-muted">Categorias</small>
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