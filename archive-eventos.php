<?php get_header(); ?>
<!-- Archive: eventos -->

<!-- The banner -->
<div class="page-banner" style="background-image: url('https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/Sociedad-Medica-Hospital-Angeles-Puebla-hero.webp');">
    <div class="main-container page-banner-box">
        <h1>Eventos</h1>
    </div>
</div>

<!-- Section: Eventos -->
<section class="section-eventos add-padding-5">
  <div class="main-container">
      <h2>Próximos eventos</h2>
      <h3>Participa en nuestros eventos presenciales y en línea.</h3>
      
      <div class="section-eventos-content">
      <!-- Custom Query: 'eventos' -->
      <?php
          $today = date('Ymd');
          $homepage_eventos = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type'      => 'eventos',
            'meta_key'       => 'eventos_fecha',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
            'meta_query'     => array(
              array(
                'key'     => 'eventos_fecha',
                'compare' => '>=',
                'value'   => $today,
                'type'    => 'numeric'
              )
            )
        ));
        
        while($homepage_eventos->have_posts()) :
          $homepage_eventos->the_post(); ?>

          <div class="eventos-item">

            <!-- The featured image -->
            <?php if (has_post_thumbnail() ) : 
              $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-landscape' );
            ?>
            <div class="eventos-image-container">
              <a href="<?php the_permalink(); ?>">
                <img class="eventos-image" src="<?php echo $img['0']; ?>" alt="<?php the_title(); ?>">
                <!-- The metabox -->
                <div class="eventos-metabox">
                  <p>
                    <span class="eventos-metabox-icon">
                      <i class="fas fa-calendar-alt"></i>
                    </span>
                    <?php 
                      $eventDate = new DateTime(get_field('eventos_fecha'));
                      echo $eventDate->format('d M')
                    ?>
                  </p>
                </div>
              </a>
            </div>
            <?php else : ?>
            <div class="eventos-image-container">
              <a href="<?php the_permalink(); ?>">
              <img class="eventos-image" src="<?php echo get_theme_file_uri('assets/images/elements/image-placeholder.png'); ?>" alt="<?php the_title(); ?>">
              <!-- The metabox -->
              <div class="eventos-metabox">
                  <p>
                    <span class="eventos-metabox-icon">
                      <i class="fas fa-calendar-alt"></i>
                    </span>
                    <?php 
                      $eventDate = new DateTime(get_field('eventos_fecha'));
                      echo $eventDate->format('d M')
                    ?>
                  </p>
                </div>
              </a>
            </div>
            <?php endif; ?>

            <!-- The title -->
            <h4 class="eventos-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>

            <!-- Modalidad -->
            <div class="eventos-modalidad">
              <p>Modalidad: <span><?php echo the_field('eventos_modalidad'); ?><span></p>
            </div>
            

            <!-- The button -->
            <div class="eventos-button">
              <a class="small-button" href="<?php the_permalink(); ?>">Leer más &raquo;</a>
            </div> 

          </div>
              
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

  </div>
</section>

<!-- Section: Eventos Pasados -->
<section class="section-eventos section-eventos-pasados add-padding-5">
  <div class="main-container">
      <h2>Eventos Pasados</h2>
      <h3>Consulta el archivo de todos los eventos pasados.</h3>
      
      <div class="section-eventos-content">
      <!-- Custom Query: 'eventos' -->
      <?php
          $today = date('Ymd');
          $homepage_eventos = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type'      => 'eventos',
            'meta_key'       => 'eventos_fecha',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
            'meta_query'     => array(
              array(
                'key'     => 'eventos_fecha',
                'compare' => '<',
                'value'   => $today,
                'type'    => 'numeric'
              )
            )
        ));
        
        while($homepage_eventos->have_posts()) :
          $homepage_eventos->the_post(); ?>

          <div class="eventos-item">

            <!-- The featured image -->
            <?php if (has_post_thumbnail() ) : 
              $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-landscape' );
            ?>
            <div class="eventos-image-container">
              <a href="<?php the_permalink(); ?>">
                <img class="eventos-image" src="<?php echo $img['0']; ?>" alt="<?php the_title(); ?>">
                <!-- The metabox -->
                <div class="eventos-metabox">
                  <p>
                    <span class="eventos-metabox-icon">
                      <i class="fas fa-calendar-alt"></i>
                    </span>
                    <?php 
                      $eventDate = new DateTime(get_field('eventos_fecha'));
                      echo $eventDate->format('d M')
                    ?>
                  </p>
                </div>
              </a>
            </div>
            <?php else : ?>
            <div class="eventos-image-container">
              <a href="<?php the_permalink(); ?>">
              <img class="eventos-image" src="<?php echo get_theme_file_uri('assets/images/elements/image-placeholder.png'); ?>" alt="<?php the_title(); ?>">
              <!-- The metabox -->
              <div class="eventos-metabox">
                  <p>
                    <span class="eventos-metabox-icon">
                      <i class="fas fa-calendar-alt"></i>
                    </span>
                    <?php 
                      $eventDate = new DateTime(get_field('eventos_fecha'));
                      echo $eventDate->format('d M')
                    ?>
                  </p>
                </div>
              </a>
            </div>
            <?php endif; ?>

            <!-- The title -->
            <h4 class="eventos-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>

            <!-- Modalidad -->
            <div class="eventos-modalidad">
              <p>Modalidad: <span><?php echo the_field('eventos_modalidad'); ?><span></p>
            </div>
            

            <!-- The button -->
            <div class="eventos-button">
              <a class="small-button" href="<?php the_permalink(); ?>">Leer más &raquo;</a>
            </div> 

          </div>
              
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <!-- <a href="#" class="main-button">Ver todo el archivo</a> -->

  </div>
</section>

<?php get_footer(); ?>