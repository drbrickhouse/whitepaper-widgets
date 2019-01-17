<nav role="navigation" class="navbar navbar-static-top navbar-default">
  <div id="navbarCollapse" class="collapse navbar-collapse">
    <?php
      function get_menu_classes($inputs) {
        $inputs = $inputs.' nav navbar-nav no-bullet';
        return $inputs;
      };
      $navbarClass = get_menu_classes($menu_class);
      $defaults = ( array(
        'theme_location' => 'primary-menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => $navbarClass,
        'fallback_cb' => 'wp_page_menu',
        //Process nav menu using our custom nav walker
        'walker' => new wp_bootstrap_navwalker())
      );

      wp_nav_menu( $defaults );
    ?>
  </div>
</nav>
