<footer class="footer">
  <div class="footer-row">
    <?php
      $args = array('menu_class' => 'menu', 'container' => false); // array to set rules for wordpress nav menu
      wp_nav_menu($args);
    ?>
    <small class="footer-footnote-text">
        <span>
          Designed and Developed by 
          <a href="http://www.resilientcoders.org" class="resilient-coders" target="_blank">Resilient Coders</a>
        </span>
        <span>
            &copy; <?php echo date("Y"); // render the current year?> <?php echo bloginfo($show = 'name'); // render the site name?>
        </span>
    </small>
  </div>
</footer>
