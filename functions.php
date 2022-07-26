<?php

/**************** 
 Scripts & Styles
****************/
function smhap_files(){
  // Remove default jQuery registration through WordPress
  // wp_dequeue_script('jquery');
  // wp_dequeue_script('jquery-migrate');
  // wp_dequeue_script('wp-embed');
  // wp_deregister_script('jquery');
  // wp_deregister_script('jquery-migrate');
  // wp_deregister_script('wp-embed');

  // Remove Emoji 
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  // JS
  wp_enqueue_script('show-more', get_theme_file_uri('/assets/js/show-more.js'), NULL, '1.0', true);
  wp_enqueue_script('the-icon', get_theme_file_uri('/assets/js/the-icon.js'), NULL, '1.0', true);
  wp_enqueue_script('sticky-menu', get_theme_file_uri('/assets/js/sticky-menu.js'), NULL, '1.0', true);
  wp_enqueue_script('font-awesome', '//kit.fontawesome.com/c8be5b3ba9.js');

  // CSS
  // wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto&display=swap');
  wp_enqueue_style('smhap_main_styles', esc_url( get_template_directory_uri() . '/assets/css/styles.css'), array(), '');
  wp_enqueue_style('smhap_main_queries', esc_url( get_template_directory_uri() . '/assets/css/queries.css'), array(), '');
}

add_action('wp_enqueue_scripts', 'smhap_files');

// function defer_parsing_of_js ( $url ) {
//   if ( FALSE === strpos( $url, '.js' ) ) return $url;
//   if ( strpos( $url, 'jquery.js' ) ) return $url;
//   return "$url' defer ";
//   }
// add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

/**************** 
 Remove Gutenberg Block Library CSS from loading on the frontend
****************/
function smhap_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 

add_action( 'wp_enqueue_scripts', 'smhap_remove_wp_block_library_css', 100 );

/**************** 
 Preconnect
****************/

function preconnect(){
    echo '
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://www.gstatic.com">
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
	';
}
 
add_action('wp_head', 'preconnect', 2, 0);

/**************** 
 Features
****************/

function smhap_features(){
  add_post_type_support('articulos', 'author');
  add_image_size('custom-square', 200, 200, true);
  add_image_size('custom-landscape', 400, 300, true);
  register_nav_menu('mainMenu', 'Main Menu');
  register_nav_menu('footerMenu', 'Footer Menu');
  register_nav_menu('topBarMenu', 'Top Bar Menu');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'width'  => 175,
    'height' => 106,
    )
  );
}

add_action('after_setup_theme', 'smhap_features');

/**************** 
 Google Analytics
****************/

function smhap_google_analytics() { 
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FD87ZPN97H"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FD87ZPN97H');
  </script>
<?php }

add_action('wp_head', 'smhap_google_analytics');

/****************
 * Add BCC to Email Notifications.
 *
 * @link https://wpforms.com/developers/how-to-add-a-bcc-to-email-notifications/
****************/
 
function wpf_dev_emails_send_email_data($data, $emails) {
      
  // Only run this snippet on the form ID 83
  if ( absint( $emails->form_data['id'] ) !== 83 ) {
     return $data;
  }
   
      // We're adding one email address for this form
      $data[ 'headers' ] .= "Bcc: hola@rivaslevi.mx\r\n";

      // Add multiple BCC by duplicating the line above and changing the email address
      // EXAMPLE: $data[ 'headers' ] .= "Bcc: someone_else@mysite.com\r\n";

      return $data;

}
add_filter( 'wpforms_emails_send_email_data', 'wpf_dev_emails_send_email_data', 10, 2 );