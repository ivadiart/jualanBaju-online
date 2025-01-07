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
    <link rel="stylesheet" href="<?= base_url('assets-front/css/styles.css')?>" />

    <title>Fashion Store</title>
  </head>
  <body>

  <?php if (session()->getFlashdata('alert') == 'tambah_bukutamu'): ?>
      <script>alert('Pesan telah terkirim')</script>
      <?php endif; ?>

    <!--=============== HEADER ===============-->
    <header class="header">

      <nav class="nav container">
        <a href="<?= base_url('/')?>" class="nav__logo">
          <img src="assets/image/logo-3.png" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
                <a href="<?= base_url('/')?>" class="nav__link active-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="<?= base_url('shop')?>" class="nav__link">Shop</a>
              </li>
              <li class="nav__item">
                <a href="<?= base_url('settings')?>" class="nav__link">Settings</a>
              </li>
              <?php
                      $this->session = session();

                      if (!$this->session->has('user')) {?>
                        <li class="nav__item">
                        <a href="<?= base_url('login-register')?>" class="nav__link">Login</a>
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
            <img src="assets-front/img/icon-heart.svg" alt="">
            <!-- <span class="count">3</span> -->
          </a>

          <a href="<?= base_url('cart')?>" class="header__action-btn">
            <img src="assets-front/img/icon-cart.svg" alt="">
            <span class="count"><?= $total_cart;?></span>
          </a>
        </div>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Settings</span></li>
        </ul>
      </section>

      <!--=============== ACCOUNTS ===============-->
      <section class="accounts section--lg">
        <div class="accounts__container container grid">
          <div class="account__tabs">

            <p class="account__tab active-tab" data-target="#dashboard">
              <i class="fi fi-rs-settings-sliders"></i> Dashboard
            </p>

            <p class="account__tab" data-target="#orders">
              <i class="fi fi-rs-shopping-bag"></i> Orders
            </p>
            
            <p class="account__tab" data-target="#contactus">
              <i class="fi fi-rs-paper-plane"></i> Contact Us
            </p>
            
            <a href="<?= base_url('login-register/logout')?>" class="account__tab">
              <i class="fi fi-rs-exit"></i> Logout
            </a>

          </div>

          <div class="tabs__content">
            
            <div class="tab__content active-tab" content id="dashboard">
              <h3 class="tab__header">Selamat datang di toko kami!</h3>

              <div class="tab__body">
                <p class="tab__description">Temukan Kebutuhan Anda dengan Lebih Mudah.</p>
              </div>
            </div>

            <div class="tab__content" content id="contactus">
              <h3 class="tab__header">Contact Us</h3>

              <div class="contact__us">
  
                <form action="<?= base_url('settings/bukutamu')?>" method="post" class="form grid">

                  <div class="form__group grid">
                    <input type="text" placeholder="Name" class="form__input" name="nama" required>
  
                    <input type="email" placeholder="Email" class="form__input" name="email" required>
                  </div>

                  <textarea class="form__input textarea" placeholder="Tulis pesan" name="komen" required></textarea>
  
                  <div class="form__btn">
                    <button type="submit" class="btn">Kirim</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="tab__content" content id="orders">
              <h3 class="tab__header">Your Orders</h3>

              <div class="tab__body">
                <table class="placed__order-table">
                  <tr>
                    <th>No Pesanan</th>
                    <th>Tanggal pesan</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Details</th>
                  </tr>
                  <?php $no=1; foreach($orders as $value){?>

                  <tr>
                    <td><?= $value['no_pesanan']?></td>
                    <td><?= $value['tanggal_pesan']?></td>
                    <td><?= $value['status']?></td>
                    <td>Rp.<?= number_format(floatval($value['total_bayar']), 0, ',', '.'); ?></td>
                    <td><a href="" class="view__order">View</a></td>
                  </tr>
                  <?php $no++;}?>

                </table>
              </div>
            </div>


          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets-front/img/icon-email.svg" alt="" class="newsletter__icon">
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
            <img src="assets/image/logo-3.png" alt="" class="footer__logo-img">
          </a>

          <h4 class="footer__subtitle">Contact</h4>

          <p class="footer__description"><span>Address:</span> Banjar - Jawa Barat</p>
          <p class="footer__description"><span>Phone:</span> 62+ 82317330549</p>
          <p class="footer__description"><span>Hours:</span> 10:00 - 18:00, Sennin - Sabtu</p>

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
        <p class="copyright">&copy; 2023 Gani. All Rights Reserved</p>
        <span class="designer">Designed by Gani Maulana</span>
      </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
