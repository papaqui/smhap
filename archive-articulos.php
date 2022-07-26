<?php get_header(); ?>
<!-- Archive: articulos -->

<!-- The banner -->
<div class="page-banner" style="background-image: url('https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/Sociedad-Medica-Hospital-Angeles-Puebla-hero.webp');">
    <div class="main-container page-banner-box">
        <h1>Artículos</h1>
    </div>
</div>

<!-- Section: Artículos -->
<section class="section-articulos add-padding-5">
  <div class="main-container">
    <h2>Artículos</h2>
    <h3>Consulta nuestro contenido creado por expertos.</h3>

    <div class="section-articulos-content">
      <!-- Custom Query: 'articulos' -->
      <?php
          $homepage_articles = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type'      => 'articulos',
            'order'          => 'ASC',
            )
        );
        
        while($homepage_articles->have_posts()) :
          $homepage_articles->the_post(); ?>

          <div class="articulos-item">

            <!-- The title -->
            <h4 class="articulos-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h4>

            <!-- The excerpt -->
            <p class="articulos-excerpt">
              <?php if (has_excerpt()) :
                echo get_the_excerpt();
              else :
                echo wp_trim_words(get_the_content(), 18);
              endif;
              ?>
            </p>

            <!-- The button -->
            <div class="articulos-button">
              <a class="small-button" href="<?php the_permalink(); ?>">Leer más &raquo;</a>
            </div> 

        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

  </div>
</section>

<?php get_footer(); ?>