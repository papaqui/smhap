<?php get_header(); ?>
<!-- Archive: directorio -->

<!-- Section: Directorio -->
<section class="single-directorio-member section-directorio main-container add-padding-3">

    <!-- Sidebar: Especialidades -->
    <div class="single-directorio-especialidades">
      <div class="single-directorio-especialidades-box">
          <h3>Directorio</h3>
          <div class="directorio-lista-show-more">
            <div class="directorio-lista-show-more-button" id="js--show-more">
              <h4>Especialidades</h4>
              <button class="show-more" id="js--show-more-button">
                <span><i class="fas fa-chevron-down"></i></span>
              </button>
            </div>
          </div>
      </div>

      <div class="single-directorio-lista-especialidades">
          <?php
              $args = array(
                          'taxonomy' => 'especialidades',
                          'orderby' => 'name',
                          'order'   => 'ASC'
                      );

              $cats = get_categories($args);
          ?>

          <ul>
          <?php foreach( $cats as $cat ) : ?>
              <li>
                  <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                      <?php echo $cat->name; ?>
                  </a>
              </li>
          <?php endforeach; ?>
          </ul>
      </div>
    </div>

    <!-- Custom Query: 'directorio' -->
    <div class="single-directorio-content section-directorio-content">
    <?php 
      $homepage_directorio = new WP_Query(array(
        'post_type'       => 'directorio',
        'posts_per_page'  => '-1',
        'order'           => 'ASC',
        'orderby'         => 'name'
      ));

      while ( $homepage_directorio->have_posts() ) :
        $homepage_directorio->the_post();
    ?>

      <div class="directorio-item">
        
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

      </div>

    <?php endwhile; wp_reset_postdata(); ?>
    </div>

</section>

<?php get_footer(); ?>