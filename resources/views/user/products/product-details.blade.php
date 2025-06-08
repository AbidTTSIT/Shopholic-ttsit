@extends('user.layouts.master')
@section('content')

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
                                <a href="#" class="breadcrumb-label" itemprop="item"><span
                                        itemprop="name">Home</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="breadcrumb" itemprop="itemListElement" itemscope
                                itemtype="http://schema.org/ListItem">
                                <a href="../shop-lcd/index.html" class="breadcrumb-label" itemprop="item"><span
                                        itemprop="name">Shop</span></a>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ul>
                    </div>

                    <div class="productView">
                        <section class="productView-details">
                            <div class="productView-product">
                                <h2 class="productView-brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                                    <a href="#" itemprop="url"><span
                                            itemprop="name">{{ $products->brand->name }}</span></a>
                                </h2>
                                <h1 class="productView-title" itemprop="name">
                                    {{ $products->title }}
                                </h1>
                                <div class="productView-rating" itemprop="aggregateRating" itemscope
                                    itemtype="http://schema.org/AggregateRating">
                                    <meta itemprop="ratingValue" content="3" />
                                    <meta itemprop="ratingCount" content="1" />
                                    <meta itemprop="reviewCount" content="1" />
                                    <span class="icon icon--ratingFull">
                                        <svg>
                                            <use xlink:href="#icon-star" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--ratingFull">
                                        <svg>
                                            <use xlink:href="#icon-star" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--ratingFull">
                                        <svg>
                                            <use xlink:href="#icon-star" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--ratingEmpty">
                                        <svg>
                                            <use xlink:href="#icon-star" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--ratingEmpty">
                                        <svg>
                                            <use xlink:href="#icon-star" />
                                        </svg>
                                    </span>
                                    <span class="productView-reviewLink">
                                        <a href="index.html#product-reviews"> (1 review) </a>
                                    </span>
                                    <span class="productView-reviewLink">
                                        <a href="index.html" data-reveal-id="modal-review-form">
                                            Write a Review
                                        </a>
                                    </span>
                                    <div id="modal-review-form" class="modal" data-reveal>
                                        <div class="modal-header">
                                            <h2 class="modal-header-title">Write a Review</h2>
                                            <a href="#" class="modal-close" aria-label="Close" role="button">
                                                <span aria-hidden="true">&#215;</span>
                                            </a>
                                        </div>
                                        <div class="modal-body">sdsssdds
                                            <div class="writeReview-productDetails">
                                                <div class="writeReview-productImage-container">
                                                    <img src="{{ asset('assets/img/product/' . $products->images[0]->path) }}"
                                                        alt="Daisy iLife" class="" />
                                                </div>
                                                <h6 class="product-brand">Apple</h6>
                                            </div>
                                            <form class="form writeReview-form"
                                                action="https://tmdemo10.mybigcommerce.com/postreview.php" method="post">
                                                <fieldset class="form-fieldset">
                                                    <div class="form-field">
                                                        <label class="form-label" for="rating-rate">Rating
                                                            <small>Required</small>
                                                        </label>
                                                        <!-- Stars -->
                                                        <!-- TODO: Review Stars need to be componentised, both for display and input -->
                                                        <select id="rating-rate" class="form-select" name="revrating">
                                                            <option value="">Select Rating</option>
                                                            <option value="1">1 star (worst)</option>
                                                            <option value="2">2 stars</option>
                                                            <option value="3">3 stars (average)</option>
                                                            <option value="4">4 stars</option>
                                                            <option value="5">5 stars (best)</option>
                                                        </select>
                                                    </div>

                                                    <!-- Name -->
                                                    <div class="form-field" id="revfromname" data-validation="">
                                                        <label class="form-label" for="revfromname_input">Name
                                                        </label>
                                                        <input type="text" id="revfromname_input" data-label="Name"
                                                            name="revfromname" class="form-input" aria-required="" />
                                                    </div>

                                                    <!-- Review Subject -->
                                                    <div class="form-field" id="revtitle" data-validation="">
                                                        <label class="form-label" for="revtitle_input">Review Subject
                                                            <small>Required</small>
                                                        </label>
                                                        <input type="text" id="revtitle_input"
                                                            data-label="Review Subject" name="revtitle"
                                                            class="form-input" aria-required="true" />
                                                    </div>

                                                    <!-- Comments -->
                                                    <div class="form-field" id="revtext" data-validation="">
                                                        <label class="form-label" for="revtext_input">Comments
                                                            <small>Required</small>
                                                        </label>
                                                        <textarea name="revtext" id="revtext_input" data-label="Comments" rows="" aria-required="true"
                                                            class="form-input"></textarea>
                                                    </div>

                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LcjX0sbAAAAACp92-MNpx66FT4pbIWh-FTDmkkz"></div>
                                                    <br />

                                                    <div class="form-field">
                                                        <input type="submit" class="button button--primary"
                                                            value="Submit Review" />
                                                    </div>
                                                    <input type="hidden" name="product_id" value="13" />
                                                    <input type="hidden" name="action" value="post_review" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <dl class="productView-info">
                                    <dt class="productView-info-name sku-label">SKU:</dt>
                                    <dd class="productView-info-value" data-product-sku itemprop="sku">
                                        ILIFE09
                                    </dd>
                                    <dt class="productView-info-name upc-label" style="display: none">
                                        UPC:
                                    </dt>
                                    <dd class="productView-info-value" data-product-upc></dd>

                                    <dt class="productView-info-name">Weight:</dt>
                                    <dd class="productView-info-value" data-product-weight>
                                        4.00 LBS
                                    </dd>
                                    <dt class="productView-info-name">Shipping:</dt>
                                    <dd class="productView-info-value">Calculated at Checkout</dd>

                                    <div class="productView-info-bulkPricing"></div>
                                </dl>
                            </div>
                            <div class="productView-price">
                                <div class="price-section price-section--withTax" itemprop="offers" itemscope
                                    itemtype="http://schema.org/Offer">
                                    <span class="price-now-label"> </span>
                                    <span data-product-price-with-tax
                                        class="price price--withTax">&#8377;{{ $products->regular_price }}</span>
                                    <meta itemprop="availability" itemtype="http://schema.org/ItemAvailability"
                                        content="http://schema.org/InStock" />
                                    <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition"
                                        content="http://schema.org/Condition" />
                                    <meta itemprop="priceCurrency" content="USD" />
                                    <meta itemprop="url" content="index.html" />
                                    <div itemprop="priceSpecification" itemscope
                                        itemtype="http://schema.org/PriceSpecification">
                                        <meta itemprop="price" content="69" />
                                        <meta itemprop="priceCurrency" content="USD" />
                                        <meta itemprop="valueAddedTaxIncluded" content="true" />
                                    </div>
                                </div>
                                <div class="price-section price-section--withTax non-sale-price--withTax">
                                    <span data-product-non-sale-price-with-tax class="price price--non-sale">
                                        &#8377;{{ $products->sale_price }}
                                    </span>
                                </div>
                                <div class="price-section price-section--saving price" style="display: none">
                                    <span class="price">(You save</span>
                                    <span data-product-price-saved class="price price--saving">
                                    </span>
                                    <span class="price">)</span>
                                </div>
                            </div>
                            <div data-content-region="product_below_price"></div>
                        </section>
                        <section class="info3col-data">
                            <div class="offer-slider">
                                <ul id="slider">
                                    <li>
                                        <a href="#"><img
                                                src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/right-banner-1.jpg') }}" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img
                                                src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/right-banner-2.jpg') }}" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sale-cms">
                                <div class="sale-cms-text">
                                    <div class="text1">sale</div>
                                    <div class="text2">Save up to</div>
                                    <div class="text3">35% off</div>
                                </div>
                            </div>
                        </section>
                        <section class="productView-images" data-image-gallery>
                            <figure class="productView-image" data-image-gallery-main
                                data-zoom-image="../../cdn11.bigcommerce.com/s-24232/images/stencil/1280x1280/products/13/587/4__586444847.jpg?c=2">
                                <div class="productView-img-container">
                                    <a href="#" target="_blank" itemprop="image">
                                        <img id="main-product-image"
                                            src="{{ asset('assets/img/product/' . $products->images[0]->path) }}"
                                            alt="Main Product" class="lazyload productView-image--default"
                                            data-main-image />
                                    </a>
                                </div>
                            </figure>
                            <ul class="productView-thumbnails"
                                data-slick='{
                                    "infinite": false,
                                    "dots": false,
                                    "mobileFirst": true,
                                    "slidesToShow": 2,
                                    "slidesToScroll": 1,
                                        "responsive": [
                                            {
                                                "breakpoint": 1200,
                                                "settings": {
                                                    "slidesToScroll": 1,
                                                    "slidesToShow": 4
                                                }
                                            },
                                            {
                                                "breakpoint": 800,
                                                "settings": {
                                                    "slidesToScroll": 1,
                                                    "slidesToShow": 3
                                                }
                                            },
                                            {
                                                "breakpoint": 500,
                                                "settings": {
                                                    "slidesToScroll": 1,
                                                    "slidesToShow": 4
                                                }
                                            }
                                            ]
                                }'>
                                @foreach ($products->images as $product)
                                    <li class="productView-thumbnail">
                                        <a href="#" class="productView-thumbnail-link"
                                            data-full="{{ asset('assets/img/product/' . $product->path) }}">
                                            <img src="{{ asset('assets/img/product/' . $product->path) }}" alt="Daisy"
                                                class="lazyload" style="height: 65px"/>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </section>

                        <section class="productView-details">
                            <div class="productView-options">
                                <form class="form" method="post" action="https://tmdemo10.mybigcommerce.com/cart.php"
                                    enctype="multipart/form-data" data-cart-item-add>
                                    <input type="hidden" name="action" value="add" />
                                    <input type="hidden" name="product_id" value="13" />
                                    <div data-product-option-change style="display: none"></div>
                                    <div class="form-field form-field--stock u-hiddenVisually">
                                        <label class="form-label form-label--alternate">
                                            Current Stock:
                                            <span data-product-stock></span>
                                        </label>
                                    </div>
                                    <div class="form-field form-field--increments">
                                        <label class="form-label form-label--alternate" for="qty[]">Quantity:</label>
                                        <div class="form-increment" data-quantity-change>
                                            <button class="button button--icon" data-action="dec">
                                                <span class="is-srOnly">Decrease Quantity:</span>
                                                <i class="icon" aria-hidden="true">
                                                    <svg>
                                                        <use xlink:href="#icon-keyboard-arrow-down" />
                                                    </svg>
                                                </i>
                                            </button>
                                            <input class="form-input form-input--incrementTotal" id="qty[]"
                                                name="qty[]" type="tel" value="1" data-quantity-min="0"
                                                data-quantity-max="0" min="1" pattern="[0-9]*"
                                                aria-live="polite" />
                                            <button class="button button--icon" data-action="inc">
                                                <span class="is-srOnly">Increase Quantity:</span>
                                                <i class="icon" aria-hidden="true">
                                                    <svg>
                                                        <use xlink:href="#icon-keyboard-arrow-up" />
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="alertBox productAttributes-message" style="display: none">
                                        <div class="alertBox-column alertBox-icon">
                                            <icon glyph="ic-success" class="icon" aria-hidden="true"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z">
                                                    </path>
                                                </svg></icon>
                                        </div>
                                        <p class="alertBox-column alertBox-message"></p>
                                    </div>
                                    <div class="form-action">
                                        <a href="{{ route('buy.now', $products->id) }}" target="_blank"
                                            class="button">Buy
                                            Now</a>
                                    </div>
                                </form>
                                <form class="form form-wishlist form-action">
                                    <a href="{{ route('compare.id', $products->id) }}" aria-expanded="false"
                                        class="button dropdown-menu-button">
                                        <span>Compare</span>
                                    </a>
                                </form>
                            </div>
                            <div class="addthis_toolbox addthis_32x32_style" addthis:url="" addthis:title="">
                                <ul class="socialLinks">
                                    <li class="socialLinks-item socialLinks-item--facebook">
                                        <a class="addthis_button_facebook icon icon--facebook">
                                            <svg>
                                                <use xlink:href="#icon-facebook" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socialLinks-item socialLinks-item--twitter">
                                        <a class="addthis_button_twitter icon icon--twitter">
                                            <svg>
                                                <use xlink:href="#icon-twitter" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socialLinks-item socialLinks-item--linkedin">
                                        <a class="addthis_button_linkedin icon icon--linkedin">
                                            <svg>
                                                <use xlink:href="#icon-linkedin" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <script type="text/javascript" defer src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e94ed470ee51e32">
                                </script>
                                <script>
                                    window.addEventListener("DOMContentLoaded", function() {
                                        if (typeof addthis === "object") {
                                            addthis.toolbox(".addthis_toolbox");
                                        }
                                    });
                                </script>
                            </div>
                        </section>

                        <article class="productView-description" itemprop="description">
                            <ul class="tabs" data-tab>
                                <li class="tab-desc tab is-active">
                                    <a class="tab-title" href="#tab-description">Description</a>
                                </li>

                                <li class="tab-review tab">
                                    <a class="tab-title" id="product-reviews" href="#tab-productReviews">Reviews</a>
                                </li>
                            </ul>

                            <div class="tabs-contents">
                                <div class="desc-tab tab-content is-active" id="tab-description">
                                    <p>{{ strip_tags($products->description) }}</p>
                                    <!-- snippet location product_description -->
                                </div>

                                <div class="review-tab tab-content" id="tab-productReviews">
                                    <section class="toggle productReviews" id="product-reviews" data-product-reviews>
                                        <h5 class="toggle-title">1 Review</h5>
                                        <div class="toggle-content is-open" id="productReviews-content"
                                            aria-hidden="false">
                                            <ul class="productReviews-list" id="productReviews-list">
                                                <li class="productReview">
                                                    <article itemprop="review" itemscope
                                                        itemtype="http://schema.org/Review">
                                                        <header>
                                                            <span class="productReview-rating rating--small"
                                                                itemprop="reviewRating" itemscope
                                                                itemtype="http://schema.org/Rating">
                                                                <span class="icon icon--ratingFull">
                                                                    <svg>
                                                                        <use xlink:href="#icon-star" />
                                                                    </svg>
                                                                </span>
                                                                <span class="icon icon--ratingFull">
                                                                    <svg>
                                                                        <use xlink:href="#icon-star" />
                                                                    </svg>
                                                                </span>
                                                                <span class="icon icon--ratingFull">
                                                                    <svg>
                                                                        <use xlink:href="#icon-star" />
                                                                    </svg>
                                                                </span>
                                                                <span class="icon icon--ratingEmpty">
                                                                    <svg>
                                                                        <use xlink:href="#icon-star" />
                                                                    </svg>
                                                                </span>
                                                                <span class="icon icon--ratingEmpty">
                                                                    <svg>
                                                                        <use xlink:href="#icon-star" />
                                                                    </svg>
                                                                </span>
                                                                <span class="productReview-ratingNumber"
                                                                    itemprop="ratingValue">3</span>
                                                            </span>
                                                            <h5 itemprop="name" class="productReview-title">
                                                                vbgvbghvbgvgvgvgvg
                                                            </h5>
                                                            <meta itemprop="author" content="shailesh Sabhadiya" />
                                                            <p class="productReview-author">
                                                                Posted by shailesh Sabhadiya on 11th April 2019
                                                            </p>
                                                        </header>
                                                        <p itemprop="reviewBody" class="productReview-body">
                                                            gvgvgvgvgvgvgvgcdvg
                                                        </p>
                                                    </article>
                                                </li>
                                            </ul>
                                            <div class="pagination">
                                                <ul class="pagination-list"></ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div id="previewModal" class="modal modal--large" data-reveal>
                        <a href="#" class="modal-close" aria-label="Close" role="button">
                            <span aria-hidden="true">&#215;</span>
                        </a>
                        <div class="modal-content"></div>
                        <div class="loadingOverlay"></div>
                    </div>
                    <div data-content-region="product_below_content"></div>

                    <ul class="tabs related" data-tab role="tablist">
                        <li class="tab is-active" role="presentational">
                            <a class="tab-title" href="#tab-related" role="tab" tabindex="0" aria-selected="true"
                                controls="tab-related">Related Products</a>
                        </li>
                    </ul>

                    <div class="tabs-contents">
                        <div role="tabpanel" aria-hidden="false" class="tab-content has-jsContent is-active"
                            id="tab-related">
                            <section class="productCarousel" data-list-name=""
                                data-slick='{
                                    "dots": true,
                                    "infinite": false,
                                    "mobileFirst": true,
                                    "slidesToShow": 2,
                                    "slidesToScroll": 1,
                                    "responsive": [
                                        {
                                            "breakpoint": 1260,
                                            "settings": {
                                                "slidesToScroll": 1,
                                                "slidesToShow": 5
                                            }
                                        },
                                    {
                                            "breakpoint": 950,
                                            "settings": {
                                                "slidesToScroll": 1,
                                                "slidesToShow": 4
                                            }
                                        },
                                        {
                                            "breakpoint": 800,
                                            "settings": {
                                                "slidesToScroll": 1,
                                                "slidesToShow": 3
                                            }
                                        },
                                        {
                                            "breakpoint": 550,
                                            "settings": {
                                                "slidesToScroll": 1,
                                                "slidesToShow": 3
                                            }
                                        }
                                    ]
                                }'>
                                <div class="productCarousel-slide">
                                    <article class="card">
                                        <figure class="card-figure">
                                            <a href="../apple-mighty-mouse-wrap-bodycon-dress/index.html">
                                                <div class="card-img-container">
                                                    <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/14/580/3__050704847.jpg?c=2') }}"
                                                        alt="Apple Mighty Mouse Wrap Bodycon Dress"
                                                        title="Apple Mighty Mouse Wrap Bodycon Dress" data-sizes="auto"
                                                        srcset="
                            https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/14/580/3__05070.1554451949.jpg?c=2
                          "
                                                        data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/14/580/3__05070.1554451949.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/14/580/3__05070.1554451949.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/14/580/3__05070.1554451949.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/14/580/3__05070.1554451949.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/14/580/3__05070.1554451949.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/14/580/3__05070.1554451949.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/14/580/3__05070.1554451949.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/14/580/3__05070.1554451949.jpg?c=2 2560w"
                                                        class="lazyload card-image" />
                                                </div>
                                            </a>
                                        </figure>

                                        <div class="card-body">
                                            <p class="card-text" data-test-info-type="productRating">
                                                <span class="rating--small">
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </p>
                                            <h4 class="card-title">
                                                <a href="../apple-mighty-mouse-wrap-bodycon-dress/index.html">Apple Mighty
                                                    Mouse Wrap Bodycon Dress</a>
                                            </h4>

                                            <div class="card-text price-container" data-test-info-type="price">
                                                <div class="price-section price-section--withTax">
                                                    <span class="price-now-label" style="display: none">
                                                    </span>
                                                    <span data-product-price-with-tax
                                                        class="price price--withTax">&#8377;69.00</span>
                                                </div>
                                                <div class="price-section price-section--withTax non-sale-price--withTax"
                                                    style="display: none">
                                                    <span data-product-non-sale-price-with-tax
                                                        class="price price--non-sale">
                                                    </span>
                                                </div>
                                            </div>

                                            <figcaption class="card-figcaption">
                                                <div class="card-figcaption-body">
                                                    <a href="../apple-mighty-mouse-wrap-bodycon-dress/index.html"
                                                        data-event-type="product-click"
                                                        class="button button--small card-figcaption-button add-to-cart"
                                                        data-product-id="14">Choose Options</a>

                                                    <a href="#" title="Quick view"
                                                        class="button button--small card-figcaption-button quickview"
                                                        data-product-id="14">Quick view</a>

                                                    <div class="form-action wishlist-button">
                                                        <input type="hidden" name="variation_id" value="" />
                                                        <a href="../login0260.html?action=add&amp;product_id=14"
                                                            id="form-action-addToWishlist"
                                                            class="button button--small card-figcaption-button tm-wishlist"
                                                            title="Add to Wish List">Add to Wish List
                                                        </a>
                                                    </div>

                                                    <label class="button button--small card-figcaption-button"
                                                        for="compare-14" title="Compare">
                                                        Compare<input type="checkbox" name="products[]" value="14"
                                                            id="compare-14" data-compare-id="14" />
                                                    </label>
                                                </div>
                                            </figcaption>
                                        </div>
                                    </article>
                                </div>
                                <div class="productCarousel-slide">
                                    <article class="card">
                                        <figure class="card-figure">
                                            <a href="#">
                                                <div class="card-img-container">
                                                    <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/15/578/6__589114847.jpg?c=2') }}"
                                                        alt="Apple Wireless Mighty Mouse Caprese Satchel"
                                                        title="Apple Wireless Mighty Mouse Caprese Satchel"
                                                        data-sizes="auto"
                                                        srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/15/578/6__589114847.jpg?c=2') }}
                          "
                                                        data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/15/578/6__58911.1554451753.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/15/578/6__58911.1554451753.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/15/578/6__58911.1554451753.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/15/578/6__58911.1554451753.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/15/578/6__58911.1554451753.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/15/578/6__58911.1554451753.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/15/578/6__58911.1554451753.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/15/578/6__58911.1554451753.jpg?c=2 2560w"
                                                        class="lazyload card-image" />
                                                </div>
                                            </a>
                                        </figure>

                                        <div class="card-body">
                                            <p class="card-text" data-test-info-type="productRating">
                                                <span class="rating--small">
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </p>
                                            <h4 class="card-title">
                                                <a href="../apple-wireless-mighty-mouse-caprese-satchel/index.html">Apple
                                                    Wireless Mighty Mouse Caprese Satchel</a>
                                            </h4>

                                            <div class="card-text price-container" data-test-info-type="price">
                                                <div class="price-section price-section--withTax">
                                                    <span class="price-now-label" style="display: none">
                                                    </span>
                                                    <span data-product-price-with-tax
                                                        class="price price--withTax">&#8377;99.00</span>
                                                </div>
                                                <div class="price-section price-section--withTax non-sale-price--withTax"
                                                    style="display: none">
                                                    <span data-product-non-sale-price-with-tax
                                                        class="price price--non-sale">
                                                    </span>
                                                </div>
                                            </div>

                                            <figcaption class="card-figcaption">
                                                <div class="card-figcaption-body">
                                                    <a href="../apple-wireless-mighty-mouse-caprese-satchel/index.html"
                                                        data-event-type="product-click"
                                                        class="button button--small card-figcaption-button add-to-cart"
                                                        data-product-id="15">Choose Options</a>

                                                    <a href="#" title="Quick view"
                                                        class="button button--small card-figcaption-button quickview"
                                                        data-product-id="15">Quick view</a>

                                                    <div class="form-action wishlist-button">
                                                        <input type="hidden" name="variation_id" value="" />
                                                        <a href="../loginb92e.html?action=add&amp;product_id=15"
                                                            id="form-action-addToWishlist"
                                                            class="button button--small card-figcaption-button tm-wishlist"
                                                            title="Add to Wish List">Add to Wish List
                                                        </a>
                                                    </div>

                                                    <label class="button button--small card-figcaption-button"
                                                        for="compare-15" title="Compare">
                                                        Compare<input type="checkbox" name="products[]" value="15"
                                                            id="compare-15" data-compare-id="15" />
                                                    </label>
                                                </div>
                                            </figcaption>
                                        </div>
                                    </article>
                                </div>
                                <div class="productCarousel-slide">
                                    <article class="card">
                                        <figure class="card-figure">
                                            <div class="sale-flag-side">
                                                <span class="sale-text">Sale!</span>
                                            </div>
                                            <a href="#">
                                                <div class="card-img-container">
                                                    <img src="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/15/578/6__589114847.jpg?c=2') }}"
                                                        alt="Office for Mac 2008 (Beige) Slinky Glitter"
                                                        title="Office for Mac 2008 (Beige) Slinky Glitter"
                                                        data-sizes="auto"
                                                        srcset="
                            {{ asset('assets/user/img/s-24232/images/stencil/80w/products/10/610/5__749024847.jpg?c=2') }}
                          "
                                                        data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/10/610/5__74902.1554452143.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/10/610/5__74902.1554452143.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/10/610/5__74902.1554452143.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/10/610/5__74902.1554452143.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/10/610/5__74902.1554452143.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/10/610/5__74902.1554452143.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/10/610/5__74902.1554452143.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/10/610/5__74902.1554452143.jpg?c=2 2560w"
                                                        class="lazyload card-image" />
                                                </div>
                                            </a>
                                        </figure>

                                        <div class="card-body">
                                            <p class="card-text" data-test-info-type="productRating">
                                                <span class="rating--small">
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </p>
                                            <h4 class="card-title">
                                                <a href="../office-for-mac-2008-beige-slinky-glitter/index.html">Office for
                                                    Mac 2008 (Beige) Slinky Glitter</a>
                                            </h4>

                                            <div class="card-text price-container" data-test-info-type="price">
                                                <div class="price-section price-section--withTax">
                                                    <span class="price-now-label"> </span>
                                                    <span data-product-price-with-tax
                                                        class="price price--withTax">&#8377;180.00</span>
                                                </div>
                                                <div class="price-section price-section--withTax non-sale-price--withTax">
                                                    <span data-product-non-sale-price-with-tax
                                                        class="price price--non-sale">
                                                        &#8377;229.00
                                                    </span>
                                                </div>
                                            </div>

                                            <figcaption class="card-figcaption">
                                                <div class="card-figcaption-body">
                                                    <a href="../cart.html?action=add&amp;product_id=10"
                                                        data-event-type="product-click" title="Add to Cart"
                                                        class="button button--small card-figcaption-button add-to-cart">Buy
                                                        Now</a>

                                                    <a href="#" title="Quick view"
                                                        class="button button--small card-figcaption-button quickview"
                                                        data-product-id="10">Quick view</a>

                                                    <div class="form-action wishlist-button">
                                                        <input type="hidden" name="variation_id" value="" />
                                                        <a href="../login7f97.html?action=add&amp;product_id=10"
                                                            id="form-action-addToWishlist"
                                                            class="button button--small card-figcaption-button tm-wishlist"
                                                            title="Add to Wish List">Add to Wish List
                                                        </a>
                                                    </div>

                                                    <label class="button button--small card-figcaption-button"
                                                        for="compare-10" title="Compare">
                                                        Compare<input type="checkbox" name="products[]" value="10"
                                                            id="compare-10" data-compare-id="10" />
                                                    </label>
                                                </div>
                                            </figcaption>
                                        </div>
                                    </article>
                                </div>
                                <div class="productCarousel-slide">
                                    <article class="card">
                                        <figure class="card-figure">
                                            <a href="#">
                                                <div class="card-img-container">
                                                    <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/20/538/4__384634847.jpg?c=2') }}"
                                                        alt="Speck 13-inch Pivot Backpack (Black) Metallic"
                                                        title="Speck 13-inch Pivot Backpack (Black) Metallic"
                                                        data-sizes="auto"
                                                        srcset="
                            {{ asset('assets/user/img/s-24232/images/stencil/80w/products/20/538/4__384634847.jpg?c=2') }}
                          "
                                                        data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/20/538/4__38463.1554449385.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/20/538/4__38463.1554449385.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/20/538/4__38463.1554449385.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/20/538/4__38463.1554449385.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/20/538/4__38463.1554449385.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/20/538/4__38463.1554449385.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/20/538/4__38463.1554449385.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/20/538/4__38463.1554449385.jpg?c=2 2560w"
                                                        class="lazyload card-image" />
                                                </div>
                                            </a>
                                        </figure>

                                        <div class="card-body">
                                            <p class="card-text" data-test-info-type="productRating">
                                                <span class="rating--small">
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingFull">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                    <span class="icon icon--ratingEmpty">
                                                        <svg>
                                                            <use xlink:href="#icon-star" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </p>
                                            <h4 class="card-title">
                                                <a href="../speck-13-inch-pivot-backpack-black-metallic/index.html">Speck
                                                    13-inch Pivot Backpack (Black) Metallic</a>
                                            </h4>

                                            <div class="card-text price-container" data-test-info-type="price">
                                                <div class="price-section price-section--withTax">
                                                    <span class="price-now-label" style="display: none">
                                                    </span>
                                                    <span data-product-price-with-tax
                                                        class="price price--withTax">&#8377;49.95</span>
                                                </div>
                                                <div class="price-section price-section--withTax non-sale-price--withTax"
                                                    style="display: none">
                                                    <span data-product-non-sale-price-with-tax
                                                        class="price price--non-sale">
                                                    </span>
                                                </div>
                                            </div>

                                            <figcaption class="card-figcaption">
                                                <div class="card-figcaption-body">
                                                    <a href="../speck-13-inch-pivot-backpack-black-metallic/index.html"
                                                        data-event-type="product-click"
                                                        class="button button--small card-figcaption-button add-to-cart"
                                                        data-product-id="20">Choose Options</a>

                                                    <a href="#" title="Quick view"
                                                        class="button button--small card-figcaption-button quickview">Quick
                                                        view</a>

                                                    <div class="form-action wishlist-button">
                                                        <input type="hidden" name="variation_id" value="" />
                                                        <a href="../logind00b.html?action=add&amp;product_id=20"
                                                            id="form-action-addToWishlist"
                                                            class="button button--small card-figcaption-button tm-wishlist"
                                                            title="Add to Wish List">Add to Wish List
                                                        </a>
                                                    </div>

                                                    <label class="button button--small card-figcaption-button"
                                                        for="compare-20" title="Compare">
                                                        Compare<input type="checkbox" name="products[]" value="20"
                                                            id="compare-20" data-compare-id="20" />
                                                    </label>
                                                </div>
                                            </figcaption>
                                        </div>
                                    </article>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
                    <a href="#" class="modal-close" aria-label="Close" role="button">
                        <span aria-hidden="true">&#215;</span>
                    </a>
                    <div class="modal-content"></div>
                    <div class="loadingOverlay"></div>
                </div>
                <div id="alert-modal" class="modal modal--alert modal--small" data-reveal data-prevent-quick-search-close>
                    <div class="swal2-icon swal2-error swal2-icon-show">
                        <span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span
                                class="swal2-x-mark-line-right"></span></span>
                    </div>

                    <div class="modal-content"></div>

                    <div class="button-container">
                        <button type="button" class="confirm button" data-reveal-close>
                            OK
                        </button>
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

        <script>
            window.stencilBootstrap("product",
                "{\"productId\":13,\"themeSettings\":{\"optimizedCheckout-formChecklist-color\":\"#333333\",\"homepage_new_products_column_count\":5,\"card--alternate-color--hover\":\"#ffffff\",\"optimizedCheckout-colorFocus\":\"#4496f6\",\"fontSize-root\":13,\"show_accept_amex\":true,\"optimizedCheckout-buttonPrimary-borderColorDisabled\":\"transparent\",\"homepage_top_products_count\":10,\"paymentbuttons-paypal-size\":\"responsive\",\"optimizedCheckout-buttonPrimary-backgroundColorActive\":\"#000000\",\"brandpage_products_per_page\":12,\"color-secondaryDarker\":\"#e8e8e8\",\"navUser-color\":\"#000000\",\"color-textBase--active\":\"#ffd200\",\"social_icon_placement_bottom\":\"bottom_none\",\"header-bottom-backgroundColor\":\"#1f4c94\",\"show_powered_by\":true,\"show_accept_amazonpay\":false,\"fontSize-h4\":20,\"checkRadio-borderColor\":\"#dfdfdf\",\"color-primaryDarker\":\"#2d2d2d\",\"optimizedCheckout-buttonPrimary-colorHover\":\"#ffffff\",\"brand_size\":\"190x250\",\"optimizedCheckout-logo-position\":\"left\",\"optimizedCheckout-discountBanner-backgroundColor\":\"#e5e5e5\",\"color-textLink--hover\":\"#ffd200\",\"pdp-sale-price-label\":\"\",\"optimizedCheckout-buttonSecondary-backgroundColorHover\":\"#f5f5f5\",\"optimizedCheckout-headingPrimary-font\":\"Google_Montserrat_400\",\"logo_size\":\"125x44\",\"footer-backgroundColor\":\"#2457aa\",\"navPages-color\":\"#ffffff\",\"productpage_reviews_count\":9,\"optimizedCheckout-step-borderColor\":\"#dddddd\",\"header-top-backgroundColor\":\"#2457aa\",\"optimizedCheckout-formField-backgroundColor\":\"#ffffff\",\"show_accept_paypal\":true,\"paymentbuttons-paypal-label\":\"checkout\",\"logo-font\":\"Google_Montserrat_300\",\"paymentbuttons-paypal-shape\":\"rect\",\"optimizedCheckout-discountBanner-textColor\":\"#333333\",\"optimizedCheckout-backgroundImage-size\":\"1000x400\",\"pdp-retail-price-label\":\"\",\"optimizedCheckout-buttonPrimary-font\":\"Google_Karla_400\",\"carousel-dot-color\":\"#000000\",\"button--disabled-backgroundColor\":\"#dadada\",\"blockquote-cite-font-color\":\"#a5a5a5\",\"sub-title-color\":\"#a5a5a5\",\"optimizedCheckout-formField-shadowColor\":\"#e5e5e5\",\"categorypage_products_per_page\":12,\"container-fill-base\":\"#ffffff\",\"paymentbuttons-paypal-layout\":\"vertical\",\"homepage_featured_products_column_count\":5,\"button--default-color\":\"#000000\",\"pace-progress-backgroundColor\":\"#a3a3a3\",\"color-textLink--active\":\"#ffd200\",\"optimizedCheckout-loadingToaster-backgroundColor\":\"#333333\",\"color-textHeading\":\"#000000\",\"show_accept_discover\":true,\"optimizedCheckout-formField-errorColor\":\"#d14343\",\"spinner-borderColor-dark\":\"#989898\",\"restrict_to_login\":false,\"input-font-color\":\"#454545\",\"select-bg-color\":\"#ffffff\",\"blog-title-color\":\"#2457aa\",\"show_accept_mastercard\":true,\"show_custom_fields_tabs\":false,\"color_text_product_sale_badges\":\"#000000\",\"optimizedCheckout-link-font\":\"Google_Karla_400\",\"homepage_show_carousel_arrows\":true,\"supported_payment_methods\":[\"card\",\"paypal\"],\"carousel-arrow-bgColor\":\"#ffffff\",\"lazyload_mode\":\"lazyload+lqip\",\"carousel-title-color\":\"#000000\",\"color_hover_product_sale_badges\":\"#ffd200\",\"show_accept_googlepay\":false,\"card--alternate-borderColor\":\"#ffffff\",\"homepage_new_products_count\":10,\"footer-top-textColor\":\"#ffd200\",\"button--disabled-color\":\"#ffffff\",\"color-primaryDark\":\"#454545\",\"color-grey\":\"#4c4c4c\",\"body-font\":\"Google_Poppins_400\",\"optimizedCheckout-step-textColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-borderColorActive\":\"transparent\",\"navPages-subMenu-backgroundColor\":\"#2457aa\",\"button--primary-backgroundColor\":\"#2457aa\",\"optimizedCheckout-formField-borderColor\":\"#cccccc\",\"checkRadio-color\":\"#4f4f4f\",\"show_product_dimensions\":false,\"optimizedCheckout-link-color\":\"#476bef\",\"card-figcaption-button-background\":\"#2457aa\",\"icon-color-hover\":\"#000000\",\"optimizedCheckout-headingSecondary-font\":\"Google_Montserrat_400\",\"headings-font\":\"Google_Poppins_400\",\"label-backgroundColor\":\"#bfbfbf\",\"service-title-hover-color\":\"#ffd200\",\"button--primary-backgroundColorHover\":\"#ffd200\",\"show_product_reviews\":true,\"button--default-borderColor\":\"#ffd200\",\"pdp-non-sale-price-label\":\"\",\"button--disabled-borderColor\":\"#dadada\",\"label-color\":\"#ffffff\",\"optimizedCheckout-headingSecondary-color\":\"#333333\",\"select-arrow-color\":\"#828282\",\"logo_fontSize\":28,\"alert-backgroundColor\":\"#ffffff\",\"optimizedCheckout-logo-size\":\"250x100\",\"default_image_brand\":\"/assets/img/BrandDefault.gif\",\"card-title-color\":\"#707070\",\"service-title-color\":\"#000000\",\"product_list_display_mode\":\"grid\",\"optimizedCheckout-link-hoverColor\":\"#002fe1\",\"fontSize-h5\":15,\"product_size\":\"700x659\",\"paymentbuttons-paypal-color\":\"gold\",\"homepage_show_carousel\":true,\"optimizedCheckout-body-backgroundColor\":\"#ffffff\",\"button--default-borderColorActive\":\"#2457aa\",\"paymentbuttons-paypal-tagline\":false,\"color-greyDarkest\":\"#000000\",\"color_badge_product_sale_badges\":\"#ffd200\",\"price_ranges\":true,\"container-border-global-color-dark\":\"#454545\",\"productpage_videos_count\":8,\"color-greyDark\":\"#666666\",\"optimizedCheckout-buttonSecondary-borderColorHover\":\"#999999\",\"optimizedCheckout-discountBanner-iconColor\":\"#333333\",\"carousel-arrow-bghoverColor\":\"#ffffff\",\"card-price-color\":\"#2457aa\",\"optimizedCheckout-loadingToaster-textColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorDisabled\":\"#ffffff\",\"optimizedCheckout-formField-placeholderColor\":\"#999999\",\"navUser-color-hover\":\"#ffd200\",\"icon-ratingFull\":\"#ffab00\",\"default_image_gift_certificate\":\"/assets/img/GiftCertificate.png\",\"optimizedCheckout-buttonSecondary-borderColor\":\"#cccccc\",\"service-subitle-color\":\"#979797\",\"color-textBase--hover\":\"#ffd200\",\"color-errorLight\":\"#ffdddd\",\"social_icon_placement_top\":false,\"blog_size\":\"800x800\",\"shop_by_price_visibility\":true,\"optimizedCheckout-buttonSecondary-colorActive\":\"#000000\",\"cms-link-hover-color\":\"#2457aa\",\"optimizedCheckout-orderSummary-backgroundColor\":\"#ffffff\",\"footer_font-family\":\"Google_Montserrat_400\",\"color-warningLight\":\"#fffdea\",\"show_product_weight\":true,\"button--default-colorActive\":\"#ffffff\",\"color-info\":\"#666666\",\"optimizedCheckout-formChecklist-backgroundColorSelected\":\"#f5f5f5\",\"show_product_quick_view\":true,\"button--default-borderColorHover\":\"#2457aa\",\"card--alternate-backgroundColor\":\"#ffd200\",\"hide_content_navigation\":false,\"pdp-price-label\":\"\",\"show_copyright_footer\":true,\"swatch_option_size\":\"22x22\",\"optimizedCheckout-orderSummary-borderColor\":\"#dddddd\",\"navPages-backgroundColor\":\"#ffffff\",\"optimizedCheckout-show-logo\":\"none\",\"carousel-description-color\":\"#000000\",\"optimizedCheckout-formChecklist-backgroundColor\":\"#ffffff\",\"fontSize-h2\":25,\"optimizedCheckout-step-backgroundColor\":\"#757575\",\"optimizedCheckout-headingPrimary-color\":\"#333333\",\"color-textBase\":\"#707070\",\"color-warning\":\"#d4cb49\",\"productgallery_size\":\"700x300\",\"bottom-footer-textColor\":\"#ebebeb\",\"alert-color\":\"#4f4f4f\",\"shop_by_brand_show_footer\":true,\"card-figcaption-button-color\":\"#ffffff\",\"searchpage_products_per_page\":12,\"color-textSecondary--active\":\"#ffd200\",\"optimizedCheckout-formField-inputControlColor\":\"#476bef\",\"optimizedCheckout-contentPrimary-color\":\"#333333\",\"optimizedCheckout-buttonSecondary-font\":\"Google_Karla_400\",\"storeName-color\":\"#4f4f4f\",\"optimizedCheckout-backgroundImage\":\"\",\"form-label-font-color\":\"#000000\",\"color-greyLightest\":\"#e8e8e8\",\"optimizedCheckout-header-backgroundColor\":\"#f7f7f7\",\"productpage_related_products_count\":10,\"optimizedCheckout-buttonSecondary-backgroundColorActive\":\"#e5e5e5\",\"color-textLink\":\"#000000\",\"color-greyLighter\":\"#dfdfdf\",\"color-secondaryDark\":\"#e8e8e8\",\"fontSize-h6\":13,\"paymentbuttons-paypal-fundingicons\":false,\"carousel-arrow-color\":\"#000000\",\"productpage_similar_by_views_count\":10,\"show-admin-bar\":true,\"pdp-custom-fields-tab-label\":\"Additional Information\",\"loadingOverlay-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-color\":\"#ffffff\",\"input-bg-color\":\"#ffffff\",\"navPages-subMenu-separatorColor\":\"#2b69cc\",\"navPages-color-hover\":\"#ffd200\",\"color-infoLight\":\"#dfdfdf\",\"product_sale_badges\":\"topleft\",\"default_image_product\":\"/assets/img/ProductDefault.gif\",\"navUser-dropdown-borderColor\":\"#ededed\",\"optimizedCheckout-buttonPrimary-colorActive\":\"#ffffff\",\"color-greyMedium\":\"#989898\",\"optimizedCheckout-formChecklist-borderColor\":\"#cccccc\",\"feature-background-color\":\"#f7f7f7\",\"fontSize-h1\":20,\"homepage_featured_products_count\":10,\"color-greyLight\":\"#a5a5a5\",\"optimizedCheckout-logo\":\"\",\"icon-ratingEmpty\":\"#d3d3d3\",\"show_product_details_tabs\":true,\"icon-color\":\"#ffffff\",\"button--default-backgroundColorHover\":\"#2457aa\",\"overlay-backgroundColor\":\"#2d2d2d\",\"input-border-color-active\":\"#989898\",\"hide_contact_us_page_heading\":false,\"container-fill-dark\":\"#f7f7f7\",\"optimizedCheckout-buttonPrimary-backgroundColorDisabled\":\"#cccccc\",\"button--primary-color\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-borderColorHover\":\"transparent\",\"color-successLight\":\"#d5ffd8\",\"button--default-backgroundColor\":\"#ffd200\",\"color-greyDarker\":\"#454545\",\"show_product_quantity_box\":true,\"color-success\":\"#69d66f\",\"optimizedCheckout-header-borderColor\":\"#dddddd\",\"zoom_size\":\"1280x1280\",\"color-white\":\"#ffffff\",\"optimizedCheckout-buttonSecondary-backgroundColor\":\"#ffffff\",\"productview_thumb_size\":\"100x100\",\"fontSize-h3\":22,\"spinner-borderColor-light\":\"#ffffff\",\"geotrust_ssl_common_name\":\"\",\"carousel-bgColor\":\"#ffffff\",\"carousel-dot-color-active\":\"#666666\",\"input-border-color\":\"#dfdfdf\",\"optimizedCheckout-buttonPrimary-backgroundColor\":\"#333333\",\"color-secondary\":\"#ffffff\",\"card-figcaption-button-color-hover\":\"#000000\",\"button--primary-backgroundColorActive\":\"#ffd200\",\"color-textSecondary--hover\":\"#ffd200\",\"color-whitesBase\":\"#f8f8f8\",\"body-bg\":\"#ffffff\",\"dropdown--quickSearch-backgroundColor\":\"#ffffff\",\"optimizedCheckout-contentSecondary-font\":\"Google_Karla_400\",\"navUser-dropdown-backgroundColor\":\"#ffffff\",\"color-primary\":\"#ededed\",\"optimizedCheckout-contentPrimary-font\":\"Google_Karla_400\",\"card-figcaption-button-backgroundHover\":\"#ffd200\",\"supported_card_type_icons\":[\"american_express\",\"diners\",\"discover\",\"mastercard\",\"visa\"],\"navigation_design\":\"simple\",\"optimizedCheckout-formField-textColor\":\"#333333\",\"color-black\":\"#000000\",\"homepage_top_products_column_count\":4,\"hide_page_heading\":false,\"optimizedCheckout-buttonSecondary-colorHover\":\"#333333\",\"button--primary-colorActive\":\"#000000\",\"homepage_stretch_carousel_images\":false,\"optimizedCheckout-contentSecondary-color\":\"#757575\",\"card-title-color-hover\":\"#000000\",\"applePay-button\":\"black\",\"thumb_size\":\"100x100\",\"hide_breadcrumbs\":false,\"show_accept_klarna\":false,\"optimizedCheckout-buttonPrimary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonSecondary-borderColorActive\":\"#757575\",\"hide_blog_page_heading\":false,\"optimizedCheckout-header-textColor\":\"#333333\",\"hide_category_page_heading\":false,\"optimizedCheckout-show-backgroundImage\":false,\"color-primaryLight\":\"#a5a5a5\",\"navUser-indicator-backgroundColor\":\"#ffd200\",\"banner-text-color\":\"#ffffff\",\"show_accept_visa\":true,\"logo-position\":\"left\",\"show_product_reviews_tabs\":false,\"carousel-dot-bgColor\":\"#d3d3d3\",\"optimizedCheckout-form-textColor\":\"#666666\",\"optimizedCheckout-buttonSecondary-color\":\"#333333\",\"geotrust_ssl_seal_size\":\"M\",\"button--icon-svg-color\":\"#ffffff\",\"alert-color-alt\":\"#ffffff\",\"footer-textColor\":\"#ebebeb\",\"button--default-colorHover\":\"#ffffff\",\"checkRadio-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-backgroundColorHover\":\"#666666\",\"input-disabled-bg\":\"#ffffff\",\"carousel-arrow-colorHover\":\"#ffd200\",\"dropdown--wishList-backgroundColor\":\"#2457aa\",\"container-border-global-color-base\":\"#ededed\",\"productthumb_size\":\"100x100\",\"button--primary-colorHover\":\"#000000\",\"color-error\":\"#ff7d7d\",\"color-textSecondary\":\"#000000\",\"gallery_size\":\"300x300\",\"homepage_blog_posts_count\":6,\"cms-link-color\":\"#989898\"},\"genericError\":\"Oops! Something went wrong.\",\"maintenanceModeSettings\":[],\"adminBarLanguage\":\"{\\\"locale\\\":\\\"en\\\",\\\"locales\\\":{\\\"admin.maintenance_header\\\":\\\"en\\\",\\\"admin.maintenance_tooltip\\\":\\\"en\\\",\\\"admin.maintenance_showstore_link\\\":\\\"en\\\",\\\"admin.prelaunch_header\\\":\\\"en\\\",\\\"admin.page_builder_link\\\":\\\"en\\\"},\\\"translations\\\":{\\\"admin.maintenance_header\\\":\\\"Your store is down for maintenance.\\\",\\\"admin.maintenance_tooltip\\\":\\\"Only administrators can view the store at the moment. Visit your control panel settings page to disable maintenance mode.\\\",\\\"admin.maintenance_showstore_link\\\":\\\"Click here to see what your visitors will see.\\\",\\\"admin.prelaunch_header\\\":\\\"Your storefront is private. Share your site with preview code:\\\",\\\"admin.page_builder_link\\\":\\\"Design this page in Page Builder\\\"}}\",\"urls\":{\"home\":\"../index.html\",\"account\":{\"index\":\"/account.php\",\"orders\":{\"all\":\"../logind1fa.html?action=order_status\",\"completed\":\"../login91d7.html?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"update_action\":\"../login83b1.html?action=update_account\",\"returns\":\"../logine921.html?action=view_returns\",\"addresses\":\"../login479d.html?action=address_book\",\"inbox\":\"../login5df3.html?action=inbox\",\"send_message\":\"../login1273.html?action=send_message\",\"add_address\":\"../logindda8.html?action=add_shipping_address\",\"wishlists\":{\"all\":\"/wishlist.php\",\"add\":\"../login5946.html?action=addwishlist\",\"edit\":\"../login1c39.html?action=editwishlist\",\"delete\":\"/wishlist.php?action=deletewishlist\"},\"details\":\"../login8e0b.html?action=account_details\",\"recent_items\":\"/account.php?action=recent_items\"},\"brands\":\"../brands/index.html\",\"gift_certificate\":{\"purchase\":\"/giftcertificates.php\",\"redeem\":\"../giftcertificatese8f7.html?action=redeem\",\"balance\":\"/giftcertificates.php?action=balance\"},\"auth\":{\"login\":\"/login.php\",\"check_login\":\"../loginb320.html?action=check_login\",\"create_account\":\"../logind85d.html?action=create_account\",\"save_new_account\":\"../login5485.html?action=save_new_account\",\"forgot_password\":\"../login8311.html?action=reset_password\",\"send_password_email\":\"../login4104.html?action=send_password_email\",\"save_new_password\":\"../logina61b.html?action=save_new_password\",\"logout\":\"/login.php?action=logout\"},\"product\":{\"post_review\":\"/postreview.php\"},\"cart\":\"/cart.php\",\"checkout\":{\"single_address\":\"/checkout\",\"multiple_address\":\"/checkout.php?action=multiple\"},\"rss\":{\"products\":[]},\"contact_us_submit\":\"../pages187d.html?action=sendContactForm\",\"search\":\"/search.php\",\"compare\":\"/compare\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}},\"secureBaseUrl\":\"../index.html\",\"cartId\":null,\"channelId\":1,\"template\":\"pages/product\",\"reviewRating\":\"The 'Rating' field cannot be blank.\",\"reviewSubject\":\"The 'Review Subject' field cannot be blank.\",\"reviewComment\":\"The 'Comments' field cannot be blank.\",\"reviewEmail\":\"Please use a valid email address, such as user@example.com.\"}"
            ).load();
        </script>

        <script type="text/javascript"
            src="{{ asset('assets/user/js/csrf-protection-header-5eeddd5de78d98d146ef4fd71b2aedce4161903e.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.productView-thumbnail-link').on('click', function(e) {

                    e.preventDefault();

                    // Get the image path from clicked thumbnail
                    const newImage = $(this).data('full');

                    // Change the main image src
                    $('#main-product-image').attr('src', newImage);
                });
            });
        </script>
    </body>
@endsection
