<?php 

get_header(); 

while( have_posts() ) :
    the_post(); 

?>

<!-- The banner -->
<?php if( has_post_thumbnail() ): 
    $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<div class="page-banner" style="background-image:url('<?php echo $img['0'];?>');">
    <div class="main-container page-banner-box">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<?php endif; ?>

<!-- The content -->
<div class="page-content">
    <div class="medium-container add-padding-5 single-content">

        <!-- The content -->
        <?php the_content(); ?> 

    </div>
</div>

<!-- Artículos similares -->
<section class="similar-posts add-padding-5">
    <div class="main-container">

    <h2>Artículos similares</h2>

    <div class="section-articulos-content">
      <!-- Custom Query: 'articulos' -->
      <?php
          $homepage_articles = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type'      => 'articulos',
            'order'          => 'ASC',
            'orderby'        => 'rand',
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

<?php 

endwhile; 

get_footer(); 

?>