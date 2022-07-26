<?php 

get_header(); 

while(have_posts()) :
    the_post(); 

?>

  <!-- The banner -->
  <div class="page-banner" style="background-image: url('https://www.sociedadmedicahap.com/wp-content/uploads/2022/01/Sociedad-Medica-Hospital-Angeles-Puebla-hero.webp');">
      <div class="main-container page-banner-box">
          <h1><?php the_title(); ?></h1>
      </div>
  </div>

  <div class="generic-page-content page-content add-padding-3">
    <div class="main-container">
      <?php the_content(); ?> 
    </div>
  </div>

<?php 

endwhile;

get_footer();

?>
