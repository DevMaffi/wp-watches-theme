<!DOCTYPE html>
<html lang="en">

<!-- HEAD-->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= bloginfo('template_url'); ?>/assets/images/1970841f12c64467dd99.png" type="image/x-icon" />
  <title>
    <?php
    bloginfo('name');
    echo ' | ';
    bloginfo('description');
    ?>
  </title>
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

  <?php
  wp_head();
  ?>
</head>

<!-- BODY-->

<body>

  <!-- MAIN-->
  <main class="main">

    <!-- HEADER-->
    <header class="header" id="header">

      <!-- NAV CONTAINER-->
      <nav class="nav container">

        <!-- NAV LOGO-->
        <a class="nav__logo" href="#home">
          <i class="bx bxs-watch nav__logo-icon"></i>
          Rolex
        </a>

        <!-- NAV MENU-->
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link active-link" href="#home">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__link " href="#featured">Featured</a>
            </li>
            <li class="nav__item">
              <a class="nav__link " href="#products">Products</a>
            </li>
            <li class="nav__item">
              <a class="nav__link " href="#new">New</a>
            </li>
          </ul>

          <!-- NAV CLOSE-->
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <!-- NAV BUTTONS-->
        <div class="nav__btns">
          <i class="bx bx-moon change-theme" id="theme-button"></i>
          <div class="nav__shop" id="cart-shop">
            <i class="bx bx-shopping-bag"></i>
          </div>
          <div class="nav__toggle" id="nav-toggle">
            <i class="bx bx-grid-alt"></i>
          </div>
        </div>
      </nav>
    </header>

    <!-- CART-->
    <div class="cart" id="cart">
      <i class="bx bx-x cart__close" id="cart-close"></i>
      <h2 class="cart__title-center">My Cart</h2>

      <!-- CART CONTAINER-->
      <div class="cart__container">

        <!-- CART CARD-->
        <article class="cart__card">
          <div class="cart__box">
            <img class="cart__img" src="<?= bloginfo('template_url'); ?>/assets/images/aad77c8a060cba25e9bd.png" alt="cart img" />
          </div>

          <!-- CART DETAILS-->
          <div class="cart__details">
            <h3 class="cart__title">Jazzmaster</h3>
            <span class="cart__price">$1050</span>

            <!-- CART AMOUNT-->
            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>
                <span class="cart__amount-number">1</span>
                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>
              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>

        <!-- CART CARD-->
        <article class="cart__card">
          <div class="cart__box">
            <img class="cart__img" src="<?= bloginfo('template_url'); ?>/assets/images/ed09ad664b90db3addcf.png" alt="cart img" />
          </div>

          <!-- CART DETAILS-->
          <div class="cart__details">
            <h3 class="cart__title">Rose Gold</h3>
            <span class="cart__price">$850</span>

            <!-- CART AMOUNT-->
            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>
                <span class="cart__amount-number">1</span>
                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>
              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>

        <!-- CART CARD-->
        <article class="cart__card">
          <div class="cart__box">
            <img class="cart__img" src="<?= bloginfo('template_url'); ?>/assets/images/090b231e81a146f8b6a1.png" alt="cart img" />
          </div>

          <!-- CART DETAILS-->
          <div class="cart__details">
            <h3 class="cart__title">Logines Rose</h3>
            <span class="cart__price">$980</span>

            <!-- CART AMOUNT-->
            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>
                <span class="cart__amount-number">1</span>
                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>
              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>
      </div>

      <!-- CART PRICES-->
      <div class="cart__prices">
        <span class="cart__prices-item">3 items</span>
        <span class="cart__prices-total">$2880</span>
      </div>
    </div>