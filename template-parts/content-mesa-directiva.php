<?php
/**
 * Template part for displaying page content in page-mesa-directiva.php
 */

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

</div><!-- /end .directorio-item -->
