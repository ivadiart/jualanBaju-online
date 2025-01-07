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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
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
          <li><span class="breadcrumb__link">Checkout</span></li>
        </ul>
      </section>
      <?php if (session()->getFlashdata('alert') == 'hapus_cart'): ?>
      <script>alert('Produk berhasil dihapus!')</script>
      <?php elseif (session()->getFlashdata('alert') == 'update_cart'): ?>
      <script>alert('Produk berhasil diupdate!')</script>
      <?php endif; ?>


      <!--=============== CART ===============-->
      <section class="cart section--lg container">

      <div class="container">
        <div class="row">
          <div class="col-3">
            <img style="width:100%;" src="<?= base_url('assets/images_produk/' . $checkout['img_cart']) ?>" alt="image" class="table__img">
          </div>
          <div class="col-9">
            <br>
            <h3 style="font-size:25px" class="table__title"><?= $checkout['nm_produk']?></h3>
           
            <span style="font-size:20px" class="table__price">Rp.<?= number_format(floatval($checkout['harga']), 2, ',', '.'); ?></span>
            <br><br>
            <h5 class="">x<?= $checkout['qty']?></h5>
          </div>
        </div>
      </div>        
        <div class="divider">
          <i class="fi fi-rs-fingerprint"></i>
        </div>

        <div class="cart__group grid">
          <div>
            <div class="chart__shipping">
              <h3 class="section__title">Alamat Pengiriman</h3>

              <form action="" class="form grid">
                <input type="text" placeholder="Nama Lengkap" class="form__input" id="nama">
                <input type="number" placeholder="Nomor Telepon" class="form__input" id="telp">
                <input type="text" placeholder="Provinsi/Kota/Kecamatan/Kode Pos" class="form__input" id="alamat">

                <div class="form__group grid">
                  <input type="text" placeholder="Nama Jalan, Gedung, No Rumah" class="form__input" id="alamat_jln">
                  <input type="text" placeholder="Detail Lainnya (Cth:Blok/Unit No, Patokan)" class="form__input" id="alamat_blok">
                </div>

              </form>
            </div>

            <div class="cart__coupon">
              <h3 class="section__title">Masukan Kode Voucher <i class='fi-rs-label'></i></h3>

              <form action="" class="coupon__form form grid">
                <div class="form__group grid">
                
                  <input type="text" class="form__input" placeholder="Enter Your Voucher" value="">
                </div>
              </form>
            </div>
          </div>

          <div class="cart__total">

            <h3 class="section__title">Opsi Pengiriman</h3>
                <select class="form-control" id="pengiriman">
                      <option value="not_option">-- Pilih Opsi --</option>
                      <option value="Reguler">Reguler</option>
                      <option value="Hemat">Hemat</option>
                      <option value="Kargo">Kargo</option>
                </select>
                <br>

            <h3 class="section__title">Rincian Pembayaran</h3>
            <div class="" hidden>
                <?= $total_produk = $checkout['qty'] * $checkout['harga'];
                    $diskon_produk = 0.15 * $total_produk;
                    $total = $total_produk + 16000 - 8000 - $diskon_produk + 1000;
                    ?>
            </div>
            <table class="cart__total-table">
              <tr>
                
                <td><span class="cart__total-title">Subtotal untuk produk</span></td>
                <td><span class="cart__total-price">Rp<?= number_format(floatval($total_produk), 0, ',', '.'); ?></span></td>
              </tr>
              <tr>
                <td><span class="cart__total-title">Subtotal pengiriman</span></td>
                <td><span class="cart__total-price">Rp16.000</span></td>
              </tr>
              <tr>
                <td><span class="cart__total-title">Diskon pengiriman</span></td>
                <td><span class="cart__total-price">-Rp8.000</span></td>
              </tr>
              <tr>
                <td><span class="cart__total-title">Diskon produk</span></td>
                <td><span class="cart__total-price">-Rp<?= number_format(floatval($diskon_produk), 0, ',', '.'); ?></span></td>
              </tr>
              <tr>
                <td><span class="cart__total-title">Biaya layanan</span></td>
                <td><span class="cart__total-price">Rp1.000</span></td>
              </tr>
              <tr>
                <td><span class="cart__total-title">Total pembayaran</span></td>
                <td><span class="cart__total-price">Rp<?= number_format(floatval($total), 0, ',', '.'); ?></span></td>
              </tr>
            </table>
            <?php
                    $this->session = session();

                    if (!$this->session->has('user')) {?>
                    <a href="<?= base_url('login-register/checkout')?>"
                        class="btn flex btn--md"
                        title="Lihat selengkapnya"><i class="fi fi-rs-box-alt"></i>Checkout</a>	
                    <?php } else { ?>
                    <button
                        class="btn flex btn--md"
                        data-toggle="modal" data-target="#ModalBayar" value=""
                        title="Lihat selengkapnya"><i class="fi fi-rs-box-alt"></i>Checkout</button>	
            <?php } ?>


            <!-- <a href="" data-bs-toggle="modal" data-bs-target="#ModalBayar" class="btn flex btn--md">
              <i class="fi fi-rs-box-alt"></i> Checkout
            </a> -->
            </div>
        </div>


        <div class="modal fade text-left" id="ModalBayar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Payment Confirmation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?= form_open('checkout/proses') ?>
                        <div class="modal-body">
                          <h5 class="card-title mb-2">THANK YOU FOR YOUR PURCHASE</h5>
                          <p class="card-text mb-2">Silakan Lakukan pembayaran dengan salah satu Rekening Bank virtual kami sesuai dengan nominal
                              <strong>Total Pembayaran</strong>
                          </p>
                              <ul class="list-group list-group-horizontal-xl mb-2">
                                <li class="list-group-item ">Mandiri - <strong>45156209123123</strong></li>
                                <li class="list-group-item ">BCA - <strong>3209123123 </strong></li>
                                <li class="list-group-item ">BRI - <strong>1010320123123</strong></li>
                                <li class="list-group-item ">BNI - <strong>45103209123123</strong></li>
                              </ul>

                              
                              <input type="text" name="id" value="<?= $checkout['id_cart']?>" hidden/>
                              <input type="text" name="nama" id="nama2" hidden/>
                              <input type="text" name="telp" id="telp2" hidden/>
                              <input type="text" name="alamat" id="alamat2" hidden/>
                              <input type="text" name="alamat_jln" id="alamat_jln2" hidden/>
                              <input type="text" name="alamat_blok" id="alamat_blok2" hidden/>
                              <input type="text" name="pengiriman" id="pengiriman2" hidden/>
                              <input type="text" name="total_bayar" value="<?= $total?>" hidden/>

                              <!-- <a class="text-success" href=""><strong>Please Confirm the Payment Here!</strong> </a> -->

                              

                        </div>

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Please Confirm the Payment Here!</button>

                            <button
                                class="btn flex btn--md"
                                data-dismiss="modal" value=""
                                title="Lihat selengkapnya">Tutup</button>	
                        </div>
                        <?= form_close() ?>
                </div>
              </div>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
      $('#nama').on('input', function() {
        $('#nama2').val($(this).val());
      });

      $('#telp').on('input', function() {
        $('#telp2').val($(this).val());
      });

      $('#alamat').on('input', function() {
        $('#alamat2').val($(this).val());
      });

      $('#alamat_jln').on('input', function() {
        $('#alamat_jln2').val($(this).val());
      });

      $('#alamat_blok').on('input', function() {
        $('#alamat_blok2').val($(this).val());
      });

      $('#pengiriman').on('input', function() {
        $('#pengiriman2').val($(this).val());
      });

      $('#confirm-payment').click(function(e) {
        e.preventDefault();
        // Assuming some logic to set 'harga' value or any other hidden inputs
        $('#harga').val(100000); // Example value
        $('#payment-form').submit();
      });
    });
  </script>
  </body>
</html>
