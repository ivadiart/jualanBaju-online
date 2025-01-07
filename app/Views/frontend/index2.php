<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="<?= base_url('assets-front/css/styles.css')?>" />

    <title>Fashion Store</title>

  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">
      

      <nav class="nav container">
        <a href="index.html" class="nav__logo">
          <img src="assets/image/logo-3.png" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <div class="nav__menu-top">
            <a href="index.html" class="nav__menu-logo">
              <img src="assets/image/logo-3.png" alt="">
            </a>

            <div class="nav__close" id="nav-close">
              <i class="fi fi-rs-cross-small"></i>
            </div>
          </div>
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.html" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="shop.html" class="nav__link">Shop</a>
            </li>
            <li class="nav__item">
              <a href="accounts.html" class="nav__link">Settings</a>
            </li>
            <!-- <li class="nav__item">
              <a href="compare.html" class="nav__link">Compare</a>
            </li> -->
            <!-- <li class="nav__item">
              <a href="login-register.html" class="nav__link">Login</a>
            </li> -->
          </ul>

          <div class="header__search">
            <input type="text" placeholder="Search for items" class="form__input">

            <button class="search__btn">
              <img src="assets/img/search.png" alt="" />
            </button>
          </div>
        </div>

        <div class="header__user-actions">
          <a href="wishlist.html" class="header__action-btn">
            <img src="assets-front/img/icon-heart.svg" alt="">
            <span class="count">3</span>
          </a>

          <a href="cart.html" class="header__action-btn">
            <img src="assets-front/img/icon-cart.svg" alt="">
            <span class="count">3</span>
          </a>

          <div class="header__action-btn nav__toggle" id="nav-toggle">
            <img src="assets/img/menu-burger.svg" alt="">
          </div>
        </div>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section--lg">
        <div class="home__container container grid">
          <div class="home__content">
            <span class="home__subtitle">Happy New Years Discount!</span>
            <h1 class="home__title">
              Fashion Trending <span>Great Collections</span>
            </h1>
            <p class="home__description">
              Save more with voucher & up to 20% off
            </p>
            <a href="shop.html" class="btn">Shop Now</a>
          </div>

          <img src="assets/image/happy-new-years.jpg" alt="" class="home__img">
        </div>
      </section>

      <!--=============== CATEGORIES ===============-->
      <section class="categories container section">
        <h3 class="section__title"><span>Popular</span> Categories</h3>

        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/hoodie-1.jpeg" alt="" class="category__img">

              <h3 class="category__title">Sweater/Hoodie</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/pakaian-1.jpeg" alt="" class="category__img">

              <h3 class="category__title">Pakaian</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/celana-1.jpeg" alt="" class="category__img">

              <h3 class="category__title">Celana</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/sepatu-1.jpeg" alt="" class="category__img">

              <h3 class="category__title">Sepatu</h3>
            </a>
            <!-- <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/handphone-1.jpeg" alt="" class="category__img">

              <h3 class="category__title">Handphone</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/laptop-1.jpeg" alt="" class="category__img">

              <h3 class="category__title">Laptop</h3>
            </a> -->
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/image/kacamata-2.jpg" alt="" class="category__img">

              <h3 class="category__title">Aksesoris</h3>
            </a>
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
          <span class="tab__btn active-tab" data-target="#featured">Featured</span>
          <span class="tab__btn" data-target="#popular">Popular</span>
          <span class="tab__btn" data-target="#new-added">New added</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/hoodie-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/hoodie-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Sweater/Hoodie</span>
                  <a href="details.html">
                    <h3 class="product__title">Hoodie Pria</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp44.660 - Rp49.280</span>
                    <br>
                    <span class="old__price">Rp77.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Pakaian</span>
                  <a href="details.html">
                    <h3 class="product__title">JAKET JEAN SANWSH PRA JAKET JEAN SNOW BLAK</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp100.000 - Rp115.000</span>
                    <br>
                    <span class="old__price">Rp120.000 - Rp135.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/sepatu-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/sepatu-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Sepatu</span>
                  <a href="details.html">
                    <h3 class="product__title">SEPATU VNS OLDSKOOL BLACK PRIA WANITA PREMIUM COD</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp75.000 - Rp177.000</span>
                    <br>
                    <span class="old__price">Rp82.000 - Rp192.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/kacamata-3.jpeg" alt="" class="product__img default">

                    <img src="assets/image/kacamata-3.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Aksesoris</span>
                  <a href="details.html">
                    <h3 class="product__title">Kacamata Hitam Photocromic</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp60.000 - Rp230.000</span>
                    <br>
                    <span class="old__price">Rp100.000 - Rp360.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/kacamata-4.jpeg" alt="" class="product__img default">

                    <img src="assets/image/kacamata-4.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Aksesoris</span>
                  <a href="details.html">
                    <h3 class="product__title">Kacamata Photocromic Minus Wanita Eyawer Lensa Antiradiasi</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp69.000 - Rp190.000</span>
                    <br>
                    <span class="old__price">Rp138.000 - Rp380.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/hoodie-8.jpeg" alt="" class="product__img default">

                    <img src="assets/image/hoodie-8.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>

                <div class="product__content">
                  <span class="product__category">Hoodie & Sweatshirt</span>
                  <a href="details.html">
                    <h3 class="product__title">jaket polos zipper hoodie mint pria wanita wame</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp44.000 - Rp60.000</span>
                    <br>
                    <span class="old__price">Rp44.000 - Rp100.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab__item" content id="popular">
            <div class="products__container grid">

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Pakaian</span>
                  <a href="details.html">
                    <h3 class="product__title">JAKET JEAN SANWSH PRA JAKET JEAN SNOW BLAK</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp100.000 - Rp115.000</span>
                    <br>
                    <span class="old__price">Rp120.000 - Rp135.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/hoodie-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/hoodie-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Sweater/Hoodie</span>
                  <a href="details.html">
                    <h3 class="product__title">Hoodie Pria</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp44.660 - Rp49.280</span>
                    <br>
                    <span class="old__price">Rp77.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/handphone-2.jpeg" alt="" class="product__img default">

                    <img src="assets/image/handphone-2.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-orange">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Handphone</span>
                  <a href="details.html">
                    <h3 class="product__title">Apple iPhone 15 Pro Max 256GB, Blue Titanium</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">Rp24.999.000</span>
                    <span class="old__price"></span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/sepatu-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/sepatu-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Sepatu</span>
                  <a href="details.html">
                    <h3 class="product__title">SEPATU VNS OLDSKOOL BLACK PRIA WANITA PREMIUM COD</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp75.000 - Rp177.000</span>
                    <br>
                    <span class="old__price">Rp82.000 - Rp192.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/macbook-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/macbook-2.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-blue">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Laptop</span>
                  <a href="details.html">
                    <h3 class="product__title">Apple MacBook Air (13.3 inci, M1 2020) 8GB RAM, 256GB SSD, Silver</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp12.999.000</span>
                    <br>
                    <span class="old__price">Rp17.199.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/kacamata-4.jpeg" alt="" class="product__img default">

                    <img src="assets/image/kacamata-4.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Aksesoris</span>
                  <a href="details.html">
                    <h3 class="product__title">Kacamata Photocromic Minus Wanita Eyawer Lensa Antiradiasi</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp69.000 - Rp190.000</span>
                    <br>
                    <span class="old__price">Rp138.000 - Rp380.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/kacamata-3.jpeg" alt="" class="product__img default">

                    <img src="assets/image/kacamata-3.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Aksesoris</span>
                  <a href="details.html">
                    <h3 class="product__title">Kacamata Hitam Photocromic</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp60.000 - Rp230.000</span>
                    <br>
                    <span class="old__price">Rp100.000 - Rp360.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/hoodie-8.jpeg" alt="" class="product__img default">

                    <img src="assets/image/hoodie-8.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>

                <div class="product__content">
                  <span class="product__category">Hoodie & Sweatshirt</span>
                  <a href="details.html">
                    <h3 class="product__title">jaket polos zipper hoodie mint pria wanita wame</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp44.000 - Rp60.000</span>
                    <br>
                    <span class="old__price">Rp44.000 - Rp100.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
  
            </div>
          </div>

          <div class="tab__item" content id="new-added">
            <div class="products__container grid">

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/macbook-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/macbook-2.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-blue">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Laptop</span>
                  <a href="details.html">
                    <h3 class="product__title">Apple MacBook Air (13.3 inci, M1 2020) 8GB RAM, 256GB SSD, Silver</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp12.999.000</span>
                    <br>
                    <span class="old__price">Rp17.199.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/hoodie-8.jpeg" alt="" class="product__img default">

                    <img src="assets/image/hoodie-8.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>

                <div class="product__content">
                  <span class="product__category">Hoodie & Sweatshirt</span>
                  <a href="details.html">
                    <h3 class="product__title">jaket polos zipper hoodie mint pria wanita wame</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp44.000 - Rp60.000</span>
                    <br>
                    <span class="old__price">Rp44.000 - Rp100.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Pakaian</span>
                  <a href="details.html">
                    <h3 class="product__title">JAKET JEAN SANWSH PRA JAKET JEAN SNOW BLAK</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp100.000 - Rp115.000</span>
                    <br>
                    <span class="old__price">Rp120.000 - Rp135.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/kacamata-4.jpeg" alt="" class="product__img default">

                    <img src="assets/image/kacamata-4.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Aksesoris</span>
                  <a href="details.html">
                    <h3 class="product__title">Kacamata Photocromic Minus Wanita Eyawer Lensa Antiradiasi</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp69.000 - Rp190.000</span>
                    <br>
                    <span class="old__price">Rp138.000 - Rp380.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/hoodie-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/hoodie-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Sweater/Hoodie</span>
                  <a href="details.html">
                    <h3 class="product__title">Hoodie Pria</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp44.660 - Rp49.280</span>
                    <br>
                    <span class="old__price">Rp77.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/sepatu-1.jpeg" alt="" class="product__img default">

                    <img src="assets/image/sepatu-1.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Sepatu</span>
                  <a href="details.html">
                    <h3 class="product__title">SEPATU VNS OLDSKOOL BLACK PRIA WANITA PREMIUM COD</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp75.000 - Rp177.000</span>
                    <br>
                    <span class="old__price">Rp82.000 - Rp192.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/handphone-2.jpeg" alt="" class="product__img default">

                    <img src="assets/image/handphone-2.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-orange">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Handphone</span>
                  <a href="details.html">
                    <h3 class="product__title">Apple iPhone 15 Pro Max 256GB, Blue Titanium</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">Rp24.999.000</span>
                    <span class="old__price"></span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img src="assets/image/kacamata-3.jpeg" alt="" class="product__img default">

                    <img src="assets/image/kacamata-3.jpeg" alt="" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" arial-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Add To Wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" arial-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Aksesoris</span>
                  <a href="details.html">
                    <h3 class="product__title">Kacamata Hitam Photocromic</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price">
                    <span class="new__price">Rp60.000 - Rp230.000</span>
                    <br>
                    <span class="old__price">Rp100.000 - Rp360.000</span>
                  </div>

                  <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals__container container grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">DISKON AHKIR TAHUN !!</h3>
              <span class="deals__category">Handphone</span>
            </div>

            <h4 class="deals__title">Apple iPhone 11 64GB, White</h4>

            <div class="deals__price">
              <span class="new__price">Rp5.999.000</span>
              <br>
              <span class="old__price">Rp7.999.000</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry Up! Offer End In:</p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="unit">Sec</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="details.html" class="btn btn--md">Shop Now</a>
            </div>
          </div>

          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">DISKON AHKIR TAHUN !!</h3>
              <span class="deals__category">Hoodie & Sweatshirt</span>
            </div>

            <h4 class="deals__title">Jaket polos zipper hoodie denim</h4>

            <div class="deals__price">
              <span class="new__price">Rp44.000 - Rp60.000</span>
              <br>
              <span class="old__price">Rp44.000 - Rp100.000</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry Up! Offer End In:</p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="unit">Sec</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="details.html" class="btn btn--md">Shop Now</a>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container section">
        <h3 class="section__title"><span>New</span> Arrivals</h3>

        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/image/hoodie-11.jpeg" alt="" class="product__img default">

                  <img src="assets/image/hoodie-11.jpeg" alt="" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" arial-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Add To Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Hoodie & Sweatshirt</span>
                <a href="details.html">
                  <h3 class="product__title">Sweater Hoodie Stigmatuary Distro Premium Quality</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price">
                  <span class="new__price">Rp44.000 - Rp54.000</span>
                  <br>
                  <span class="old__price">Rp48.000 - Rp72.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img default">

                  <img src="assets/image/pakaian-1.jpeg" alt="" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" arial-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Add To Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Pakaian</span>
                <a href="details.html">
                  <h3 class="product__title">JAKET JEAN SANWSH PRA JAKET JEAN SNOW BLAK</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price">
                  <span class="new__price">Rp100.000 - Rp115.000</span>
                  <br>
                  <span class="old__price">Rp120.000 - Rp135.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/image/handphone-2.jpeg" alt="" class="product__img default">

                  <img src="assets/image/handphone-2.jpeg" alt="" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" arial-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Add To Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-orange">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Handphone</span>
                <a href="details.html">
                  <h3 class="product__title">Apple iPhone 15 Pro Max 256GB, Blue Titanium</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price">
                  <span class="new__price">Rp24.999.000</span>
                  <br>
                  <span class="old__price">Rp26.999.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/image/sandal-3.jpeg" alt="" class="product__img default">

                  <img src="assets/image/sandal-3.jpeg" alt="" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" arial-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Add To Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>
                  <a href="#" class="action__btn" arial-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-blue">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Sandal</span>
                <a href="details.html">
                  <h3 class="product__title">Sandal Carvil Pria Dewasa & Anak terbaru</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price">
                  <span class="new__price">Rp13.000 - Rp15.000</span>
                  <br>
                  <span class="old__price">Rp16.000 - Rp19.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" arial-label="Add To Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

          </div>

          <div class="swiper-button-next">
            <i class="fi fi-rs-angle-right"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
        </div>
      </section>

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase__container container grid">
          <div class="showcase__wrapper">
            <h3 class="section__title">Hot Releases</h3>
            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/handphone-2.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Apple iPhone 15 Pro Max 256GB, Blue Titanium</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp24.999.000</span>
                  <br>
                  <span class="old__price">Rp26.999.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/sandal-3.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Sandal Carvil Pria Dewasa & Anak terbaru</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp13.000 - Rp15.000</span>
                  <br>
                  <span class="old__price">Rp16.000 - Rp19.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/topi-1.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Topi Baseball Nama Bulan Lahir September</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp4.830 - Rp13.800</span>
                  <br>
                  <span class="old__price">Rp7.000 - Rp20.000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Deals & Outlet</h3>
            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/kacamata-5.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Kacamata Antiradiasi Gaya Korea Bentuk Bulat Bahan Metal</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp12.500</span>
                  <br>
                  <span class="old__price">Rp13.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/sepatu-2.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">sneckers trend terlaris motif garis zigzag</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp34.800 - Rp35.800</span>
                  <br>
                  <span class="old__price">Rp120.000</span>
                </div>
              </div>
            </div>

            
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Top Selling</h3>
            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/sepatu-1.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">SEPATU VNS OLDSKOOL BLACK PRIA WANITA PREMIUM COD</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp75.000 - Rp177.000</span>
                  <br>
                  <span class="old__price">Rp82.000 - Rp192.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/hoodie-11.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Sweater Hoodie Stigmatuary Distro Premium Quality</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp44.000 - Rp54.000</span>
                  <br>
                  <span class="old__price">Rp48.000 - Rp72.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/pakaian-1.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">JAKET JEAN SANWSH PRA JAKET JEAN SNOW BLACK</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp100.000 - Rp115.000</span>
                  <br>
                  <span class="old__price">Rp120.000 - Rp135.000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Trendy</h3>
            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/tws-1.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">TWS HEADSET BLUETOOTH GAMING WIRELESS EMBEDDED POWERBANK</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp31.500</span>
                  <br>
                  <span class="old__price">Rp154.000</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/handphone-4.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Apple iPhone 11 64GB Black</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp6.999.000</span>
                  <span class="old__price"></span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.html" class="showcase__img-box">
                <img src="assets/image/jam-tangan-1.jpeg" alt="" class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.html" class="">
                  <h4 class="showcase__title">Jam Tangan Pria Analog LUMINOX 3251.CB.NSF XS.3251.CB.NSF Navy Seal</h4>
                </a>

                <div class="showcase__price">
                  <span class="new__price">Rp9.920.000</span>
                  <br>
                  <span class="old__price">Rp12.400.000</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section home__newsletter">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets/img/icon-email.svg" alt="" class="newsletter__icon">
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
          <a href="index.html" class="footer__logo">
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
                <img src="assets/img/icon-facebook.svg" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="assets/img/icon-twitter.svg" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="assets/img/icon-instagram.svg" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="assets/img/icon-pinterest.svg" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="assets/img/icon-youtube.svg" alt="" class="footer__social-icon">
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

          <img src="assets/img/payment-method.png" alt="">
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
    <script src="<?= base_url('assets/js/main.js')?>"></script>
  </body>
</html>
