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
                    <!-- <img src="img/amazonas.png" class="card-img" alt="..."> -->
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="<?php the_permalink();?>">
                            <h5 class="card-title"><?php
                                the_title();
                            ?></h5>
                        </a>
                        <p class="card-text"><?php
                            the_excerpt();
                        ?></p>
                        <p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small>
                            <span class="card-text"><small class="text-muted"> / <?php
                                the_author();
                            ?></small></span>
                        </p>
                        <p class="card-text"><small class="text-muted">Categorias</small>
                        </p>
                    </div>
                    
                    <a href="<?php the_permalink();?>" class="btn btn-primary">Mas info..</a>
                </div>
            </div>

            <?php endwhile; endif; ?>

            <!-- Entrada -->

            <!-- Paginación -->
            <nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php get_template_part('template-parts/content', 'paginacion')?>

  </ul>
</nav>

            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Antrior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav> -->

            <!-- Paginación -->
        </div>

        <!-- Entradas -->

        <!-- Aside -->

        <!-- <div class="col-lg-3">

        </div> -->

        <!-- Aside -->
    </div>

    <!-- Blog -->

    <?php get_footer(); ?>