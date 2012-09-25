<div class="page-header">
      <nav id="nav-main" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) {
      wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
      }
      ?>
      </nav>
</div>