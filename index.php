<?php
get_header();
?>

<!-- HOME-->
<section class="home" id="home">

  <!-- HOME CONTAINER-->
  <div class="home__container container grid">
    <div class="home__img-bg">
      <img class="home__img" src="<?= bloginfo('template_url'); ?>/assets/images/5c1f0ebbc3e1719c2499.png" alt="🏡">
    </div>

    <!-- HOME SOCIAL-->
    <div class="home__social">
      <a class="home__social-link" href="https://www.facebook.com/" target="_blank">Facebook</a>
      <a class="home__social-link" href="https://twitter.com/" target="_blank">Twitter</a>
      <a class="home__social-link" href="https://www.instagram.com/" target="_blank">Instagram</a>
    </div>

    <!-- HOME DATA-->
    <div class="home__data">
      <h1 class="home__title">
        NEW WATCH
        <br>
        COLLECTIONS B720
      </h1>

      <!-- HOME DESCRIPTION-->
      <p class="home__description">
        Latest arrival of the new imported watches of the B720 series, with a modern and resistant design.
      </p>
      <span class="home__price">$1245</span>

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

    <!-- CARD-->
    <article class="featured__card">
      <span class="featured__tag">Sale</span>
      <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/aad77c8a060cba25e9bd.png" alt="featured" />

      <!-- CARD DATA-->
      <div class="featured__data">
        <h3 class="featured__title">Jazzmaster</h3>
        <span class="featured__price">$1050</span>
      </div>
      <button class="button featured__button">ADD TO CART</button>
    </article>

    <!-- CARD-->
    <article class="featured__card ">
      <span class="featured__tag">Sale</span>
      <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/0d097ad1cb6bb3be9759.png" alt="featured" />

      <!-- CARD DATA-->
      <div class="featured__data">
        <h3 class="featured__title">Ingersoll</h3>
        <span class="featured__price">$250</span>
      </div>
      <button class="button featured__button">ADD TO CART</button>
    </article>

    <!-- CARD-->
    <article class="featured__card">
      <span class="featured__tag">Sale</span>
      <img class="featured__img" src="<?= bloginfo('template_url'); ?>/assets/images/ed09ad664b90db3addcf.png" alt="featured" />

      <!-- CARD DATA-->
      <div class="featured__data">
        <h3 class="featured__title">Rose fold</h3>
        <span class="featured__price">$890</span>
      </div>
      <button class="button featured__button">ADD TO CART</button>
    </article>
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
        Inspirational Watch of
        <br>
        this year
      </h1>
      <p class="story__description">
        The latest and modern watches of this year, is available in various presentations in this store, discover them now.
      </p>
      <a class="button button--small" href="#">Discover</a>
    </div>

    <!-- STORY IMAGES-->
    <div class="story__images">
      <img class="story__img" src="<?= bloginfo('template_url'); ?>/assets/images/066c5116289add4feca0.png" alt="story">
      <div class="story__square"></div>
    </div>
  </div>
</section>

<!-- PRODUCTS-->
<section class="products section container" id="products">
  <h2 class="section__title">Products</h2>

  <!-- PRODUCTS CONTAINER-->
  <div class="products__container grid">

    <!-- CARD-->
    <article class="products__card">
      <img class="products__img" src="<?= bloginfo('template_url'); ?>/assets/images/c1e18d20f2be6d0702f6.png" alt="product" />

      <!-- CARD DATA-->
      <h3 class="products__title">Spirit rose</h3>
      <span class="products__price">$1500</span>
      <button class="products__button">
        <i class="bx bx-shopping-bag"></i>
      </button>
    </article>

    <!-- CARD-->
    <article class="products__card">
      <img class="products__img" src="<?= bloginfo('template_url'); ?>/assets/images/7219a6f80972671a8470.png" alt="product" />

      <!-- CARD DATA-->
      <h3 class="products__title">Khaki pilot</h3>
      <span class="products__price">$1350</span>
      <button class="products__button">
        <i class="bx bx-shopping-bag"></i>
      </button>
    </article>

    <!-- CARD-->
    <article class="products__card">
      <img class="products__img" src="<?= bloginfo('template_url'); ?>/assets/images/1bd2b44edbba842f503e.png" alt="product" />

      <!-- CARD DATA-->
      <h3 class="products__title">Jubilee black</h3>
      <span class="products__price">$870</span>
      <button class="products__button">
        <i class="bx bx-shopping-bag"></i>
      </button>
    </article>

    <!-- CARD-->
    <article class="products__card">
      <img class="products__img" src="<?= bloginfo('template_url'); ?>/assets/images/c8980cc814a719dd0a9c.png" alt="product" />

      <!-- CARD DATA-->
      <h3 class="products__title">Fosil me3</h3>
      <span class="products__price">$650</span>
      <button class="products__button">
        <i class="bx bx-shopping-bag"></i>
      </button>
    </article>

    <!-- CARD-->
    <article class="products__card">
      <img class="products__img" src="<?= bloginfo('template_url'); ?>/assets/images/85b65a3629914b32bd0f.png" alt="product" />

      <!-- CARD DATA-->
      <h3 class="products__title">Duchen</h3>
      <span class="products__price">$950</span>
      <button class="products__button">
        <i class="bx bx-shopping-bag"></i>
      </button>
    </article>
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

        <!-- TESTIMONIAL CARD-->
        <div class="testimonial__card swiper-slide">
          <div class="testimonial__quote">
            <i class="bx bxs-quote-alt-left"></i>
          </div>
          <p class="testimonial__description">
            They are the best watches that one acquires, also they are always with the latest news and trends, with a very comfortable price and especially with the attention you receive, they are always attentive to your questions.
          </p>
          <h3 class="testimonial__date">Match 27. 2021</h3>

          <!-- TESTIMONIAL PERFIL-->
          <div class="testimonial__perfil">
            <img class="testimonial__perfil-img" src="<?= bloginfo('template_url'); ?>/assets/images/7f99a0c2d43a30bbd4fb.jpg" alt="testimonial" />
            <div class="testimonial__perfil-data">
              <span class="testimonial__perfil-name">Lee Doe</span>
              <span class="testimonial__perfil-detail">Director of a company</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL CARD-->
        <div class="testimonial__card swiper-slide">
          <div class="testimonial__quote">
            <i class="bx bxs-quote-alt-left"></i>
          </div>
          <p class="testimonial__description">
            They are the best watches that one acquires, also they are always with the latest news and trends, with a very comfortable price and especially with the attention you receive, they are always attentive to your questions.
          </p>
          <h3 class="testimonial__date">Match 27. 2021</h3>

          <!-- TESTIMONIAL PERFIL-->
          <div class="testimonial__perfil">
            <img class="testimonial__perfil-img" src="<?= bloginfo('template_url'); ?>/assets/images/2153518d8433fb410765.jpg" alt="testimonial" />
            <div class="testimonial__perfil-data">
              <span class="testimonial__perfil-name">Samantha May</span>
              <span class="testimonial__perfil-detail">Director of a company</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL CARD-->
        <div class="testimonial__card swiper-slide">
          <div class="testimonial__quote">
            <i class="bx bxs-quote-alt-left"></i>
          </div>
          <p class="testimonial__description">
            They are the best watches that one acquires, also they are always with the latest news and trends, with a very comfortable price and especially with the attention you receive, they are always attentive to your questions.
          </p>
          <h3 class="testimonial__date">Match 27. 2021</h3>

          <!-- TESTIMONIAL PERFIL-->
          <div class="testimonial__perfil">
            <img class="testimonial__perfil-img" src="<?= bloginfo('template_url'); ?>/assets/images/9d6716b38faee0416628.jpg" alt="testimonial" />
            <div class="testimonial__perfil-data">
              <span class="testimonial__perfil-name">Raul Zaman</span>
              <span class="testimonial__perfil-detail">Director of a company</span>
            </div>
          </div>
        </div>
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
        <img class="testimonial__img" src="<?= bloginfo('template_url'); ?>/assets/images/20c1a8612685a03bce80.png" alt="testimonial">
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

        <!-- CARD-->
        <article class="new__card swiper-slide">
          <span class="new__tag">New</span>
          <img class="new__img" src="<?= bloginfo('template_url'); ?>/assets/images/090b231e81a146f8b6a1.png" alt="new" />

          <!-- CARD DATA-->
          <div class="new__data">
            <h3 class="new__title">Logines rose</h3>
            <span class="new__price">$980</span>
          </div>
          <button class="button new__button">ADD TO CART</button>
        </article>

        <!-- CARD-->
        <article class="new__card swiper-slide">
          <span class="new__tag">New</span>
          <img class="new__img" src="<?= bloginfo('template_url'); ?>/assets/images/edf0d7dfa5bd45d171e5.png" alt="new" />

          <!-- CARD DATA-->
          <div class="new__data">
            <h3 class="new__title">Jazzmaster</h3>
            <span class="new__price">$1150</span>
          </div>
          <button class="button new__button">ADD TO CART</button>
        </article>

        <!-- CARD-->
        <article class="new__card swiper-slide">
          <span class="new__tag">New</span>
          <img class="new__img" src="<?= bloginfo('template_url'); ?>/assets/images/b6a16635a5f1970210a0.png" alt="new" />

          <!-- CARD DATA-->
          <div class="new__data">
            <h3 class="new__title">Dreyfuss gold</h3>
            <span class="new__price">$750</span>
          </div>
          <button class="button new__button">ADD TO CART</button>
        </article>

        <!-- CARD-->
        <article class="new__card swiper-slide">
          <span class="new__tag">New</span>
          <img class="new__img" src="<?= bloginfo('template_url'); ?>/assets/images/40fcfa3d9f91cb20c86d.png" alt="new" />

          <!-- CARD DATA-->
          <div class="new__data">
            <h3 class="new__title">Portuguese rose</h3>
            <span class="new__price">$1590</span>
          </div>
          <button class="button new__button">ADD TO CART</button>
        </article>
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
        Subscribe Our
        <br>
        Newsletter
      </h2>
      <p class="newsletter__description">
        Don`t miss out on your discounts. Subscribe to our email newsletter to get the best offers, discounts, coupons, gifts and much more.
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