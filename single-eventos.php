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

        <!-- Metabox -->
        <div class="single-metabox">
            <p>Modalidad: <span><?php echo the_field('eventos_modalidad'); ?><span></p>
            <p>Fecha: <span>
            <?php 
                $eventDate = new DateTime(get_field('eventos_fecha'));
                echo $eventDate->format('d.m.Y')
            ?>
            </span></p>
            <p>Imparte: </p>
        </div>

        <!-- The content -->
        <?php the_content(); ?> 

        <!-- More information button -->
        <div class="single-more-information">
            <a href="#" class="main-button" target="_blank"><span><i class="fab fa-whatsapp"></i></span> Solicita más información</a>
        </div>
    </div>
</div>

<?php 

endwhile; 

get_footer(); 

?>