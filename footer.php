  <footer>
    <div class="main-container footer-content add-padding-5">

    <div class="footer-main-menu">
      <nav>
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'mainMenu',
          )); 
        ?>
      </nav>
    </div>

    <!-- Footer menu -->
    <div class="footer-menu">
      <nav>
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footerMenu',
          )); 
        ?>
      </nav>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright">
      <p>&copy; 2015 - <?php echo date('Y');?><span><?php echo get_bloginfo('name'); ?></span></p>
    </div>

    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>