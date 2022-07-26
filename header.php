<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- Top bar -->
    <div class="top-bar">
      <div class="main-container top-bar-content">

        <div class="top-bar-item">
          <!-- The logo -->
          <div class="header-logo">
            <?php the_custom_logo(); ?>
          </div>
        </div>

          <!-- The search box -->
          <div class="the-search">
            <?php get_search_form(); ?>
          </div>

        </div>

      </div>
    </div>

    <!-- Header -->
    <header class="header-container" id="js--header">
      <div class="main-container header">

        <!-- The icon -->
        <div class="the-icon">
          <div id="nav-icon3">
            <span class="toggle-switch"></span>
            <span class="toggle-switch"></span>
            <span class="toggle-switch"></span>
            <span class="toggle-switch"></span>
          </div>
        </div>

        <!-- The menu -->
        <div class="main-navigation">
          <nav>
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'mainMenu'
              )); 
            ?>
          </nav>
        </div>

      </div>
    </header>
 