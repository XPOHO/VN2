<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
       <!-- main content -->

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", "ID", "NAME", "PREVIEW_TEXT", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "news",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Слайдер",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", "", ""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>


    <section class="mpage-banner full-banner">
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/fullbanner_image1.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image1.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image1.jpg [(min-width: 1025px)]">
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
        <div class="banner-slide white-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/fullbanner_image2.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image2.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image2.jpg [(min-width: 1025px)]">
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
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/sidebanner_image2.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image2.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image2.jpg [(min-width: 1025px)]"></div>
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
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/fullbanner_image3.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image3.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image3.jpg [(min-width: 1025px)]">
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
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/fullbanner_image4.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image4.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image4.jpg [(min-width: 1025px)]">
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
        <div class="banner-slide lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/fullbanner_image5.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/fullbanner_image5.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/fullbanner_image5.jpg [(min-width: 1025px)]">
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
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/sidebanner_image3.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image3.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image3.jpg [(min-width: 1025px)]"></div>
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
                <div class="banner-slide__image lazyload" data-bgset="<?=DEFAULT_TEMPLATE_PATH?>/images/main//main_page/banners/mobile/sidebanner_image4.jpg [(max-width: 575px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/pad/sidebanner_image4.jpg [(max-width: 1024px)] | <?=DEFAULT_TEMPLATE_PATH?>/images/main/main_page/banners/sidebanner_image4.jpg [(min-width: 1025px)]"></div>
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
                    <li class="social-list__item"><a href="#" target="_blank" class="social-list__link"><i class="icon icon-tg"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- main end content -->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>