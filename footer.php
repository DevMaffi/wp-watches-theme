<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<!-- FOOTER-->
<footer class="footer section" id="footer">

  <!-- FOOTER CONTAINER-->
  <div class="footer__container container grid">

    <!-- FOOTER CONTENT-->
    <div class="footer__content">
      <h3 class="footer__title">Our information</h3>

      <!-- FOOTER LIST-->
      <ul class="footer__list">
        <li>1234 - Peru</li>
        <li>La Libertad 43210</li>
        <li>123-456-789</li>
      </ul>
    </div>

    <!-- FOOTER CONTENT-->
    <div class="footer__content">
      <h3 class="footer__title">About Us</h3>

      <?php
      wp_nav_menu([
        'menu' => 'About menu',
        'container' => false,
        'menu_class' => 'footer__links',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'depth' => 1,
      ]);
      ?>
    </div>

    <!-- FOOTER CONTENT-->
    <div class="footer__content">
      <h3 class="footer__title">Product</h3>

      <?php
      wp_nav_menu([
        'menu' => 'Product menu',
        'container' => false,
        'menu_class' => 'footer__links',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'depth' => 1,
      ]);
      ?>
    </div>

    <!-- FOOTER CONTENT-->
    <div class="footer__content">
      <h3 class="footer__title">Social</h3>

      <!-- FOOTER SOCIAL-->
      <ul class="footer__social">
        <?php
        $posts = get_posts(array(
          'numberposts' => 3,
          'category_name' => 'social_links',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <a class="footer__social-link" href="<?php the_field('social_url'); ?>" target="_blank">
            <?php the_field('social_icon'); ?>
          </a>
        <?php
        }

        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </div>
  <span class="footer__copy">© 2022 Rolex. All rights reserved</span>
</footer>
</main>

<!-- SCROLL UP-->
<a class="scroll-up" id="scroll-up" href="#home">
  <i class="bx bx-up-arrow-alt scroll-up__icon"></i>
</a>

<?php
wp_footer();
?>
</body>

</html>