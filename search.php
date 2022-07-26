<?php get_header(); ?>
<!-- Archive: search results -->

<!-- The banner -->
<div class="page-banner" style="background-image: url('https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/Sociedad-Medica-Hospital-Angeles-Puebla-hero.webp');">
    <div class="main-container page-banner-box">
        <h1>Resultados de búsqueda</h1>
    </div>
</div>

<div class="the-results add-padding-3">
  <div class="medium-container">
    <?php printf( esc_html__( 'Resultados para: %s', 'smhap' ), '<span class="the-results-keywords">' . get_search_query() . '</span>' ); ?>
  </div>
</div>
  
<div class="section-directorio-content add-padding-3 medium-container">
  
  <?php 
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post(); 
  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('directorio-item'); ?>>
      <!-- The featured image -->
      <?php if (has_post_thumbnail() ) : 
          $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-square' );
        ?>
          <a href="<?php the_permalink(); ?>">
            <img class="directorio-image" src="<?php echo $img['0']; ?>" alt="<?php the_title(); ?>">
          </a>
        <?php else : ?>
          <a href="<?php the_permalink(); ?>">
            <img class="directorio-image" src="https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/user-placeholder.png" alt="<?php the_title(); ?>">
          </a>
        <?php endif; ?>

        <!-- The title -->
        <h4 class="directorio-title h4-heading-white">
          <a href="<?php the_permalink(); ?>">
            <?php echo the_field('directorio_titulo'); ?>
            <?php echo the_title(); ?>
          </a>
        </h4>  

        <!-- Especialidad -->
        <h5 class="directorio-subtitle">
          <?php 
            $post_terms = get_the_terms( get_the_ID(), 'especialidades' ); 

            if ($post_terms[0]->name == 'Ninguna') :
              echo '';
            else :
              echo $post_terms[0]->name; 
            endif;  
          ?>       
        </h5>
    </article><!-- #post-<?php the_ID(); ?> -->

  <?php
    endwhile;
    endif;
  ?>

</div>

<?php	get_footer();	?>