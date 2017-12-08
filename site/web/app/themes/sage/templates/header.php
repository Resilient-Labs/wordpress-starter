<header class="header">
  <div class="header-row">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="header-nav">
      <?php
        $args = array('menu_class' => 'menu', 'container' => false); // array to set rules for wordpress nav menu
        wp_nav_menu($args);
      ?>
    </nav>
  </div>
</header>
