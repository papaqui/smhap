<?php 

get_header(); 

while( have_posts() ) :
    the_post(); 

?>

<!-- Section: Single Directorio -->
<section class="single-directorio-member main-container add-padding-3">

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

    <!-- Directorio: Single Member Content -->
    <div class="single-directorio-content">

        <!-- Photo and Description -->
        <div class="directorio-profile">
            <div class="directorio-profile-photo">
                <?php 
                    $alt_image = get_field('directorio_imagen_alternativa');
                    $main_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-square' );

                    if( !empty( $alt_image ) ) :
                ?>
                    <img src="<?php echo esc_url($alt_image['url']); ?>" alt="<?php echo esc_attr($alt_image['alt']); ?>" height="200" />
                <?php elseif ( has_post_thumbnail() ) : ?>
                    <img src="<?php echo $main_image['0']; ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                    <img class="directorio-profile-placeholder" src="https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/user-placeholder.png" alt="<?php the_title(); ?>" height="200">
                <?php endif; ?>
            </div>
       
            <div class="directorio-profile-content">
                <!-- Dr. Name Lastname -->
                <h3><span><?php echo the_field('directorio_titulo'); ?></span><?php the_title(); ?></h3>
                
                <!-- Especialidad -->
                <?php 
                    $post_terms = get_the_terms( get_the_ID(), 'especialidades' ); 
                    if ( !empty( $post_terms ) ) :
                ?>
                <h4><?php echo $post_terms[0]->name; ?></h4>
                <?php endif; ?>  

                <!-- Contact information -->
                <p><span>Consultorio: </span><?php echo the_field('directorio_consultorio'); ?></p>
                <p><span>Teléfono: </span><?php echo the_field('directorio_telefono'); ?></p>
                <p><span>Correo electrónico: </span><a href="mailto:<?php echo the_field('directorio_email'); ?>"><?php echo the_field('directorio_email'); ?></a></p>

                <!-- Socials -->
                <ul class="directorio-profile-socials">
                    <?php if ( get_field('directorio_facebook') ) : ?>   
                    <li>
                        <span>
                            <a href="<?php echo the_field('directorio_facebook'); ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </span>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_field('directorio_youtube') ) : ?>   
                    <li>
                        <span>
                            <a href="<?php echo the_field('directorio_youtube'); ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </span>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!-- Extra Information -->

        <!-- Subespecialidad -->
        <?php 
            $post_terms = get_the_terms( get_the_ID(), 'subespecialidades' ); 
            if ( !empty( $post_terms ) ) :
        ?>
        <div class="directorio-information">
            <h4>Subespecialidades</h4>
            <p><?php echo $post_terms[0]->name; ?></p>
        </div>
        <?php endif; ?>  
        
        <!-- Cédula profesional -->
        <?php if( get_field('directorio_cedula') ) : ?>
        <div class="directorio-information">
            <h4>Cédula Profesional</h4>
            <?php echo the_field('directorio_cedula'); ?>
        </div>
        <?php endif; ?>

        <!-- Curriculum -->
        <?php if( get_field('directorio_curriculum') ) : ?>
        <div class="directorio-information">
            <h4>Currículum</h4>
            <?php echo the_field('directorio_curriculum'); ?>
        </div>
        <?php endif; ?>

        <!-- Estudios Universitarios -->
        <?php if( get_field('directorio_estudios_universitarios') ) : ?>
        <div class="directorio-information">
            <h4>Estudios Universitarios</h4>
            <?php echo the_field('directorio_estudios_universitarios'); ?>
        </div>
        <?php endif; ?>

        <!-- Estudios de Maestría -->
        <?php if( get_field('directorio_estudios_maestria') ) : ?>
        <div class="directorio-information">
            <h4>Estudios de Maestría</h4>
            <?php echo the_field('directorio_estudios_maestria'); ?>
        </div>
        <?php endif; ?>

        <!-- Estudios de Postgrado -->
        <?php if( get_field('directorio_estudios_postgrado') ) : ?>
        <div class="directorio-information">
            <h4>Estudios de Postgrado</h4>
            <?php echo the_field('directorio_estudios_postgrado'); ?>
        </div>
        <?php endif; ?>

        <!-- Áreas de Interés -->
        <?php if( get_field('directorio_areas_de_interes') ) : ?>
        <div class="directorio-information">
            <h4>Áreas de Interés</h4>
            <?php echo the_field('directorio_areas_de_interes'); ?>
        </div>
        <?php endif; ?>
        
        <!-- Actividades Académicas -->
        <?php if( get_field('directorio_estudios_universitarios') ) : ?>
            <div class="directorio-information">
                <h4>Actividades Académicas</h4>
                <?php echo the_field('directorio_estudios_universitarios'); ?>
            </div>
        <?php endif; ?>       
        
    </div>

</section>

<?php 

    endwhile; 

    get_footer(); 

?>