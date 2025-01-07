<!DOCTYPE html>
<html class="loading" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== FLATICON ===============-->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="<?= base_url('assets-front/css/styles.css') ?>" />

  <title>Toko Baju Ivanami</title>

</head>

<body>
  <!--=============== HEADER ===============-->
  <header class="header">

    <nav class="nav container">
      <a href="<?= base_url('/') ?>" class="nav__logo">
        <img src="assets/image/logo-ivanami.png" alt="" class="nav__logo-img">
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
            <li class="nav__item">
              <a href="<?= base_url('login_admin') ?>" class="nav__link">Admin</a>
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


  <?php if (session()->getFlashdata('alert') == 'cart_success'): ?>
    <script>
      alert('Produk berhasil ditambahkan ke keranjang!')
    </script>
  <?php elseif (session()->getFlashdata('alert') == 'produk_added'): ?>
    <script>
      alert('Produk sudah ditambahkan!')
    </script>
  <?php elseif (session()->getFlashdata('alert') == 'transaksi_succes'): ?>
    <script>
      alert('Pembayaran Berhasil!')
    </script>
  <?php elseif (session()->getFlashdata('alert') == 'login_sukses'): ?>
    <script>
      alert('Login Berhasil!')
    </script>
  <?php endif; ?>



  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== HOME ===============-->
    <section class="home section--lg">
      <div class="home__container container grid">
        <div class="home__content">
          <span class="home__subtitle">Selamat Tahun Baru 2025</span>
          <h1 class="home__title">
            Fashion Trending <span>Great Collections</span>
          </h1>
          <!-- <p class="home__description">
              Save more with voucher & up to 20% off
            </p> -->
          <a href="<?= base_url('shop') ?>" class="btn">Shop Now</a>
        </div>

        <img src="<?= base_url('assets/image/onepiece.png') ?>" alt="" class="home__img">
      </div>
    </section>

    <!--=============== CATEGORIES ===============-->
    <section class="categories container section">
      <h3 class="section__title"><span>Popular</span> Categories</h3>

      <div class="categories__container swiper">
        <div class="swiper-wrapper">

          <?php $no = 1;
          foreach ($kategori as $data) { ?>

            <a href="<?= base_url('kategori/' . $data['id_kategori']) ?>" class="category__item swiper-slide">
              <img src="<?= base_url('assets/img_kategori/' . $data['img_kategori']) ?>" alt="Gambar kategori" class="category__img">

              <h3 class="category__title"><?= $data['nm_kategori'] ?></h3>
            </a>

          <?php $no++;
          } ?>


        </div>

        <div class="swiper-button-next">
          <i class="fi fi-rs-angle-right"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="fi fi-rs-angle-left"></i>
        </div>
      </div>
    </section>

    <!--=============== PRODUCTS ===============-->
    <section class="products section container">
      <div class="tab__btns">
        <span class="tab__btn active-tab" data-target="#featured">Unggulan</span>
        <span class="tab__btn" data-target="#popular">Popular</span>
        <span class="tab__btn" data-target="#new-added">Baru</span>
      </div>

      <div class="tab__items">
        <div class="tab__item active-tab" content id="featured">
          <div class="products__container grid">

            <?php $no = 1;
            foreach ($unggulan as $value) { ?>

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
                  <span class="product__category"><?= $value['kategori']; ?></span>
                  <a href="<?= base_url('details/' . $value['id']) ?>">
                    <h3 title="<?= $value['nm_produk']; ?>" class="product__title" title="" style="cursor:pointer;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $value['nm_produk']; ?></h3>
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

            <?php $no++;
            } ?>

          </div>
        </div>

        <div class="tab__item" content id="popular">
          <div class="products__container grid">

            <?php $no = 1;
            foreach ($popular as $value) { ?>

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
                  <span class="product__category"><?= $value['kategori']; ?></span>
                  <a href="<?= base_url('details/' . $value['id']) ?>">
                    <h3 title="<?= $value['nm_produk']; ?>" class="product__title" title="" style="cursor:pointer;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $value['nm_produk']; ?></h3>
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

            <?php $no++;
            } ?>

          </div>
        </div>

        <div class="tab__item" content id="new-added">
          <div class="products__container grid">

            <?php $no = 1;
            foreach ($baru as $value) { ?>

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

                  <div class="product__badge light-pink">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category"><?= $value['kategori']; ?></span>
                  <a href="<?= base_url('details/' . $value['id']) ?>">
                    <h3 title="<?= $value['nm_produk']; ?>" class="product__title" title="" style="cursor:pointer;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $value['nm_produk']; ?></h3>
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
                    <span class="old__price">Rp</span>
                  </div>

                  <a href="<?= base_url('details/' . $value['id']) ?>" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

            <?php $no++;
            } ?>

          </div>
        </div>

      </div>
    </section>


    <!--=============== NEW ARRIVALS ===============-->
    <section class="new__arrivals container section">
      <h3 class="section__title"><span>Produk</span> Baru</h3>

      <div class="new__container swiper">
        <div class="swiper-wrapper">

          <?php $no = 1;
          foreach ($baru as $value) { ?>


            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="<?= base_url('details/' . $value['id']) ?>" class="product__images">
                  <img src="<?= base_url('assets/images_produk/' . $value['picture']) ?>" alt="" class="product__img default">

                  <img src="<?= base_url('assets/images_produk/' . $value['picture']) ?>" alt="" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="<?= base_url('details/' . $value['id']) ?>" class="action__btn" arial-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Add To Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category"><?= $value['kategori']; ?></span>
                <a href="<?= base_url('details/' . $value['id']) ?>">
                  <h3 title="<?= $value['nm_produk']; ?>" class="product__title" style="cursor:pointer;max-height: 80px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $value['nm_produk']; ?></h3>
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
                  <!-- <span class="old__price">Rp48.000 - Rp72.000</span> -->
                </div>

                <a href="<?= base_url('details/' . $value['id']) ?>" class="action__btn cart__btn" arial-label="Add To Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

          <?php $no++;
          } ?>

        </div>

        <div class="swiper-button-next">
          <i class="fi fi-rs-angle-right"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="fi fi-rs-angle-left"></i>
        </div>
      </div>
    </section>

  </main>

  <!--=============== FOOTER ===============-->
  <footer class="footer container">
    <hr>
    <div class="footer__container grid">
      <div class="footer__content">
        <a href="index.php" class="footer__logo">
          <img src="assets/image/logo-ivanami.png" alt="" class="footer__logo-img">
        </a>

        <h4 class="footer__subtitle">Contact</h4>

        <p class="footer__description"><span>Address:</span> Gg. Belong, Sukamaju Baru</p>
        <p class="footer__description"><span>No Telepon:</span> 62+ </p>
        <p class="footer__description"><span>Jam Kerja:</span> 10:00 - 18:00, Senin - Sabtu</p>

        <div class="footer__social">
          <h4 class="footer__subtitle">Follow Me</h4>

          <div class="footer__social-links flex">
            <a href="" class="">
              <img src="assets-front/img/icon-facebook.svg" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="assets-front/img/icon-twitter.svg" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="assets-front/img/icon-instagram.svg" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="assets-front/img/icon-pinterest.svg" alt="" class="footer__social-icon">
            </a>
            <a href="" class="">
              <img src="assets-front/img/icon-youtube.svg" alt="" class="footer__social-icon">
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
          <img src="assets/image/payment-mandiri.png" alt="">
          <img src="assets/image/payment-bca.png" alt="">
          <img src="assets/image/payment-bni.png" alt="">
          <img src="assets/image/payment-bri.png" alt="">
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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>