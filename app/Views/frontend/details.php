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
      <a href="<?= base_url('/') ?>" class="nav__logo">
        <img src="<?= base_url('assets/image/logo-ivanami.png') ?>" alt="" class="nav__logo-img">
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="<?= base_url('/') ?>" class="nav__link">Home</a>
          </li>
          <li class="nav__item">
            <a href="<?= base_url('shop') ?>" class="nav__link active-link">Shop</a>
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
            <img src="assets-front/img/search.png" alt="" />
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
    <!--=============== BREADCRUMB ===============-->
    <section class="breadcrumb">
      <ul class="breadcrumb__list flex container">
        <li><a href="<?= base_url('/') ?>" class="breadcrumb__link">Home</a></li>
        <!-- <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"><a href="#" class="breadcrumb__link"><?= $produk['kategori'] ?></a></span></li> -->
        <li><span class="breadcrumb__link">></span></li>
        <li><span class="breadcrumb__link">Details Produk</span></li>
      </ul>
    </section>


    <!--=============== DETAILS ===============-->
    <section class="details section--lg">
      <div class="details__container container grid">
        <div class="details__group">
          <img src="<?= base_url('assets/images_produk/' . $produk['picture']) ?>" alt="gambar" class="details__img">


          <!-- <div class="details__small-images grid">
              <img src="assets/image/hoodie-1.jpeg" alt="" class="details__small-img">
              <img src="assets/image/hoodie-2.jpeg" alt="" class="details__small-img">
              <img src="assets/image/hoodie-3.jpeg" alt="" class="details__small-img">
            </div> -->

        </div>

        <div class="details__group">
          <h3 class="details__title" title="<?= $produk['nm_produk']; ?>" style="cursor:pointer;width:100vh;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $produk['nm_produk']; ?></h3>

          <p class="details__brand">Brands: <span><?= $produk['nm_brand'] ?></span></p>

          <div class="details__price flex">
            <span class="new__price">Rp.<?= number_format(floatval($produk['harga']), 2, ',', '.'); ?></span>

            <!-- <span class="old__price">Rp77.000</span>
              <span class="save__price">42% off</span> -->
          </div>

          <p class="short__description">Deskripsi Produk:
          <pre wrap="white-space"><?= $produk['desc_produk'] ?></pre>
          </p>
          <br>
          <br>
          <ul class="product__list">
            <li class="list__item flex">
              <i class="fi-rs-credit-card"></i>Tersedia Cash on Delivery (COD)
            </li>
            <br>
          </ul>

          <div class="details__size flex">
            <span class="details__size-title">Size</span>

            <ul class="size__list">
              <li>
                <a href="#" class="size__link size-active">L</a>
              </li>
              <li>
                <a href="#" class="size__link">XL</a>
              </li>
              <li>
                <a href="#" class="size__link">XXL</a>
              </li>
            </ul>
          </div>


          <div class="details__action">
            <?= form_open('details/add_cart') ?>
            <input type="number" name="id_cart" value="<?= $produk['id'] ?>" hidden />
            <input type="text" name="img_cart" value="<?= $produk['picture'] ?>" hidden />
            <input type="text" name="nm_produk" value="<?= $produk['nm_produk'] ?>" hidden />
            <input type="number" name="harga" value="<?= $produk['harga'] ?>" hidden />
            <input type="number" name="qty" class="quantity" value="3" />

            <?php
            $this->session = session();

            if (!$this->session->has('user')) { ?>
              <a href="<?= base_url('login-register/checkout') ?>"
                class="btn btn--sm">Add to Cart</a>
            <?php } else { ?>
              <input type="submit" class="btn btn--sm" value="Add to Cart">
            <?php } ?>
            <!-- <a href="#" type="submit" class="btn btn--sm">Add to Cart</a> -->

            <a href="#" class="details__action-btn">
              <i class="fi fi-rs-heart"></i>
            </a>
            <?= form_close() ?>
          </div>

        </div>
      </div>
    </section>
    <!--=============== DETAILS TAB ===============-->
    <section class="details__tab container">
      <div class="detail__tabs">
        <span class="detail__tab active-tab" data-target="#info">
          Spesifikasi Produk
        </span>
        <span class="detail__tab" data-target="#reviews">Reviews(3)</span>
      </div>

      <div class="details__tabs-content">
        <div class="details__tab-content active-tab" content id="info">
          <table class="info__table">
            <tr>
              <th width="100%">
                <pre></pre>
              </th>
            </tr>
          </table>
        </div>

        <div class="details__tab-content" content id="reviews">
          <div class="reviews__container grid">
            <div class="review__single">
              <div>
                <img src="assets/image/circle-user.png" alt="" class="review__img">
                <h4 class="review__title">Alif</h4>
              </div>

              <div class="review__data">
                <div class="review__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>

                <p class="review__description">Thank you very fast shipping from Depok only 1 days.</p>

                <span class="review__date">December 24, 2024 at 3:12 pm</span>
              </div>
            </div>

            <div class="review__single">
              <div>
                <img src="assets/image/circle-user.png" alt="" class="review__img">
                <h4 class="review__title">Son Goku</h4>
              </div>

              <div class="review__data">
                <div class="review__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>

                <p class="review__description">Harga murah kualitas Oke</p>

                <span class="review__date">December 24, 2023 at 3:12 pm</span>
              </div>
            </div>

            <div class="review__single">
              <div>
                <img src="assets/image/circle-user.png" alt="" class="review__img">
                <h4 class="review__title">Son Gohan</h4>
              </div>

              <div class="review__data">
                <div class="review__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>

                <p class="review__description">Auto Langganan</p>

                <span class="review__date">December 4, 2023 at 3:12 pm</span>
              </div>
            </div>
          </div>

          <div class="review__form">
            <h4 class="review__form-title">Add a review</h4>

            <div class="rate__product">
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
              <i class="fi fi-rs-star"></i>
            </div>

            <form action="" class="form grid">
              <textarea class="form__input textarea" placeholder="Write Comment"></textarea>

              <div class="form__group grid">
                <input type="text" placeholder="Name" class="form__input">

                <input type="email" placeholder="Email" class="form__input">
              </div>

              <div class="form__btn">
                <button class="btn">Submit Review</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!--=============== PRODUCTS ===============-->
    <section class="products container section--lg">
      <h3 class="section__title"><span>Related</span> Products</h3>

      <div class="products__container grid">

        <?php $no = 1;
        foreach ($related as $value) { ?>

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

              <div class="product__badge light-green">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category"><?= $value['kategori']; ?></span>
              <a href="<?= base_url('details/' . $value['id']) ?>">
                <h3 class="product__title" title="<?= $value['nm_produk']; ?>" style="cursor:pointer;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $value['nm_produk']; ?></h3>
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
                <span class="old__price">Rp85.000 - Rp130.000</span>
              </div>

              <a href="<?= base_url('details/' . $value['id']) ?>" class="action__btn cart__btn" arial-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

        <?php $no++;
        } ?>

      </div>
    </section>

  </main>

  <!--=============== FOOTER ===============-->
  <footer class="footer container">
    <div class="footer__container grid">
      <div class="footer__content">
        <a href="index.php" class="footer__logo">
          <img src="assets/image/logo-ivanami.png" alt="" class="footer__logo-img">
        </a>

        <h4 class="footer__subtitle">Contact</h4>

        <p class="footer__description"><span>Address:</span> Gg. belong - Sukamaju Baru</p>
        <p class="footer__description"><span>Phone:</span> 62+</p>
        <p class="footer__description"><span>Hours:</span> 10:00 - 18:00, Sennin - Sabtu</p>

        <div class="footer__social">
          <h4 class="footer__subtitle">Follow Me</h4>

          <div class="footer__social-links flex">
            <a href="" class="">
              <img src="<?= base_url('assets-front/img/icon-facebook.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets-front/img/icon-twitter.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets-front/img/icon-instagram.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets-front/img/icon-pinterest.svg') ?>" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="<?= base_url('assets-front/img/icon-youtube.svg') ?>" alt="" class="footer__social-icon">
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

        <img src="assets-front/img/payment-method.png" alt="">
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