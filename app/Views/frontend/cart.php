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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    
    <link rel="stylesheet" href="<?= base_url('assets-front/css/styles.css')?>" />

    <title>Fashion Store</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">

      <nav class="nav container">
        <a href="index.php" class="nav__logo">
          <img src="<?= base_url('assets/image/logo-3.png')?>" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="<?= base_url('/')?>" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="<?= base_url('shop')?>" class="nav__link active-link">Shop</a>
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
              <img src="<?= base_url('assets-front/img/search.png')?>" alt="" />
            </button>
          </div>
        </div>

        <div class="header__user-actions">
          <a href="#" class="header__action-btn">
            <img src="<?= base_url('assets-front/img/icon-heart.svg')?>" alt="">
            <!-- <span class="count">3</span> -->
          </a>

          <a href="<?= base_url('cart')?>" class="header__action-btn">
            <img src="<?= base_url('assets-front/img/icon-cart.svg')?>" alt="">
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
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Cart</span></li>
        </ul>
      </section>
      <?php if (session()->getFlashdata('alert') == 'hapus_cart'): ?>
      <script>alert('Produk berhasil dihapus!')</script>
      <?php elseif (session()->getFlashdata('alert') == 'update_cart'): ?>
      <script>alert('Produk berhasil diupdate!')</script>
      <?php endif; ?>


      <!--=============== CART ===============-->
      <section class="cart section--lg container">
        <div class="table__container">
          <table class="table">

            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th>Remove</th>
            </tr>
            <?php $no=1; foreach($cart as $value){
              $total=$value['qty']*$value['harga'];
              ?>
            <tr>
              <td><a href="<?= base_url('checkout/'.$value['id_cart'])?>" class=""><img src="<?= base_url('assets/images_produk/' . $value['img_cart']) ?>" alt="" class="table__img"></a></td>
              <td>
                <a style="text-decoration:none" href="<?= base_url('checkout/'.$value['id_cart'])?>" class="decoration-none"><h3 class="table__title"><?= $value['nm_produk']?></h3></a>
                
                <!-- <p class="table__description">Sweater Pria Deas Off White Beludru Panas Musim Gugur Berkerudung Dingin</p> -->
              </td>
              <td><span class="table__price">Rp.<?= number_format(floatval($value['harga']), 2, ',', '.'); ?></span></td>
              <td><input type="number" value="<?= $value['qty']?>" name="qty" class="quantity" readonly></td>
              <input name="id" value="<?= $value['id_cart']?>"  hidden />
              <td><span class="table__subtotal"></span>Rp.<?= number_format(floatval($total), 2, ',', '.'); ?></td>
              <td><a href="<?= base_url('cart/hapus/' . $value['id_cart'])?>" onclick="javascript:return confirm('Apakah anda yakin ingin menghapus ini?')"><i class="fi fi-rs-trash table__trash"></a></i></td>
            </tr>


            <?php $no++;}?>

          </table>

        </div>

        <div class="cart__actions">
          <!-- <button type="submit" class="btn flex btn--md">
            <i class="fi-rs-shuffle"></i> Update Cart
            </button> -->
            <a href="<?=base_url('/')?>" class="btn flex btn--md">
              <i class="fi-rs-shopping-bag"></i> Continue Shopping
            </a>
          </div>
        
        <div class="divider">
          <i class="fi fi-rs-fingerprint"></i>
        </div>

          </section>

      
          <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets-front/img/icon-email.svg" alt="" class="newsletter__icon">
            Sign up to Newsletter
          </h3>

          <p class="newsletter__description">...and receive 25% voucher for first shopping.</p>

          <form action="" class="newsletter__form">
            <input type="text" placeholder="Enter your email" class="newsletter__input">
            <button type="submit" class="newsletter__btn">Subscribe</button>
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
        <p class="copyright">&copy; 2024 Gani. All Rights Reserved</p>
        <span class="designer">Designed by Gani Maulana</span>
      </div>
    </footer>
    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
