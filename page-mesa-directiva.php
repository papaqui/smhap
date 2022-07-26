<?php 

/* 
* Template Name: Mesa Directiva 
*/

get_header(); 

while( have_posts() ) :
    the_post(); 

?>

<!-- Section: Single Directorio -->
<section class="single-directorio-member main-container add-padding-3">

    <!-- Sidebar: Especialidades -->
    <div class="single-directorio-especialidades">
        <div class="single-directorio-especialidades-box">
            <h3>Mesa Directiva</h3>
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
    </div><!-- /end .single-directorio-especialidades -->


    <div class="main-directorio-content single-directorio-content">


      <!-- Presidente -->
      <h4 class="rol-content-title">Presidente</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'presidente' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Secretario -->
      <h4 class="rol-content-title">Secretario</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'secretario' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Tesorero -->
      <h4 class="rol-content-title">Tesorero</h4>
      <div class="section-directorio-content">

        <!-- Query for mesa directiva -->
        <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'tesorero' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
        ?>

        </div><!-- /end .section-directorio-content -->

      <!-- Pro Tesorero -->
      <h4 class="rol-content-title">Pro Tesorero</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'protesorero' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Cirugía -->
      <h4 class="rol-content-title">Cirugía</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'cirugia' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Ginecología -->
      <h4 class="rol-content-title">Ginecología</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'ginecologia' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Medicina Interna -->
      <h4 class="rol-content-title">Medicina Interna</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'medicinainterna' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Pediatria -->
      <h4 class="rol-content-title">Pediatria</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'pediatria' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Epidemiología -->
      <h4 class="rol-content-title">Epidemiología</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'epidemiologia' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Cirugía Maxilofacial y Odontología -->
      <h4 class="rol-content-title">Cirugía Maxilofacial y Odontología</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'cirugiamaxilofacial' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Nutrición -->
      <h4 class="rol-content-title">Nutrición</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'nutricion' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Psicología -->
      <h4 class="rol-content-title">Psicología</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'psicologia' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Científico -->
      <h4 class="rol-content-title">Científico</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'cientifico' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->
      

      <!-- Difusión y Redes Sociales -->
      <h4 class="rol-content-title">Difusión y Redes Sociales</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'difusion' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Organización Deportiva -->
      <h4 class="rol-content-title">Organización Deportiva</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'organizacion' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      <!-- Relaciones Nacionales e Internacionales -->
      <h4 class="rol-content-title">Relaciones Nacionales e Internacionales</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'relaciones' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->

      
      <!-- Relaciones Públicas y Eventos Sociales -->
      <h4 class="rol-content-title">Relaciones Públicas y Eventos Sociales</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'eventos' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->
      

      <!-- Comité de Ética, Honor y Justicia -->
      <h4 class="rol-content-title">Comité de Ética, Honor y Justicia</h4>
      <div class="section-directorio-content">

      <!-- Query for mesa directiva -->
      <?php 

          $mesa_directiva_query = new WP_Query(array(
            'post_type'       => 'directorio',
            'posts_per_page'  => '-1',
            'order'           => 'ASC',
            'orderby'         => 'name',
          ));

          while ( $mesa_directiva_query->have_posts() ) :
              $mesa_directiva_query->the_post();

              $has_rol = get_field('directorio_mesa_directiva');
              $rol = get_field('directorio_rol_mesa_directiva');

              
              if( $has_rol === 'Sí' ) :
                if ( $rol['value'] === 'comite' ) :
                  include(locate_template('template-parts/content-mesa-directiva.php'));
                endif;
              endif;

          endwhile; 
          wp_reset_postdata(); 
      ?>

      </div><!-- /end .section-directorio-content -->


  </div><!-- /end .single-directorio-content -->


</section>

<?php 
    endwhile; 
    get_footer(); 
?>


<!-- 
director : Director
secretario : Secretario
tesorero : Tesorero
protesorero : Pro Tesorero
cirugia : Cirugía
ginecología : Ginecología
medicinainterna : Medicina Interna
pediatria : Pediatria
epidemiologia : Epidemiología
cirugiamaxilofacial : Cirugía Maxilofacial y Odontología
nutricion : Nutrición
psicologia : Psicología
cientifico : Científico
difusion : Difusión y Redes Sociales
organizacion : Organización Deportiva
relaciones : Relaciones Nacionales e Internacionales
eventos : Relaciones Públicas y Eventos Sociales
comite : Comité de Ética, Honor y Justicia 
-->