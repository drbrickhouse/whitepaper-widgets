<?php

//Register Custom Navigation Walker
if(file_exists(get_stylesheet_directory() . '/includes/class-wp-bootstrap-navwalker.php')) {
  require_once(get_stylesheet_directory() . '/includes/class-wp-bootstrap-navwalker.php');
} else {
  require_once('includes/class-wp-bootstrap-navwalker.php');
}
?>

<nav role="navigation" class="navbar <?php echo $nav_class; ?>">
  <div id="navbarCollapse" class="collapse navbar-collapse">
    <?php
      function get_menu_classes($inputs) {
        $inputs = $inputs.' nav navbar-nav no-bullet';
        return $inputs;
      };
      $navbarClass = get_menu_classes($list_class);
      $defaults = ( array(
        'theme_location' => 'primary-menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => $navbarClass,
        'fallback_cb' => 'wp_page_menu',
        //Process nav menu using our custom nav walker
        'walker' => new WP_Bootstrap_Navwalker())
      );

      wp_nav_menu( $defaults );
    ?>
  </div>
</nav>
