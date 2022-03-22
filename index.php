<?php
get_header();
?>

<!-- HOME-->
<section class="home" id="home">

  <!-- HOME CONTAINER-->
  <div class="home__container container grid">
    <div class="home__img-bg">
      <img class="home__img" src="<?php the_field('home_img'); ?>" alt="🏡">
    </div>

    <!-- HOME SOCIAL-->
    <div class="home__social">
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
        <a class="home__social-link" href="<?php the_field('social_url'); ?>" target="_blank">
          <?php the_title(); ?>
        </a>
      <?php
      }

      wp_reset_postdata();
      ?>
    </div>

    <!-- HOME DATA-->
    <div class="home__data">
      <h1 class="home__title">
        <?php the_field('home_title'); ?>
      </h1>

      <!-- HOME DESCRIPTION-->
      <p class="home__description">
        <?php the_field('home_descr'); ?>
      </p>
      <span class="home__price">
        $<?php the_field('home_price'); ?>
      </span>

      <!-- HOME BTNS-->
      <div class="home__btns">
        <a class="button button--gray button--small" href="#">Discover</a>
        <button class="button home__button">ADD TO CART</button>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED-->
<section class="featured section container" id="featured">
  <h2 class="section__title">Featured</h2>

  <!-- FEATURED CONTAINER-->
  <div class="featured__container grid">
    <?php
    $posts = get_posts(array(
      'numberposts' => 3,
      'category_name' => 'featured',
      'order_by' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <!-- CARD-->
      <article class="featured__card">
        <span class="featured__tag">Sale</span>
        <img class="featured__img" src="<?php the_post_thumbnail_url(); ?>" alt="featured" />

        <!-- CARD DATA-->
        <div class="featured__data">
          <h3 class="featured__title">
            <?php the_title(); ?>
          </h3>
          <span class="featured__price">
            $<?php the_field('card_price'); ?>
          </span>
        </div>
        <button class="button featured__button">ADD TO CART</button>
      </article>
    <?php
    }

    wp_reset_postdata();
    ?>
  </div>
</section>

<!-- STORY-->
<section class="story section container">

  <!-- STORY CONTAINER-->
  <div class="story__container grid">

    <!-- STORY DATA-->
    <div class="story__data">
      <h2 class="section__title story__section-title">Our story</h2>
      <h1 class="story__title">
        <?php the_field('story_title'); ?>
      </h1>
      <p class="story__description">
        <?php the_field('story_descr'); ?>
      </p>
      <a class="button button--small" href="#">Discover</a>
    </div>

    <!-- STORY IMAGES-->
    <div class="story__images">
      <img class="story__img" src="<?php the_field('story_img'); ?>" alt="story">
      <div class="story__square"></div>
    </div>
  </div>
</section>

<!-- PRODUCTS-->
<section class="products section container" id="products">
  <h2 class="section__title">Products</h2>

  <!-- PRODUCTS CONTAINER-->
  <div class="products__container grid">
    <?php
    $posts = get_posts(array(
      'numberposts' => -1,
      'category_name' => 'products',
      'order_by' => 'date',
      'order' => 'ASC',
      'post_type' => 'post',
      'suppress_filters' => true,
    ));

    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
      <!-- CARD-->
      <article class="products__card">
        <img class="products__img" src="<?php the_post_thumbnail_url(); ?>" alt="product" />

        <!-- CARD DATA-->
        <h3 class="products__title">
          <?php the_title(); ?>
        </h3>
        <span class="products__price">
          $<?php the_field('card_price'); ?>
        </span>
        <button class="products__button">
          <i class="bx bx-shopping-bag"></i>
        </button>
      </article>
    <?php
    }

    wp_reset_postdata();
    ?>
  </div>
</section>

<!-- TESTIMONIAL-->
<section class="testimonial section container">

  <!-- TESTIMONIAL CONTAINER-->
  <div class="testimonial__container grid">

    <!-- TESTIMONIAL SWIPER-->
    <div class="swiper testimonial-swiper">

      <!-- SWIPER WRAPPER-->
      <div class="swiper-wrapper">
        <?php
        $posts = get_posts(array(
          'numberposts' => -1,
          'category_name' => 'comments',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <!-- TESTIMONIAL CARD-->
          <div class="testimonial__card swiper-slide">
            <div class="testimonial__quote">
              <i class="bx bxs-quote-alt-left"></i>
            </div>
            <p class="testimonial__description">
              <?php the_field('comment_descr'); ?>
            </p>
            <h3 class="testimonial__date">
              <?php the_field('comment_date'); ?>
            </h3>

            <!-- TESTIMONIAL PERFIL-->
            <div class="testimonial__perfil">
              <img class="testimonial__perfil-img" src="<?php the_post_thumbnail_url(); ?>" />
              <div class="testimonial__perfil-data">
                <span class="testimonial__perfil-name">
                  <?php the_field('comment_author'); ?>
                </span>
                <span class="testimonial__perfil-detail">
                  <?php the_field('comment_author_position'); ?>
                </span>
              </div>
            </div>
          </div>
        <?php
        }

        wp_reset_postdata();
        ?>
      </div>

      <!-- SWIPER BTNS-->
      <div class="swiper-button-prev">
        <i class="bx bx-left-arrow-alt"></i>
      </div>
      <div class="swiper-button-next">
        <i class="bx bx-right-arrow-alt"></i>
      </div>
    </div>

    <!-- TESTIMONIAL IMAGES-->
    <div class="testimonial__images">
      <div class="testimonial__square">
        <img class="testimonial__img" src="<?php the_field('testimonial_img'); ?>" alt="testimonial">
      </div>
    </div>
  </div>
</section>

<!-- NEW-->
<section class="new section container" id="new">
  <h2 class="section__title">New Arrivals</h2>

  <!-- NEW CONTAINER-->
  <div class="new__container">
    <div class="swiper new-swiper">
      <div class="swiper-wrapper">
        <?php
        $posts = get_posts(array(
          'numberposts' => -1,
          'category_name' => 'new_arrivals',
          'order_by' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <!-- CARD-->
          <article class="new__card swiper-slide">
            <span class="new__tag">New</span>
            <img class="new__img" src="<?php the_post_thumbnail_url(); ?>" alt="new" />

            <!-- CARD DATA-->
            <div class="new__data">
              <h3 class="new__title">
                <?php the_title(); ?>
              </h3>
              <span class="new__price">
                $<?php the_field('card_price'); ?>
              </span>
            </div>
            <button class="button new__button">ADD TO CART</button>
          </article>
        <?php
        }

        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>

<!-- NEWSLETTER-->
<section class="newsletter section container">

  <!-- NEWSLETTER BG-->
  <div class="newsletter__bg grid">
    <div>
      <h2 class="newsletter__title">
        <?php the_field('newsletter_title'); ?>
      </h2>
      <p class="newsletter__description">
        <?php the_field('newsletter_descr'); ?>
      </p>
    </div>

    <!-- NEWSLETTER SUBSCRIBE-->
    <form class="newsletter__subscribe" action="" method="">
      <input class="newsletter__input" type="email" placeholder="Enter your email">
      <button class="button">SUBSCRIBE</button>
    </form>
  </div>
</section>

<?php
get_footer();
?>