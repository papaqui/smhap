<?php get_header(); ?>

<!-- Section: Hero -->
<section class="section-hero" style="background-image:url('https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/Sociedad-Medica-Hospital-Angeles-Puebla-hero.webp');">
  <div class="main-container section-hero-box">
    <div class="section-hero-content">
      <h1><?php echo get_bloginfo('name'); ?></h1>
      <p class="section-hero-subtitle"><?php echo get_bloginfo('description'); ?></p>
      <a href="<?php echo site_url('/directorio'); ?>" class="main-button">Directorio Médico</a>
    </div>
  </div>
</section>

<!-- Section: Home / Sociedad Médica -->
<section class="section-home-sociedad-medica main-container">
  <div class="section-home-sociedad-medica-item">
    <p>La Sociedad Médica, junto con la <a href="<?php echo site_url('/mesa-directiva'); ?>" class="small-button">Mesa Directiva</a>, está formada por todos los médicos que están credencializados y que realizan sus prácticas en el <a href="https://hospitalesangeles.com/puebla/" class="small-button" target="_blank" rel="noopener noreferrer">Hospital Ángeles Puebla</a>, además es una corporación científica necesaria para auxiliar a sus miembros al desarrollo de su actividad profesional.</p>
    <a href="<?php echo site_url('/sociedad-medica') ?>" class="main-button">Leer más</a>
  </div>
  <div class="section-home-sociedad-medica-item">
    <img src="https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/Sociedad-Medica-Hospital-Angeles-Puebla-Sociedad-Medica-home.jpeg" alt="<?php echo get_bloginfo('name'); ?>" width="549" height="367">
  </div>
</section>

<!-- Section: Directorio -->
<section class="section-home-directorio add-padding-5 add-background-main">
  <div class="medium-container">
    <h2 class="h2-heading-white">Directorio médico</h2>
    <h3 class="h3-heading-white">Encuentra al especialista que necesitas a través de nuestro directorio.</h3>

    <!-- Custom Query: 'directorio' -->
    <div class="section-home-directorio-content">
    <?php 
      $homepage_directorio = new WP_Query(array(
        'post_type'       => 'directorio',
        'posts_per_page'  => 4,
        'order'           => 'ASC',
        'orderby'         => 'rand'
      ));

      while ( $homepage_directorio->have_posts() ) :
        $homepage_directorio->the_post();
    ?>

      <div class="home-directorio-item">
        
        <!-- The featured image -->
        <?php if (has_post_thumbnail() ) : 
          $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-square' );
        ?>
          <a href="<?php the_permalink(); ?>">
            <img class="home-directorio-image" src="<?php echo $img['0']; ?>" alt="<?php the_title(); ?>" width="200" height="200">
          </a>
        <?php else : ?>
          <a href="<?php the_permalink(); ?>">
            <img class="home-directorio-image custom-square" src="https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/user-placeholder.png" alt="<?php the_title(); ?>" width="200" height="200">
          </a>
        <?php endif; ?>

        <!-- The title -->
        <h4 class="home-directorio-title h4-heading-white">
        <a href="<?php the_permalink(); ?>">
          <?php echo the_title(); ?>
        </a>
        </h4>  

        <!-- Especialidad -->
        <h5 class="home-directorio-subtitle">
          <?php $post_terms = get_the_terms( get_the_ID(), 'especialidades' ); ?>
            <?php echo $post_terms[0]->name; ?></p>          
        </h5>
        
      </div>

    <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <a href="<?php echo site_url('/directorio'); ?>" class="main-button main-button-dark">Ir al directorio</a>

  </div>
</section>

<!-- Section: Home / Eventos -->
<section class="section-eventos add-padding-5">
  <div class="main-container">
      <h2>Próximos eventos</h2>
      <h3>Participa en nuestros eventos presenciales y en línea.</h3>
      
      <div class="section-eventos-content">
      <!-- Custom Query: 'eventos' -->
      <?php
          $today = date('Ymd');
          $homepage_eventos = new WP_Query(array(
            'posts_per_page' => 4,
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

      <a href="<?php echo site_url('/eventos'); ?>" class="main-button">Ver todos los eventos</a>
  </div>
</section>

<!-- Section: Home / Artículos -->
<section class="section-articulos add-padding-5">
  <div class="main-container">
    <h2>Artículos</h2>
    <h3>Consulta nuestro contenido creado por expertos.</h3>

    <div class="section-articulos-content">
      <!-- Custom Query: 'articulos' -->
      <?php
          $homepage_articles = new WP_Query(array(
            'posts_per_page' => 4,
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

      <a href="<?php echo site_url('/articulos'); ?>" class="main-button">Ver todos los artículos</a>
  </div>
</section>

<?php get_footer(); ?>