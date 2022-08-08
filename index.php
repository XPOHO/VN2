<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
       <!-- main content -->
    <main class="mpage-main">
        <div id="main-slider" class="main-slider swiper">
            <div class="swiper-wrapper">
                <div class="slide-item swiper-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/main_slider/mobile/main_slide1.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/main_slider/pad/main_slide1.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/main_slider/main_slide1.jpg [(min-width: 1025px)]">
                    <div class="container">
                        <div class="slide-info">
                            <h2 class="slide-title">Зимняя коллекция</h2>
                            <h3 class="slide-subtitle">Lorem ipsum is placeholder text commonly used -20%</h3>
                        </div>
                        <div class="slide-links">
                            <a href="#" class="slide-btn">Повседневная одежда</a>
                            <a href="#" class="slide-btn">Домашняя одежда</a>
                        </div>
                    </div>
                </div>
                <div class="slide-item swiper-slide video-slide">
                    <div class="video-wrapper">
                        <video class="video-item" autoplay="autoplay" loop="loop" muted="muted" playsinline="1" preload="1" poster="">
                            <source src="<?=DEFAULT_TEMPLATE_PATH?>/assets/videos/1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="container">
                        <div class="slide-info">
                            <h2 class="slide-title">Зимняя коллекция</h2>
                            <h3 class="slide-subtitle">Lorem ipsum is placeholder text commonly used -20%</h3>
                        </div>
                        <div class="slide-links">
                            <a href="#" class="slide-btn">Повседневная одежда</a>
                            <a href="#" class="slide-btn">Домашняя одежда</a>
                        </div>
                    </div>
                </div>
                <div class="slide-item swiper-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/main_slider/mobile/main_slide1.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/main_slider/pad/main_slide1.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/main_slider/main_slide1.jpg [(min-width: 1025px)]">
                    <div class="container">
                        <div class="slide-info">
                            <h2 class="slide-title">Зимняя коллекция</h2>
                            <h3 class="slide-subtitle">Lorem ipsum is placeholder text commonly used -20%</h3>
                        </div>
                        <div class="slide-links">
                            <a href="#" class="slide-btn">Повседневная одежда</a>
                            <a href="#" class="slide-btn">Домашняя одежда</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </main>
    <section class="mpage-banner full-banner">
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/fullbanner_image1.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image1.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image1.jpg [(min-width: 1025px)]">
            <div class="container">
                <div class="banner-wrapper">
                    <h3 class="banner-subtitle">Новый сезон</h3>
                    <h2 class="banner-title">Повседневная одежда</h2>
                    <div class="banner-btns">
                        <a href="#" class="banner-link btn-outline-style white-style">Перейти в каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mpage-banner full-banner">
        <div class="banner-slide white-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/fullbanner_image2.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image2.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image2.jpg [(min-width: 1025px)]">
            <div class="container">
                <div class="banner-wrapper">
                    <h3 class="banner-subtitle">Новый сезон</h3>
                    <h2 class="banner-title">Новая коллекция</h2>
                    <div class="banner-btns">
                        <a href="#" class="banner-link btn-fill-style">Перейти в каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mpage-banner side-banner">
        <div class="banner-slide">
            <div class="container">
                <div class="banner-slide__info">
                    <h3 class="banner-subtitle">Повседневная одежда</h3>
                    <h2 class="banner-title">У нас новые модели</h2>
                    <a href="#" class="banner-link btn-fill-style white-style">Перейти в каталог</a>
                </div>
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/mobile/sidebanner_image1.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image1.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image1.jpg [(min-width: 1025px)]"></div>
            </div>
        </div>
    </section>
    <section class="mpage-catalog catalog-section">
        <h2 class="catalog-section__title section-title">Повседневная одежда</h2>
        <div class="catalog-section__content">
            <div class="catalog-slider swiper">
                <div class="swiper-wrapper">
                    <!-- if colors-slider -->
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image1.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image2.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image3.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image1.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image2.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image3.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <!-- end colors-slider -->
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image1.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image3.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image2.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image4.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div class="nav-btn btn-prev"><i class="icon icon-slider_arrow"></i></div>
                    <div class="nav-btn btn-next"><i class="icon icon-slider_arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="mpage-banner side-banner reverse-style">
        <div class="banner-slide">
            <div class="container">
                <div class="banner-slide__info">
                    <h3 class="banner-subtitle">Новинки в каталоге</h3>
                    <h2 class="banner-title">Black and white graphic</h2>
                    <a href="#" class="banner-link btn-fill-style white-style">Перейти в каталог</a>
                </div>
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/sidebanner_image2.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image2.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image2.jpg [(min-width: 1025px)]"></div>
            </div>
        </div>
    </section>
    <section class="mpage-catalog catalog-section">
        <h2 class="catalog-section__title section-title">Black and white graphic</h2>
        <div class="catalog-section__content">
            <div class="catalog-slider swiper">
                <div class="swiper-wrapper">
                    <!-- if colors-slider -->
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image22.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image23.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image22.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image23.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <!-- end colors-slider -->
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image23.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image22.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div class="nav-btn btn-prev"><i class="icon icon-slider_arrow"></i></div>
                    <div class="nav-btn btn-next"><i class="icon icon-slider_arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="mpage-banner full-banner center-style">
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/fullbanner_image3.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image3.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image3.jpg [(min-width: 1025px)]">
            <div class="container">
                <h3 class="banner-subtitle">Повседневная одежда</h3>
                <h2 class="banner-title">Dusk in the valley</h2>
                <div class="banner-btns inline-btns">
                    <a href="#" class="banner-link btn-fill-style white-style">Перейти в каталог</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mpage-catalog catalog-section">
        <h2 class="catalog-section__title section-title">Black and white graphic</h2>
        <div class="catalog-section__content">
            <div class="catalog-slider swiper">
                <div class="swiper-wrapper">
                    <!-- if colors-slider -->
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image22.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image23.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image22.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image23.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <!-- end colors-slider -->
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image23.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image22.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image21.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div class="nav-btn btn-prev"><i class="icon icon-slider_arrow"></i></div>
                    <div class="nav-btn btn-next"><i class="icon icon-slider_arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="mpage-banner full-banner left-center-style">
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/fullbanner_image4.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image4.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image4.jpg [(min-width: 1025px)]">
            <div class="container">
                <h3 class="banner-subtitle">Новый сезон</h3>
                <h2 class="banner-title">Irses flowers</h2>
                <div class="banner-btns inline-btns">
                    <a href="#" class="banner-link btn-outline-style white-style">Перейти в каталог</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mpage-banner full-banner center-style">
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/fullbanner_image5.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image5.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image5.jpg [(min-width: 1025px)]">
            <div class="container">
                <h3 class="banner-subtitle">Повседневная одежда</h3>
                <h2 class="banner-title">Coffee with mint</h2>
                <div class="banner-btns">
                    <a href="#" class="banner-link btn-outline-style white-style">Перейти в каталог</a>
                    <a href="#" class="banner-link btn-fill-style white-style">Перейти в каталог</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mpage-banner side-banner">
        <div class="banner-slide">
            <div class="container">
                <div class="banner-slide__info">
                    <h3 class="banner-subtitle">Новый сезон</h3>
                    <h2 class="banner-title">Tropical mood</h2>
                    <a href="#" class="banner-link btn-fill-style white-style">Перейти в каталог</a>
                </div>
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/sidebanner_image3.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image3.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image3.jpg [(min-width: 1025px)]"></div>
            </div>
        </div>
    </section>
    <section class="mpage-banner side-banner reverse-style">
        <div class="banner-slide">
            <div class="container">
                <div class="banner-slide__info">
                    <h3 class="banner-subtitle">Новый сезон</h3>
                    <h2 class="banner-title">Night garden</h2>
                    <a href="#" class="banner-link btn-fill-style white-style">Перейти в каталог</a>
                </div>
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/ main/main_page/banners/mobile/sidebanner_image4.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image4.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image4.jpg [(min-width: 1025px)]"></div>
            </div>
        </div>
    </section>
    <section class="mpage-catalog catalog-section">
        <h2 class="catalog-section__title section-title">Black and white graphic</h2>
        <div class="catalog-section__content">
            <div class="catalog-slider swiper">
                <div class="swiper-wrapper">
                    <!-- if colors-slider -->
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image31.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image32.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image33.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide colors-item">
                        <div class="image-block">
                            <div class="colors-slider swiper">
                                <div class="swiper-wrapper">
                                    <a href="#" class="product-link swiper-slide" data-color="#AEB9A9">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image31.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#8ACAFF">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image32.jpg" alt="product" class="product-image">
                                    </a>
                                    <a href="#" class="product-link swiper-slide" data-color="#252426">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image33.jpg" alt="product" class="product-image">
                                    </a>
                                </div>
                                <div class="colors-navigation">
                                    <div class="colors-btn color-prev"><i class="icon icon-slider_arrow"></i></div>
                                    <div class="colors-btn color-next"><i class="icon icon-slider_arrow"></i></div>
                                </div>
                            </div>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <div class="colors-pagination"></div>
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <!-- end colors-slider -->
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image31.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <div class="product-tags">
                                <div class="product-tags__item sale-item">M, S — 20%</div>
                                <div class="product-tags__item new-item">New</div>
                            </div>
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image33.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image32.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors"></div>
                        </div>
                    </div>
                    <div class="slide-item swiper-slide">
                        <div class="image-block">
                            <a href="#" class="product-link">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/catalogs/product_image31.jpg" alt="product" class="product-image">
                            </a>
                            <div class="product-btns">
                                <a href="#" class="product-btn favorite-link"><i class="icon icon-heart"></i></a>
                                <a href="#" class="product-btn addcart-link"><i class="icon icon-cart"></i><span>В корзину</span></a>
                            </div>
                        </div>
                        <div class="descr-block">
                            <a href="#" class="product-name">Жакет женский</a>
                            <span class="product-price">
                                <span class="oldprice">1 749 ₽</span>
                            <span class="price">1 749 ₽</span>
                            </span>
                            <div class="product-colors">
                                <span class="product-colors__all">+19 цветов</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div class="nav-btn btn-prev"><i class="icon icon-slider_arrow"></i></div>
                    <div class="nav-btn btn-next"><i class="icon icon-slider_arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="mpage-subscribe subscribe-section">
        <div class="container">
            <div class="subscribe-section__content">
                <h2 class="form-title">Присоединяйтесь к нам!</h2>
                <form action="" class="subscribe-form">
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Ваш e-mail">
                    </div>
                    <div class="input-group check-group">
                        <label>
                            <input type="checkbox" name="check" required>
                            <span>СОГЛАСЕН НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ, С <a href="#">ДОГОВОРОМ ПУБЛИЧНОЙ ОФЕРТЫ</a> И <a href="#">ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</a> ОЗНАКОМЛЕН И ПРИНИМАЮ</span>
                        </label>
                    </div>
                    <div class="input-group btn-group">
                        <button type="submit" class="btn-fill-style black-style">Подписаться</button>
                    </div>
                </form>
            </div>
            <div class="subscribe-section__social">
                <ul class="social-list">
                    <li class="social-list__item"><a href="#" target="_blank" class="social-list__link"><i class="icon icon-youtube"></i></a></li>
                    <li class="social-list__item"><a href="#" target="_blank" class="social-list__link"><i class="icon icon-vk"></i></a></li>
                    <li class="social-list__item"><a href="#" target="_blank" class="social-list__link"><i class="icon icon-inst"></i></a></li>
                    <li class="social-list__item"><a href="#" target="_blank" class="social-list__link"><i class="icon icon-tg"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- main end content -->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>