@extends('user.layouts.master')
@section('content')
    <link href="{{ asset('assets/user/css/compare.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <body>
        <!-- snippet location header -->
        <svg data-src="https://cdn11.bigcommerce.com/s-24232/stencil/5fe2b680-bba0-0138-8fe1-0242ac11000f/e/fe0f7ff0-a22d-0137-2996-0242ac11001d/img/icon-sprite.svg"
            class="icons-svg-sprite"></svg>

        <div class="body" data-currency-code="USD">
            <div class="container">
                <div id="product_viewpage" class="page" itemscope itemtype="http://schema.org/Product">
                    <div class="page-inner-heading">
                        <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li class="breadcrumb" itemprop="itemListElement" itemscope
                                itemtype="http://schema.org/ListItem">
                                <a href="../index.html" class="breadcrumb-label" itemprop="item">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="breadcrumb" itemprop="itemListElement" itemscope
                                itemtype="http://schema.org/ListItem">
                                <a href="../shop-lcd/index.html" class="breadcrumb-label" itemprop="item">
                                    <span itemprop="name">Shop</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ul>
                    </div>

                    <div class="productView">
                        <section class="info3col-data">
                            <div class="offer-slider">
                                <ul id="slider">
                                    <li>
                                        <a href="#">
                                            <img
                                                src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/right-banner-1.jpg') }}">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img
                                                src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/right-banner-2.jpg') }}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="productView-images" data-image-gallery>
                            <div class="compare-candidates">

                                <div class="compare-candidate compare-col">
                                    <div class="candidate-search compare-search-1">
                                        <form class="clearfix" action="" method="get" _lpchecked="1">
                                            <strong class="cmp-with floatLeftDisplay movecmpwith">Main Product</strong><br>
                                            <input type="hidden" class="st-input-cmp float-left js-bound" name="sSearch1"
                                                value="" autocomplete="off" placeholder="Search">
                                        </form>
                                        <div
                                            class="autocomplete autocomplete-search autocomplete-small autocomplete-hide autocomplete-compare">
                                            <div class="reviews-results float-left">
                                                <span class="autocomplete-desc">Reviews</span>
                                                <ul>
                                                    <li class="permanent"><a class="more-news-link more-news-link-small"
                                                            href="#">More review results</a></li>
                                                </ul>
                                            </div>
                                            <div class="phone-results">
                                                <span class="autocomplete-desc">Last visited</span>
                                                <ul class="autocomplete-last-searched"></ul>
                                            </div>
                                            <div class="news-results float-left">
                                                <span class="autocomplete-desc">News</span>
                                                <ul>
                                                    <li class="permanent"><a class="more-news-link more-news-link-small"
                                                            href="#">More news results</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swap-phones empty"></div>
                                    <h3><span data-spec="modelname">{{ $product->title }}</span></h3>
                                    <div class="compare-media-wrap float-left clearfix">
                                        <img src="{{ asset('assets/img/product/' . $product->images[0]->path) }}"
                                            alt="Realme C73">
                                    </div>
                                </div>

                                <!-- first Product 1-->
                                <div class="compare-candidate compare-col">
                                    <div class="candidate-search compare-search-1">
                                        <form class="clearfix" action="" method="get">
                                            <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
                                            <input type="text" id="compare-search1"
                                                class="st-input-cmp float-left js-bound" name="sSearch2" value=""
                                                autocomplete="off" placeholder="Search">
                                            <input type="hidden" class="st-input-cmp float-left js-bound"
                                                name="product_id" id="product_id1" value="">
                                        </form>
                                        <div class="autocomplete autocomplete-search autocomplete-small"
                                            id="autocomplete-modal" style="display: none;">
                                            <div class="product-results">
                                                <ul class="product-list">
                                                    {{-- products list  --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swap-phones">
                                        <h3 class="product-title"><a href="#"><span data-spec="modelname"></span></a></h3>
                                        {{-- <h3 class="product-title"></h3> --}}
                                        <div class="compare-media-wrap float-left clearfix">
                                            <img class="product-image" src="" alt="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Product -->
                                <div class="compare-candidate compare-col">
                                    <div class="candidate-search compare-search-2">
                                        <form class="clearfix" action="" method="get">
                                            <strong class="cmp-with floatLeftDisplay movecmpwith">Compare with</strong><br>
                                            <input type="text" id="compare-search2"
                                                class="st-input-cmp float-left js-bound" name="sSearch2" value=""
                                                autocomplete="off" placeholder="Search">
                                            <input type="hidden" class="st-input-cmp float-left js-bound"
                                                name="product_id2" id="product_id2" value="">
                                        </form>
                                        <div class="autocomplete2 autocomplete-search autocomplete-small"
                                            id="autocomplete-modal2" style="display: none;">
                                            <div class="product-results">
                                                <ul class="product-list2"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swap-phones">
                                        <h3 class="product-title2"></h3>
                                        <div class="compare-media-wrap float-left clearfix">
                                            <img class="product-image2" src="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comparison Table -->
                            <div class="comparison-table">
                                <table border="1" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                                    <tbody>
                                        <tr>
                                            <th>features</th>
                                            <th>Main Product</th>
                                            <th>Compare Product 2</th>
                                            <th>Compare Product 3</th>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px; font-weight: bolder; width: 20%;">Title</td>
                                            <td style="padding: 10px; text-align: center; width: 30%">
                                                {{ $product->title }}</td>
                                            <td class="product-title" style="padding: 10px; text-align: center;">
                                                {{ '-' }}</td>
                                            <td class="product-title2" style="padding: 10px; text-align: center;">{{ '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px; font-weight: bolder; width: 20%;">Brand</td>
                                            <td style="padding: 10px; text-align: center; width: 30%">
                                                {{ $product->brand->name }}</td>
                                            <td class="product-brand" style="padding: 10px; text-align: center;">
                                                {{ '-' }}</td>
                                            <td class="product-brand2" style="padding: 10px; text-align: center;">{{ '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px; font-weight: bolder; width: 20%;">Price</td>
                                            <td style="padding: 10px; text-align: center; width: 30%">
                                                &#8377;{{ $product->regular_price }}</td>
                                            <td class="product-regular-price" style="padding: 10px; text-align: center;">
                                                {{ '-' }}</td>
                                            <td class="product-regular-price2" style="padding: 10px; text-align: center;">{{ '-' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


        <script>
            window.__webpack_public_path__ =
                "https://cdn11.bigcommerce.com/s-24232/stencil/5fe2b680-bba0-0138-8fe1-0242ac11000f/e/fe0f7ff0-a22d-0137-2996-0242ac11001d/dist/";
        </script>
        <script type="text/javascript" src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/user/js/theme-bundle.main.js') }}"></script>

        <script>
            var myVar;

            function myFunction() {
                myVar = setTimeout(showPage, 100);
            }

            function showPage() {
                document.getElementById("lds-hourglass").style.display = "none";
                document.getElementById("loader2").style.display = "none";
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            window.stencilBootstrap("default",
                "{\"themeSettings\":{\"optimizedCheckout-formChecklist-color\":\"#333333\",\"homepage_new_products_column_count\":5,\"card--alternate-color--hover\":\"#ffffff\",\"optimizedCheckout-colorFocus\":\"#4496f6\",\"fontSize-root\":13,\"show_accept_amex\":true,\"optimizedCheckout-buttonPrimary-borderColorDisabled\":\"transparent\",\"homepage_top_products_count\":10,\"paymentbuttons-paypal-size\":\"responsive\",\"optimizedCheckout-buttonPrimary-backgroundColorActive\":\"#000000\",\"brandpage_products_per_page\":12,\"color-secondaryDarker\":\"#e8e8e8\",\"navUser-color\":\"#000000\",\"color-textBase--active\":\"#ffd200\",\"social_icon_placement_bottom\":\"bottom_none\",\"header-bottom-backgroundColor\":\"#1f4c94\",\"show_powered_by\":true,\"show_accept_amazonpay\":false,\"fontSize-h4\":20,\"checkRadio-borderColor\":\"#dfdfdf\",\"color-primaryDarker\":\"#2d2d2d\",\"optimizedCheckout-buttonPrimary-colorHover\":\"#ffffff\",\"brand_size\":\"190x250\",\"optimizedCheckout-logo-position\":\"left\",\"optimizedCheckout-discountBanner-backgroundColor\":\"#e5e5e5\",\"color-textLink--hover\":\"#ffd200\",\"pdp-sale-price-label\":\"\",\"optimizedCheckout-buttonSecondary-backgroundColorHover\":\"#f5f5f5\",\"optimizedCheckout-headingPrimary-font\":\"Google_Montserrat_400\",\"logo_size\":\"125x44\",\"footer-backgroundColor\":\"#2457aa\",\"navPages-color\":\"#ffffff\",\"productpage_reviews_count\":9,\"optimizedCheckout-step-borderColor\":\"#dddddd\",\"header-top-backgroundColor\":\"#2457aa\",\"optimizedCheckout-formField-backgroundColor\":\"#ffffff\",\"show_accept_paypal\":true,\"paymentbuttons-paypal-label\":\"checkout\",\"logo-font\":\"Google_Montserrat_300\",\"paymentbuttons-paypal-shape\":\"rect\",\"optimizedCheckout-discountBanner-textColor\":\"#333333\",\"optimizedCheckout-backgroundImage-size\":\"1000x400\",\"pdp-retail-price-label\":\"\",\"optimizedCheckout-buttonPrimary-font\":\"Google_Karla_400\",\"carousel-dot-color\":\"#000000\",\"button--disabled-backgroundColor\":\"#dadada\",\"blockquote-cite-font-color\":\"#a5a5a5\",\"sub-title-color\":\"#a5a5a5\",\"optimizedCheckout-formField-shadowColor\":\"#e5e5e5\",\"categorypage_products_per_page\":12,\"container-fill-base\":\"#ffffff\",\"paymentbuttons-paypal-layout\":\"vertical\",\"homepage_featured_products_column_count\":5,\"button--default-color\":\"#000000\",\"pace-progress-backgroundColor\":\"#a3a3a3\",\"color-textLink--active\":\"#ffd200\",\"optimizedCheckout-loadingToaster-backgroundColor\":\"#333333\",\"color-textHeading\":\"#000000\",\"show_accept_discover\":true,\"optimizedCheckout-formField-errorColor\":\"#d14343\",\"spinner-borderColor-dark\":\"#989898\",\"restrict_to_login\":false,\"input-font-color\":\"#454545\",\"select-bg-color\":\"#ffffff\",\"blog-title-color\":\"#2457aa\",\"show_accept_mastercard\":true,\"show_custom_fields_tabs\":false,\"color_text_product_sale_badges\":\"#000000\",\"optimizedCheckout-link-font\":\"Google_Karla_400\",\"homepage_show_carousel_arrows\":true,\"supported_payment_methods\":[\"card\",\"paypal\"],\"carousel-arrow-bgColor\":\"#ffffff\",\"lazyload_mode\":\"lazyload+lqip\",\"carousel-title-color\":\"#000000\",\"color_hover_product_sale_badges\":\"#ffd200\",\"show_accept_googlepay\":false,\"card--alternate-borderColor\":\"#ffffff\",\"homepage_new_products_count\":10,\"footer-top-textColor\":\"#ffd200\",\"button--disabled-color\":\"#ffffff\",\"color-primaryDark\":\"#454545\",\"color-grey\":\"#4c4c4c\",\"body-font\":\"Google_Poppins_400\",\"optimizedCheckout-step-textColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-borderColorActive\":\"transparent\",\"navPages-subMenu-backgroundColor\":\"#2457aa\",\"button--primary-backgroundColor\":\"#2457aa\",\"optimizedCheckout-formField-borderColor\":\"#cccccc\",\"checkRadio-color\":\"#4f4f4f\",\"show_product_dimensions\":false,\"optimizedCheckout-link-color\":\"#476bef\",\"card-figcaption-button-background\":\"#2457aa\",\"icon-color-hover\":\"#000000\",\"optimizedCheckout-headingSecondary-font\":\"Google_Montserrat_400\",\"headings-font\":\"Google_Poppins_400\",\"label-backgroundColor\":\"#bfbfbf\",\"service-title-hover-color\":\"#ffd200\",\"button--primary-backgroundColorHover\":\"#ffd200\",\"show_product_reviews\":true,\"button--default-borderColor\":\"#ffd200\",\"pdp-non-sale-price-label\":\"\",\"button--disabled-borderColor\":\"#dadada\",\"label-color\":\"#ffffff\",\"optimizedCheckout-headingSecondary-color\":\"#333333\",\"select-arrow-color\":\"#828282\",\"logo_fontSize\":28,\"alert-backgroundColor\":\"#ffffff\",\"optimizedCheckout-logo-size\":\"250x100\",\"default_image_brand\":\"/assets/img/BrandDefault.gif\",\"card-title-color\":\"#707070\",\"service-title-color\":\"#000000\",\"product_list_display_mode\":\"grid\",\"optimizedCheckout-link-hoverColor\":\"#002fe1\",\"fontSize-h5\":15,\"product_size\":\"700x659\",\"paymentbuttons-paypal-color\":\"gold\",\"homepage_show_carousel\":true,\"optimizedCheckout-body-backgroundColor\":\"#ffffff\",\"button--default-borderColorActive\":\"#2457aa\",\"paymentbuttons-paypal-tagline\":false,\"color-greyDarkest\":\"#000000\",\"color_badge_product_sale_badges\":\"#ffd200\",\"price_ranges\":true,\"container-border-global-color-dark\":\"#454545\",\"productpage_videos_count\":8,\"color-greyDark\":\"#666666\",\"optimizedCheckout-buttonSecondary-borderColorHover\":\"#999999\",\"optimizedCheckout-discountBanner-iconColor\":\"#333333\",\"carousel-arrow-bghoverColor\":\"#ffffff\",\"card-price-color\":\"#2457aa\",\"optimizedCheckout-loadingToaster-textColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorDisabled\":\"#ffffff\",\"optimizedCheckout-formField-placeholderColor\":\"#999999\",\"navUser-color-hover\":\"#ffd200\",\"icon-ratingFull\":\"#ffab00\",\"default_image_gift_certificate\":\"/assets/img/GiftCertificate.png\",\"optimizedCheckout-buttonSecondary-borderColor\":\"#cccccc\",\"service-subitle-color\":\"#979797\",\"color-textBase--hover\":\"#ffd200\",\"color-errorLight\":\"#ffdddd\",\"social_icon_placement_top\":false,\"blog_size\":\"800x800\",\"shop_by_price_visibility\":true,\"optimizedCheckout-buttonSecondary-colorActive\":\"#000000\",\"cms-link-hover-color\":\"#2457aa\",\"optimizedCheckout-orderSummary-backgroundColor\":\"#ffffff\",\"footer_font-family\":\"Google_Montserrat_400\",\"color-warningLight\":\"#fffdea\",\"show_product_weight\":true,\"button--default-colorActive\":\"#ffffff\",\"color-info\":\"#666666\",\"optimizedCheckout-formChecklist-backgroundColorSelected\":\"#f5f5f5\",\"show_product_quick_view\":true,\"button--default-borderColorHover\":\"#2457aa\",\"card--alternate-backgroundColor\":\"#ffd200\",\"hide_content_navigation\":false,\"pdp-price-label\":\"\",\"show_copyright_footer\":true,\"swatch_option_size\":\"22x22\",\"optimizedCheckout-orderSummary-borderColor\":\"#dddddd\",\"navPages-backgroundColor\":\"#ffffff\",\"optimizedCheckout-show-logo\":\"none\",\"carousel-description-color\":\"#000000\",\"optimizedCheckout-formChecklist-backgroundColor\":\"#ffffff\",\"fontSize-h2\":25,\"optimizedCheckout-step-backgroundColor\":\"#757575\",\"optimizedCheckout-headingPrimary-color\":\"#333333\",\"color-textBase\":\"#707070\",\"color-warning\":\"#d4cb49\",\"productgallery_size\":\"700x300\",\"bottom-footer-textColor\":\"#ebebeb\",\"alert-color\":\"#4f4f4f\",\"shop_by_brand_show_footer\":true,\"card-figcaption-button-color\":\"#ffffff\",\"searchpage_products_per_page\":12,\"color-textSecondary--active\":\"#ffd200\",\"optimizedCheckout-formField-inputControlColor\":\"#476bef\",\"optimizedCheckout-contentPrimary-color\":\"#333333\",\"optimizedCheckout-buttonSecondary-font\":\"Google_Karla_400\",\"storeName-color\":\"#4f4f4f\",\"optimizedCheckout-backgroundImage\":\"\",\"form-label-font-color\":\"#000000\",\"color-greyLightest\":\"#e8e8e8\",\"optimizedCheckout-header-backgroundColor\":\"#f7f7f7\",\"productpage_related_products_count\":10,\"optimizedCheckout-buttonSecondary-backgroundColorActive\":\"#e5e5e5\",\"color-textLink\":\"#000000\",\"color-greyLighter\":\"#dfdfdf\",\"color-secondaryDark\":\"#e8e8e8\",\"fontSize-h6\":13,\"paymentbuttons-paypal-fundingicons\":false,\"carousel-arrow-color\":\"#000000\",\"productpage_similar_by_views_count\":10,\"show-admin-bar\":true,\"pdp-custom-fields-tab-label\":\"Additional Information\",\"loadingOverlay-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-color\":\"#ffffff\",\"input-bg-color\":\"#ffffff\",\"navPages-subMenu-separatorColor\":\"#2b69cc\",\"navPages-color-hover\":\"#ffd200\",\"color-infoLight\":\"#dfdfdf\",\"product_sale_badges\":\"topleft\",\"default_image_product\":\"/assets/img/ProductDefault.gif\",\"navUser-dropdown-borderColor\":\"#ededed\",\"optimizedCheckout-buttonPrimary-colorActive\":\"#ffffff\",\"color-greyMedium\":\"#989898\",\"optimizedCheckout-formChecklist-borderColor\":\"#cccccc\",\"feature-background-color\":\"#f7f7f7\",\"fontSize-h1\":20,\"homepage_featured_products_count\":10,\"color-greyLight\":\"#a5a5a5\",\"optimizedCheckout-logo\":\"\",\"icon-ratingEmpty\":\"#d3d3d3\",\"show_product_details_tabs\":true,\"icon-color\":\"#ffffff\",\"button--default-backgroundColorHover\":\"#2457aa\",\"overlay-backgroundColor\":\"#2d2d2d\",\"input-border-color-active\":\"#989898\",\"hide_contact_us_page_heading\":false,\"container-fill-dark\":\"#f7f7f7\",\"optimizedCheckout-buttonPrimary-backgroundColorDisabled\":\"#cccccc\",\"button--primary-color\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-borderColorHover\":\"transparent\",\"color-successLight\":\"#d5ffd8\",\"button--default-backgroundColor\":\"#ffd200\",\"color-greyDarker\":\"#454545\",\"show_product_quantity_box\":true,\"color-success\":\"#69d66f\",\"optimizedCheckout-header-borderColor\":\"#dddddd\",\"zoom_size\":\"1280x1280\",\"color-white\":\"#ffffff\",\"optimizedCheckout-buttonSecondary-backgroundColor\":\"#ffffff\",\"productview_thumb_size\":\"100x100\",\"fontSize-h3\":22,\"spinner-borderColor-light\":\"#ffffff\",\"geotrust_ssl_common_name\":\"\",\"carousel-bgColor\":\"#ffffff\",\"carousel-dot-color-active\":\"#666666\",\"input-border-color\":\"#dfdfdf\",\"optimizedCheckout-buttonPrimary-backgroundColor\":\"#333333\",\"color-secondary\":\"#ffffff\",\"card-figcaption-button-color-hover\":\"#000000\",\"button--primary-backgroundColorActive\":\"#ffd200\",\"color-textSecondary--hover\":\"#ffd200\",\"color-whitesBase\":\"#f8f8f8\",\"body-bg\":\"#ffffff\",\"dropdown--quickSearch-backgroundColor\":\"#ffffff\",\"optimizedCheckout-contentSecondary-font\":\"Google_Karla_400\",\"navUser-dropdown-backgroundColor\":\"#ffffff\",\"color-primary\":\"#ededed\",\"optimizedCheckout-contentPrimary-font\":\"Google_Karla_400\",\"card-figcaption-button-backgroundHover\":\"#ffd200\",\"supported_card_type_icons\":[\"american_express\",\"diners\",\"discover\",\"mastercard\",\"visa\"],\"navigation_design\":\"simple\",\"optimizedCheckout-formField-textColor\":\"#333333\",\"color-black\":\"#000000\",\"homepage_top_products_column_count\":4,\"hide_page_heading\":false,\"optimizedCheckout-buttonSecondary-colorHover\":\"#333333\",\"button--primary-colorActive\":\"#000000\",\"homepage_stretch_carousel_images\":false,\"optimizedCheckout-contentSecondary-color\":\"#757575\",\"card-title-color-hover\":\"#000000\",\"applePay-button\":\"black\",\"thumb_size\":\"100x100\",\"hide_breadcrumbs\":false,\"show_accept_klarna\":false,\"optimizedCheckout-buttonPrimary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonSecondary-borderColorActive\":\"#757575\",\"hide_blog_page_heading\":false,\"optimizedCheckout-header-textColor\":\"#333333\",\"hide_category_page_heading\":false,\"optimizedCheckout-show-backgroundImage\":false,\"color-primaryLight\":\"#a5a5a5\",\"navUser-indicator-backgroundColor\":\"#ffd200\",\"banner-text-color\":\"#ffffff\",\"show_accept_visa\":true,\"logo-position\":\"left\",\"show_product_reviews_tabs\":false,\"carousel-dot-bgColor\":\"#d3d3d3\",\"optimizedCheckout-form-textColor\":\"#666666\",\"optimizedCheckout-buttonSecondary-color\":\"#333333\",\"geotrust_ssl_seal_size\":\"M\",\"button--icon-svg-color\":\"#ffffff\",\"alert-color-alt\":\"#ffffff\",\"footer-textColor\":\"#ebebeb\",\"button--default-colorHover\":\"#ffffff\",\"checkRadio-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-backgroundColorHover\":\"#666666\",\"input-disabled-bg\":\"#ffffff\",\"carousel-arrow-colorHover\":\"#ffd200\",\"dropdown--wishList-backgroundColor\":\"#2457aa\",\"container-border-global-color-base\":\"#ededed\",\"productthumb_size\":\"100x100\",\"button--primary-colorHover\":\"#000000\",\"color-error\":\"#ff7d7d\",\"color-textSecondary\":\"#000000\",\"gallery_size\":\"300x300\",\"homepage_blog_posts_count\":6,\"cms-link-color\":\"#989898\"},\"genericError\":\"Oops! Something went wrong.\",\"maintenanceModeSettings\":[],\"adminBarLanguage\":\"{\\\"locale\\\":\\\"en\\\",\\\"locales\\\":{\\\"admin.maintenance_header\\\":\\\"en\\\",\\\"admin.maintenance_tooltip\\\":\\\"en\\\",\\\"admin.maintenance_showstore_link\\\":\\\"en\\\",\\\"admin.prelaunch_header\\\":\\\"en\\\",\\\"admin.page_builder_link\\\":\\\"en\\\"},\\\"translations\\\":{\\\"admin.maintenance_header\\\":\\\"Your store is down for maintenance.\\\",\\\"admin.maintenance_tooltip\\\":\\\"Only administrators can view the store at the moment. Visit your control panel settings page to disable maintenance mode.\\\",\\\"admin.maintenance_showstore_link\\\":\\\"Click here to see what your visitors will see.\\\",\\\"admin.prelaunch_header\\\":\\\"Your storefront is private. Share your site with preview code:\\\",\\\"admin.page_builder_link\\\":\\\"Design this page in Page Builder\\\"}}\",\"urls\":{\"home\":\"index.html\",\"account\":{\"index\":\"/account.php\",\"orders\":{\"all\":\"logind1fa.html?action=order_status\",\"completed\":\"login91d7.html?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"update_action\":\"login83b1.html?action=update_account\",\"returns\":\"logine921.html?action=view_returns\",\"addresses\":\"login479d.html?action=address_book\",\"inbox\":\"login5df3.html?action=inbox\",\"send_message\":\"login1273.html?action=send_message\",\"add_address\":\"logindda8.html?action=add_shipping_address\",\"wishlists\":{\"all\":\"/wishlist.php\",\"add\":\"login5946.html?action=addwishlist\",\"edit\":\"login1c39.html?action=editwishlist\",\"delete\":\"/wishlist.php?action=deletewishlist\"},\"details\":\"login8e0b.html?action=account_details\",\"recent_items\":\"/account.php?action=recent_items\"},\"brands\":\"brands/index.html\",\"gift_certificate\":{\"purchase\":\"/giftcertificates.php\",\"redeem\":\"giftcertificatese8f7.html?action=redeem\",\"balance\":\"/giftcertificates.php?action=balance\"},\"auth\":{\"login\":\"/login.php\",\"check_login\":\"loginb320.html?action=check_login\",\"create_account\":\"logind85d.html?action=create_account\",\"save_new_account\":\"login5485.html?action=save_new_account\",\"forgot_password\":\"login8311.html?action=reset_password\",\"send_password_email\":\"login4104.html?action=send_password_email\",\"save_new_password\":\"logina61b.html?action=save_new_password\",\"logout\":\"/login.php?action=logout\"},\"product\":{\"post_review\":\"/postreview.php\"},\"cart\":\"/cart.php\",\"checkout\":{\"single_address\":\"/checkout\",\"multiple_address\":\"/checkout.php?action=multiple\"},\"rss\":{\"products\":[]},\"contact_us_submit\":\"pages187d.html?action=sendContactForm\",\"search\":\"/search.php\",\"compare\":\"/compare\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}},\"secureBaseUrl\":\"index.html\",\"cartId\":null,\"channelId\":1,\"template\":\"pages/home\"}"
            ).load();
        </script>

        <script type="text/javascript"
            src="{{ asset('assets/user/js/csrf-protection-header-5eeddd5de78d98d146ef4fd71b2aedce4161903e.js') }}"></script>
        <script>
            $(document).ready(function() {
                function debounce(func, wait) {
                    let timeout;
                    return function executedFunction(...args) {
                        const later = () => {
                            clearTimeout(timeout);
                            func(...args);
                        };
                        clearTimeout(timeout);
                        timeout = setTimeout(later, wait);
                    };
                }

                $('#compare-search1').on('input', function() {
                    let query = $(this).val();

                    if (query.length < 2) {
                        $('#autocomplete-modal').hide();
                        return;
                    }

                    $.ajax({
                        url: "{{ route('product-search') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(res) {
                            $('.product-list').empty();

                            if (res.status === 'not found') {
                                $('.product-list').append('<li>Product Not Found</li>');
                            } else {
                                res.products.forEach(function(product) {
                                    $('.product-list').append(`
                                        <li class="product-item" 
                                        data-id="${product.id}" 
                                        data-title="${product.title}" 
                                        data-image="${product.path}" 
                                        data-brand="${product.brand_name || 'N/A'}"
                                        data-description="${product.description}" 
                                        data-regular-price="&#8377;${product.regular_price}" 
                                        data-sale-price="${product.sale_price}">
                                      <img src="${product.path}" class="product-thumb" alt="${product.title}" style="width: 50px; height: 50px;">
                                        <span class="product-title">${product.title}</span>
                                    </li>
                                    `);
                                });
                            }

                            $('#autocomplete-modal').show();
                        },
                        error: function(xhr, status, error) {
                            alert('ajax error :', xhr, status, error);
                        }
                    });
                });

                $('#compare-search2').on('input', function() {
                    let query = $(this).val();
                    if (query.length < 2) {
                        $('#autocomplete-modal2').hide()
                        return;
                    }

                
                    $.ajax({
                        url: "{{ route('product-search') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(res){
                           $('.product-list2').empty();
                           if(res.status === 'not found')
                           {
                            console.log(res.status);
                            $('.product-list2').append('<li>Product Not Found</li>');
                           }else{
                             res.products.forEach(function(product) {
                                    $('.product-list2').append(`
                                        <li class="product-item2" 
                                        data-id="${product.id}" 
                                        data-title="${product.title}" 
                                        data-image="${product.path}" 
                                        data-brand="${product.brand_name || 'N/A'}"
                                        data-description="${product.description}" 
                                        data-regular-price="&#8377;${product.regular_price}" 
                                        data-sale-price="${product.sale_price}">
                                        <img src="${product.path}" class="product-thumb" alt="${product.title}" style="width: 50px; height: 50px;">
                                        <span class="product-title">${product.title}</span>
                                    </li>
                                    `);
                                });
                           }

                           $('#autocomplete-modal2').show();
                        },
                        error: function(xhr, status, error){
                            console.log('second product:', error);
                        }
                    });
                });

                $(document).on('click', '.product-item', function() {
                    let selectedId = $(this).data('id');
                    let selectedTitle = $(this).data('title');
                    let selectedImage = $(this).data('image');
                    let selectedBrand = $(this).data('brand');
                    let selectedDescription = $(this).data('description');
                    let selectedRegularPrice = $(this).data('regular-price');
                    let selectedSalePrice = $(this).data('sale-price');

                    $('#compare-search1').val(selectedTitle);
                    $('#product_id1').val(selectedId);

                    $('.product-title').text(selectedTitle);
                    $('.product-image').attr('src', selectedImage).show();
                    $('.product-brand').text(selectedBrand);
                    $('.product-description').text(selectedDescription || 'No description available');
                    $('.product-regular-price').text((selectedRegularPrice || 'N/A'));
                    $('.product-sale-price').text('Sale Price: $' + (selectedSalePrice || 'N/A'));

                    $('#autocomplete-modal').hide();
                });

               $(document).on('click', '.product-item2', function(){
                let selectedId = $(this).data('id');
                let selectedTitle = $(this).data('title');
                let selectedImage = $(this).data('image');
                let selectedBrand = $(this).data('brand');
                let selectedRegularPrice = $(this).data('regular-price')
                
                $('#compare-search2').val(selectedTitle);
                $('#product_id2').val(selectedId);

                $('.product-title2').text(selectedTitle);
                $('.product-image2').attr('src', selectedImage). show();
                $('.product-brand2').text(selectedBrand);
                $('.product-regular-price2').text(selectedRegularPrice);

                $('#autocomplete-modal2').hide();
               });

                // suggestion list close on click Outside 
                $(document).mouseup(function(e) {
                    var container = $("#autocomplete-modal");
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.hide();
                    }
                });

                $(document).mouseup(function(e) {
                    var container = $("#autocomplete-modal2");
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.hide();
                    }
                });
            });
        </script>


    </body>
@endsection
