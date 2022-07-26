<?php get_header(); 

while(have_posts()){
    the_post(); ?>
    <div class="page-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/Papaqui_page.jpg') ?>);">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-container">
      <div class="metabox metabox-single">
          <p><a class="blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fas fa-home fa-custom"></i>Back to Blog</a> <span class="metabox-main"><span class="metabox-icon"><i class="fas fa-calendar-alt"></i></span><?php the_time('d.m.Y'); ?> &bull; <span class="metabox-icon"><i class="fas fa-tags"></i></span><?php echo get_the_category_list(', '); ?></span></p>
      </div>
    </div>

    <div class="single-content">
      <div class="main-container">
        <?php the_content(); ?> 
      </div>
    </div>

<?php } ?>

<div class="pagination-next-previous main-container">
    <?php
    // Previous - Next post navigation with thumbnail as background image 
			$next_post = get_next_post();
			$previous_post = get_previous_post();
			the_post_navigation( array(
					'next_text' => get_the_post_thumbnail($next_post->ID,'thumbnail') . 
					'<div class="next-box">' .
					'<span class="meta-nav" aria-hidden="true">' . 
					__( 'Next', 'papaqui' ) . 
					'</span> ' .
					// '<span class="screen-reader-text">' . 
					// __( 'Next post:', 'papaqui' ) . 
					// '</span> ' .
					'<span class="post-title">%title</span>' . 
					'</div>' ,
				'prev_text' => 
					get_the_post_thumbnail($previous_post->ID,'thumbnail') . 
					'<div class="previous-box">' .
 					'<span class="meta-nav" aria-hidden="true">' . 
					__( 'Previous', 'papaqui' ) . 
					'</span> ' .
					// '<span class="screen-reader-text">' . 
					// __( 'Previous post:', 'papaqui' ) . 
					// '</span> ' .
					'<span class="post-title">%title</span>' .
					'</div>',
			) );
      ?>
    </div>

    <section class="recent-posts main-container">

      <?php 
      $orig_post = $post;
      global $post;
      $categories = get_the_category($post->ID);

      if ($categories) {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

        $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 4, // Number of related posts that will be shown.
        'ignore_sticky_posts'=>1
        );

        $my_query = new wp_query( $args );

        if( $my_query->have_posts() ) {
          echo '<h2>Related Posts</h2><div class="recent-posts-list" id="related_posts">';
          while( $my_query->have_posts() ) {
          $my_query->the_post();
          ?>

          <div class="recents-posts-item">
            <h3 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            
            <div class="recent-posts-image">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            </div>
            <div class="generic-content">
              <?php echo wp_trim_words(get_the_content(), 18); ?>
              <p><a class="small-btn" href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
            </div>
          </div> 
          <?php }
          
          echo '</div>';
        }
      }

      $post = $orig_post;
      wp_reset_query(); ?>

    </section>

<?php get_footer(); ?>