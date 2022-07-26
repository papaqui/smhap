<?php 

/* Template Name: Contacto */

get_header(); 

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
    <div class="main-container page-contacto add-padding-5">
        <div class="page-contacto-item">
            <h2>Escríbanos</h2>
            <?php echo do_shortcode('[wpforms id="83" title="false"]'); ?>
        </div>
        <div class="page-contacto-item">
            <h2>Datos de contacto</h2>
            <h3>Dirección</h3>
            <p>Col. Reserva Territorial Atlixcáyotl<br>C. P. 72190<br>Puebla, Puebla.</p>
            <h3>Teléfono</h3>
            <p>01 (222) 303 66 00 ext 2760</p>
            <h3>Correo electrónico</h3>
            <p><a href="mailto:smhap2010@gmail.com">smhap2010@gmail.com</a></p>
        </div>
        

    </div>
</div>

<section class="section-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.9622559661507!2d-98.23721164925459!3d19.021384787056032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc7443351ef21%3A0x2058a80394117b56!2sHospital%20%C3%81ngeles%20Puebla!5e0!3m2!1ses!2smx!4v1635986850844!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php get_footer(); ?>
