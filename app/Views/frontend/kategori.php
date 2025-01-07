<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== FLATICON ===============-->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="<?= base_url('assets-front/css/styles.css') ?>" />

  <title>Fashion Store</title>
</head>

<body>
  <!--=============== HEADER ===============-->
  <header class="header">

    <nav class="nav container">
      <a href="index.php" class="nav__logo">
        <img src="<?= base_url('assets/image/logo-ivanami.png') ?>" alt="" class="nav__logo-img">
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="<?= base_url('/') ?>" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="<?= base_url('shop') ?>" class="nav__link">Shop</a>
          </li>
          <li class="nav__item">
            <a href="<?= base_url('settings') ?>" class="nav__link">Settings</a>
          </li>
          <?php
          $this->session = session();

          if (!$this->session->has('user')) { ?>
            <li class="nav__item">
              <a href="<?= base_url('login-register') ?>" class="nav__link">Login</a>
            </li>
          <?php } ?>
        </ul>

        <div class="header__search">
          <input type="text" placeholder="Search for items" class="form__input">

          <button class="search__btn">
            <img src="<?= base_url('assets-front/img/search.png') ?>" alt="" />
          </button>
        </div>
      </div>

      <div class="header__user-actions">
        <a href="#" class="header__action-btn">
          <img src="<?= base_url('assets-front/img/icon-heart.svg') ?>" alt="">
          <!-- <span class="count">3</span> -->
        </a>

        <?php
        $this->session = session();

        if (!$this->session->has('user')) { ?>
          <a href="<?= base_url('login-register/checkout') ?>" class="header__action-btn">
            <img src="<?= base_url('assets-front/img/icon-cart.svg') ?>" alt="">
          </a>

        <?php } else { ?>
          <a href="<?= base_url('cart') ?>" class="header__action-btn">
            <img src="<?= base_url('assets-front/img/icon-cart.svg') ?>" alt="">
            <span class="count"><?= $total_cart; ?></span>
          </a>
        <?php } ?>
      </div>
    </nav>
  </header>

  <!--=============== MAIN ===============-->
  <main class="main">

    <?php if (isset($dataKategori) && isset($produkList)): ?>

      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="<?= base_url('/') ?>" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"><?= $dataKategori['nm_kategori'] ?></span></li>
        </ul>
      </section>


      <!--=============== PRODUCTS ===============-->
      <section class="products section--lg container">
        <p class="total__products">We Found <span><?= esc($totalProduk) ?></span> items for you!</p>

        <div class="products__container grid">

          <?php foreach ($produkList as $value): ?>

            <div class="product__item">
              <div class="product__banner">
                <a href="<?= base_url('details/' . $value['id']) ?>" class="product__images">
                  <img src="<?= base_url('assets/images_produk/' . $value['picture']) ?>" alt="image produk" class="product__img default">

                  <img src="<?= base_url('assets/images_produk/' . $value['picture']) ?>" alt="image produk" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="<?= base_url('details/' . $value['id']) ?>" class="action__btn" arial-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Add To Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-30%</div>
              </div>

              <div class="product__content">
                <span class="product__category"></span>
                <a href="<?= base_url('details/' . $value['id']) ?>">
                  <h3 class="product__title" style="cursor:pointer;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $value['nm_produk']; ?></h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price">
                  <span class="new__price">Rp.<?= number_format(floatval($value['harga']), 2, ',', '.'); ?></span>
                  <br>
                  <span class="old__price">Rp77.000</span>
                </div>

                <a href="<?= base_url('details/' . $value['id']) ?>" class="action__btn cart__btn" arial-label="Add To Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

        <ul class="pagination">
          <li><a href="#" class="pagination__link active">01</a></li>
          <li><a href="#" class="pagination__link">02</a></li>
          <li><a href="#" class="pagination__link">03</a></li>
          <li><a href="#" class="pagination__link">...</a></li>
          <li><a href="#" class="pagination__link">16</a></li>
          <li>
            <a href="#" class="pagination__link icon">
              <i class="fi-rs-angle-double-small-right"></i>
            </a>
          </li>
        </ul>

      </section>
    <?php else: ?>
      <p>Data kategori tidak ditemukan.</p>
    <?php endif; ?>

    <!--=============== NEWSLETTER ===============-->
    <section class="newsletter section">
      <div class="newsletter__container container grid">
        <h3 class="newsletter__title flex">
          <img src="<?= base_url('assets-front/img/icon-email.svg') ?>" alt="" class="newsletter__icon">
          Masukan Email
        </h3>

        <p class="newsletter__description">..untuk mendapatkan informasi terbaru tentang produk kami!</p>

        <form action="" class="newsletter__form">
          <input type="text" placeholder="Enter your email" class="newsletter__input">
          <button type="submit" class="newsletter__btn">Kirim</button>
        </form>
      </div>
    </section>
  </main>

  <!--=============== FOOTER ===============-->
  <footer class="footer container">
    <div class="footer__container grid">
      <div class="footer__content">
        <a href="index.php" class="footer__logo">
          <img src="<?= base_url('assets/image/logo-ivananami.png') ?>" alt="" class="footer__logo-img">
        </a>

        <h4 class="footer__subtitle">Contact</h4>

        <p class="footer__description"><span>Address:</span> Gg. Belong, Sukamaju Baru</p>
        <p class="footer__description"><span>Phone:</span> 62+</p>
        <p class="footer__description"><span>Hours:</span> 10:00 - 18:00, Sennin - Sabtu</p>

        <div class="footer__social">
          <h4 class="footer__subtitle">Follow Me</h4>

          <div class="footer__social-links flex">
            <a href="" class="">
              <img src="<?= base_url('assets/img/icon-facebook.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets/img/icon-twitter.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets/img/icon-instagram.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets/img/icon-pinterest.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets/img/icon-youtube.svg') ?>" alt="" class="footer__social-icon">
            </a>
          </div>
        </div>
      </div>

      <div class="footer__content">
        <h3 class="footer__title">Address</h3>

        <ul class="footer__links">
          <li><a href="" class="footer__link">About Us</a></li>
          <li><a href="" class="footer__link">Delivery Information</a></li>
          <li><a href="" class="footer__link">Privacy Policy</a></li>
          <li><a href="" class="footer__link">Terms & Conditions</a></li>
          <li><a href="" class="footer__link">Contact Us</a></li>
          <li><a href="" class="footer__link">Support Center</a></li>
        </ul>
      </div>

      <div class="footer__content">
        <h3 class="footer__title">My Account</h3>

        <ul class="footer__links">
          <li><a href="" class="footer__link">Sign In</a></li>
          <li><a href="" class="footer__link">View Cart</a></li>
          <li><a href="" class="footer__link">My Wishlist</a></li>
          <li><a href="" class="footer__link">Track My Order</a></li>
          <li><a href="" class="footer__link">Help</a></li>
          <li><a href="" class="footer__link">Order</a></li>
        </ul>
      </div>

      <div class="footer__content">
        <h3 class="footer__title">Secured Payment Gateways</h3>

        <img src="<?= base_url('assets/img/payment-method.png') ?>" alt="">
        <div class="payment__img">
          <img src="<?= base_url('assets/image/payment-mandiri.png') ?>" alt="">
          <img src="<?= base_url('assets/image/payment-bca.png') ?>" alt="">
          <img src="<?= base_url('assets/image/payment-bni.png') ?>" alt="">
          <img src="<?= base_url('assets/image/payment-bri.png') ?>" alt="">
        </div>
      </div>
    </div>

    <div class="footer__bottom">
      <p class="copyright">&copy; 2024 iva.d.art All Rights Reserved</p>
      <span class="designer">Redesigned by agus.d.skywalker</span>
    </div>
  </footer>

  <!--=============== SWIPER JS ===============-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>