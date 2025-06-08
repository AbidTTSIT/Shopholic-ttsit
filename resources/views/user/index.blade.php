@extends('user.layouts.master')
@section('content')

<body onLoad="myFunction()" id="myDiv" class="animate-bottom">

    <div id="loader2" class="tml">
        <div id="lds-hourglass"></div>
    </div>

    <!-- snippet location header -->
    <svg data-src="https://cdn11.bigcommerce.com/s-24232/stencil/5fe2b680-bba0-0138-8fe1-0242ac11000f/e/fe0f7ff0-a22d-0137-2996-0242ac11001d/img/icon-sprite.svg"
        class="icons-svg-sprite"></svg>


    <div class="body body_home" data-currency-code="USD">
        <div class="container_home">
            <div data-content-region="home_below_menu"></div>
            <section class="heroCarousel" data-slick='{
                            "arrows": true,
                            "dots": true,
                            "mobileFirst": true,
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "autoplay": true,
                            "autoplaySpeed": 555000,
                            "lazyLoad": "anticipated"
                        }'>
                <a href="#">
                    <div class="heroCarousel-slide  heroCarousel-slide--first">
                        <div class="heroCarousel-image-wrapper" style="height: 27.226318774815656vw">
                            <img class="heroCarousel-image"
                                src="{{ asset('assets/user/img/s-24232/images/stencil/original/carousel/29/main-banner-14847.jpg?c=2') }}"
                                alt="" title="" width="1763" height="480" />
                        </div>
                        <div class="heroCarousel-content">
                            <h1 class="heroCarousel-title">Festival Offer Available</h1>
                            <p class="heroCarousel-description">Upto 40% Flate</p>
                            <span class="heroCarousel-action button button--primary button--large">Stay Tuned For Sale
                                Date</span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="heroCarousel-slide  ">
                        <div class="heroCarousel-image-wrapper" style="height: 27.226318774815656vw">
                            <img class="heroCarousel-image"
                                data-lazy="https://cdn11.bigcommerce.com/s-24232/images/stencil/original/carousel/30/main-banner-2.jpg?c=2"
                                alt="" title="" width="1763" height="480" />
                        </div>
                        <div class="heroCarousel-content">
                            <h1 class="heroCarousel-title">Arrival Offer Available</h1>
                            <p class="heroCarousel-description">Upto 30% Flate</p>
                            <span class="heroCarousel-action button button--primary button--large">Stay Tuned For Sale
                                Date</span>
                        </div>
                    </div>
                </a>
            </section>
            <div data-content-region="home_below_carousel"></div>



            <div class="main full">
                <div class="container">
                    <div class="banners" data-banner-location="top">
                        <div class="banner" data-event-type="promotion" data-entity-id="9" data-name="Top banner"
                            data-position="top" data-banner-id="Top banner">
                            <div data-event-type="promotion-click">
                                <div class="special_navigation">
                                    <div class="container">
                                        <div class="spec_navigation">
                                            <div class="sm-box pg-hom-apps">
                                                <div class="sm-cats round icon-s">
                                                    @forelse($brands as $brand)
                                                    @foreach($brand->images as $image)
                                                    <a href="https://l.smartprix.com/l?k=125E-tyPD8dptNBCCpphrhArnrysuhyiarTFhrhrhrhrhrhr&amp;click_src=integrated-apps-home&amp;in_browser=1"
                                                        rel="nofollow noopener">
                                                        <img loading="lazy" width="50" height="50" class="sm-img"
                                                            src="{{ asset('assets/admin/img/brand/' . $image->path) }}"
                                                            alt="Amazon">
                                                        <span>{{ $brand->name }}</span>
                                                    </a>
                                                    @endforeach
                                                    @empty
                                                    <p>No brands Available.</p>
                                                    @endforelse

                                                    <a href="/integrated_apps" rel="nofollow noopener">
                                                        <img loading="lazy" width="50" height="50" class="sm-img"
                                                            src="https://cdn1.smartprix.com/rx-iJhJ210qu-w100-h100/JhJ210qu.webp"
                                                            alt="More">
                                                        <span>More</span>
                                                    </a>
                                                </div> <!-- .sm-cats -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="categories banner">
                                    <div class="category-content">
                                        <div class="category-title">
                                            <h1 class="dark-title">Shop by Category</h1>
                                            <h3 class="sub-title">choose what you looking for</h3>
                                        </div>
                                    </div>
                                    <div id="category" class="category cms1_header">
                                        <div class="cms_slider">
                                            <div id="category-carousel" class="ProductList">
                                                @foreach ($categories as $category)
                                                <div class="item">
                                                    <div class="category-image img1">
                                                        <div class="feature"><a href="#"> <img
                                                                    class="__mce_add_custom__" title="cat1.png"
                                                                    src="{{ asset('assets/img/category/' . $category->images[0]->path) }}"
                                                                    alt="cat1.png" width="130" height="130" /> <span
                                                                    class="category-title">{{ $category->name }}</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="subbanner-cms1 three">
                                    <div class="subbanner-inner row">
                                        <div class="subbannerpart1">
                                            <div class="subbanner-one">
                                                <div class="content-inner"><a href="#"><img class="__mce_add_custom__"
                                                            title="cms-banner-01.jpg"
                                                            src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/cms-banner-01.jpg') }}"
                                                            alt="cms-banner-01.jpg" width="447" height="274" /></a>
                                                    <div class="static-inner">
                                                        <div class="text1 static-text">Deals on play</div>
                                                        <div class="text2 static-text">Festival season is here</div>
                                                        <a class="link-text" href="#">Shop now</a>
                                                        <div class="text3 static-text">No EMI | Exchange offer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subbannerpart2">
                                            <div class="subbanner-two">
                                                <div class="content-inner"><a href="#"><img class="__mce_add_custom__"
                                                            title="cms-banner-02.jpg"
                                                            src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/cms-banner-02.jpg') }}"
                                                            alt="cms-banner-02.jpg" width="447" height="274" /></a>
                                                    <div class="static-inner">
                                                        <div class="text3 static-text">No EMI | Exchange offer</div>
                                                        <div class="text1 static-text">upto 70% flate</div>
                                                        <div class="text2 static-text">Festival season is here</div>
                                                        <a class="link-text" href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subbannerpart3">
                                            <div class="subbanner-three">
                                                <div class="content-inner"><a href="#"><img class="__mce_add_custom__"
                                                            title="cms-banner-03.jpg"
                                                            src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/cms-banner-03.jpg') }}"
                                                            alt="cms-banner-03.jpg" width="447" height="274" /></a>
                                                    <div class="static-inner">
                                                        <div class="text1 static-text">Smart watches</div>
                                                        <div class="text2 static-text">Festival season is here</div>
                                                        <a class="link-text" href="#">Shop now</a>
                                                        <div class="text3 static-text">No EMI | Exchange offer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="featured-products">
                        <div class="collection-title">
                            <h2 class="myhead1">Featured Products</h2>
                        </div>
                        <section class="productCarousel" data-list-name="" data-slick='{
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
                            @foreach ($products as $product)
                            <div class="productCarousel-slide">
                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="{{ route('product.details', $product->id) }}">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/img/product/' . $product->images[0]->path) }}"
                                                    alt="Apple Wireless Mighty Mouse Caprese Satchel"
                                                    class="lazyload card-image" style="height: 250px"/>
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
                                            <a
                                                href="#">{{ $product->title }}</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;{{ $product->regular_price }}</span>

                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="15">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="15">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-15" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="15"
                                                        id="compare-15" data-compare-id="15">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>

                                </article>
                            </div>
                            @endforeach
                        </section>
                        <div data-content-region="home_below_featured_products"></div>
                    </div>

                    <div class="banners" data-banner-location="bottom">
                        <div class="banner">
                            <div id='1267950459'>
                                <div class="service-block">
                                    <div class="services-wrapper">
                                        <div class="serviceblock service-1">
                                            <div class="service-description">
                                                <div class="service-left">&nbsp;</div>
                                                <div class="service-right">
                                                    <div class="title">Next Day Delivery</div>
                                                    <div class="subtitle">UK Orders Only</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="serviceblock service-2">
                                            <div class="service-description">
                                                <div class="service-left">&nbsp;</div>
                                                <div class="service-right">
                                                    <div class="title">Best Online Support</div>
                                                    <div class="subtitle">Hours: 8AM - 11PM</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="serviceblock service-3">
                                            <div class="service-description">
                                                <div class="service-left">&nbsp;</div>
                                                <div class="service-right">
                                                    <div class="title">Worldwide Delivery</div>
                                                    <div class="subtitle">For Order Over &#8377;100</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="serviceblock service-4">
                                            <div class="service-description">
                                                <div class="service-left">&nbsp;</div>
                                                <div class="service-right">
                                                    <div class="title">Special Weekly Gift</div>
                                                    <div class="subtitle">Enter Numbers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="subbanner-cms">
                                    <div class="leftside">
                                        <div class="list_inner">
                                            <div class="subbanner_img"><a title="banner1" href="#"><img
                                                        class="__mce_add_custom__" title="sub-banner-left.jpg"
                                                        src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/sub-banner-left.jpg') }}"
                                                        alt="sub-banner-left.jpg" width="970" height="237" /></a>
                                                <div class="description">
                                                    <div class="title">Month End Bonza</div>
                                                    <div class="subtitle">T-Shirt, Jeans, Shirt, Formal Wears &amp; All
                                                        Other Latest Items...</div>
                                                    <div class="action1"><a class="banner_text" href="#">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rightside">
                                        <div class="list_inner">
                                            <div class="subbanner_img"><a title="banner2" href="#"><img
                                                        class="__mce_add_custom__" title="sub-banner-right.jpg"
                                                        src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/sub-banner-right.jpg') }}"
                                                        alt="sub-banner-right.jpg" width="400" height="237" /></a>
                                                <div class="description">
                                                    <div class="title">Great Deals</div>
                                                    <div class="subtitle">Earphones, Speakers, Laptop Console &amp;
                                                        More...</div>
                                                    <div class="action1"><a class="banner_text" href="#">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="subbanner-cms3">
                                    <div class="subbanner-inner row">
                                        <div class="subbannerpart1">
                                            <div class="subbanner-one">
                                                <div class="content-inner"><a href="#"><img class="__mce_add_custom__"
                                                            title="sub-banner-06.jpg"
                                                            src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/sub-banner-06.jpg') }}"
                                                            alt="sub-banner-06.jpg" width="685" height="237" /></a>
                                                    <div class="static-inner">
                                                        <div class="text1 static-text">iPhone 6s 64gb</div>
                                                        <div class="text2 static-text">Now in all Color Varient
                                                            Available Grab This Offer...</div>
                                                        <div class="action1"><a class="banner_text" href="#">Shop
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subbannerpart2">
                                            <div class="subbanner-two">
                                                <div class="content-inner"><a href="#"><img class="__mce_add_custom__"
                                                            title="sub-banner-07.jpg"
                                                            src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/sub-banner-07.jpg') }}"
                                                            alt="sub-banner-07.jpg" width="685" height="237" /></a>
                                                    <div class="static-inner">
                                                        <div class="text1 static-text">Extended Warrenty</div>
                                                        <div class="text2 static-text">For All Mobile Accessories,
                                                            Elecreonic Exclusive Available...</div>
                                                        <div class="action1"><a class="banner_text" href="#">Shop
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offercms-block">
                                    <div class="offercms-inner-block1">
                                        <div class="offercms1_img"><a title="banner1" href="#"><img
                                                    class="__mce_add_custom__" title="cms-banner-06.jpg"
                                                    src="{{ asset('assets/user/img/s-24232/product_images/uploaded_images/cms-banner-06.jpg') }}"
                                                    alt="cms-banner-06.jpg" width="686" height="240" /></a>
                                            <div class="description">
                                                <div class="title">Bluetooth Speaker</div>
                                                <div class="subtitle">Like You. Like No One Else Have This Launching on
                                                    This Time...</div>
                                                <div class="action1"><a class="banner_text" href="#">Shop Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bestseller-products">
                        <div class="side-banner">
                            <h2 class="myhead1">Best Selling Products</h2>
                            <div class="desc">Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum
                                faucibus.</div>
                            <div class="view-more"><a href="#tab-best">View more</a></div>
                        </div>
                        <div class="right-content">
                            <div class="collection-title">
                                <h2 class="myhead1">Best Selling Products</h2>
                            </div>
                            <section class="productCarousel" data-list-name="" data-slick='{
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
                                        "slidesToShow": 4
                                    }
                                },
                               {
                                    "breakpoint": 900,
                                    "settings": {
                                        "slidesToScroll": 1,
                                        "slidesToShow": 3
                                    }
                                },
                                {
                                    "breakpoint": 800,
                                    "settings": {
                                        "slidesToScroll": 1,
                                        "slidesToShow": 2
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
                                @foreach ($products as $product)
                                @if($product->category && $product->category->name === 'Electronics')
                                <div class="productCarousel-slide">
                                    <article class="card ">
                                        <figure class="card-figure">
                                            <a href="{{ route('product.details', $product->id) }}">
                                                <div class="card-img-container">
                                                    <img src="{{ asset('assets/img/product/' . $product->images[0]->path) }}"
                                                        alt="Logitech VX Nano Collarless Faux Fur Coat"
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
                                                </span>
                                            </p>
                                            <h4 class="card-title">
                                                <a
                                                    href="#">{{ $product->title }}</a>
                                            </h4>

                                            <div class="card-text price-container" data-test-info-type="price">

                                                <div class="price-section price-section--withTax">
                                                    <span class="price-now-label" style="display: none;">

                                                    </span>
                                                    <span data-product-price-with-tax
                                                        class="price price--withTax">&#8377;{{ $product->regular_price }}</span>
                                                </div>
                                                <div class="price-section price-section--withTax non-sale-price--withTax"
                                                    style="display: none;">

                                                    <span data-product-non-sale-price-with-tax
                                                        class="price price--non-sale">

                                                    </span>
                                                </div>
                                            </div>

                                            <figcaption class="card-figcaption">
                                                <div class="card-figcaption-body">

                                                    <a href="logitech-vx-nano-collarless-faux-fur-coat/index.html"
                                                        data-event-type="product-click"
                                                        class="button button--small card-figcaption-button add-to-cart"
                                                        data-product-id="16">Choose Options</a>

                                                    <a href="#" title="Quick view"
                                                        class="button button--small card-figcaption-button quickview"
                                                        data-product-id="16">Quick view</a>

                                                    <div class="form-action wishlist-button">
                                                        <input type="hidden" name="variation_id" value="">
                                                        <a href="#"
                                                            id="form-action-addToWishlist"
                                                            class="button button--small card-figcaption-button  tm-wishlist"
                                                            title="Add to Wish List">Add to Wish List
                                                        </a>
                                                    </div>

                                                    <label class="button button--small card-figcaption-button"
                                                        for="compare-16" title="Compare">
                                                        Compare<input type="checkbox" name="products[]" value="16"
                                                            id="compare-16" data-compare-id="16">
                                                    </label>
                                                </div>
                                            </figcaption>

                                        </div>


                                    </article>
                                </div>
                                @endif
                                @endforeach
                            </section>

                        </div>
                        <div data-content-region="home_below_top_products"></div>
                    </div>
                    <div class="newpro_container">
                        <div class="collection-title">
                            <h2 class="myhead1">New products</h2>
                        </div>
                        <section class="productCarousel" data-list-name="" data-slick='{
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

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/31/475/3__868784847.jpg?c=2') }}"
                                                    alt="Mechanical watch Basic Slogan Sweat Dress "
                                                    title="Mechanical watch Basic Slogan Sweat Dress " data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/31/475/3__868784847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/31/475/3__86878.1554449007.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/31/475/3__86878.1554449007.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/31/475/3__86878.1554449007.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/31/475/3__86878.1554449007.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/31/475/3__86878.1554449007.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/31/475/3__86878.1554449007.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/31/475/3__86878.1554449007.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/31/475/3__86878.1554449007.jpg?c=2 2560w"
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
                                            </span>
                                        </p>
                                        <h4 class="card-title">
                                            <a href="#">Mechanical
                                                watch Basic Slogan Sweat Dress </a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;56.78</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="31">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="31">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-31" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="31"
                                                        id="compare-31" data-compare-id="31">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/30/483/4__219204847.jpg?c=2') }}"
                                                    alt="Donec Semper Tristique erat quis risus feugiat"
                                                    title="Donec Semper Tristique erat quis risus feugiat"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/30/483/4__219204847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/30/483/4__21920.1554449053.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/30/483/4__21920.1554449053.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/30/483/4__21920.1554449053.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/30/483/4__21920.1554449053.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/30/483/4__21920.1554449053.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/30/483/4__21920.1554449053.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/30/483/4__21920.1554449053.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/30/483/4__21920.1554449053.jpg?c=2 2560w"
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
                                            </span>
                                        </p>
                                        <h4 class="card-title">
                                            <a href="#">Donec
                                                Semper Tristique erat quis risus feugiat</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;69.49</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="30">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="30">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-30" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="30"
                                                        id="compare-30" data-compare-id="30">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/29/491/1__831734847.jpg?c=2') }}"
                                                    alt="Jade synthetic Heels Striped Men &amp; Women"
                                                    title="Jade synthetic Heels Striped Men &amp; Women"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/29/491/1__831734847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/29/491/1__83173.1554449085.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/29/491/1__83173.1554449085.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/29/491/1__83173.1554449085.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/29/491/1__83173.1554449085.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/29/491/1__83173.1554449085.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/29/491/1__83173.1554449085.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/29/491/1__83173.1554449085.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/29/491/1__83173.1554449085.jpg?c=2 2560w"
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
                                            <a href="#">Jade synthetic
                                                Heels Striped Men &amp; Women</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;65.00</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="29">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="29">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-29" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="29"
                                                        id="compare-29" data-compare-id="29">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/28/499/5__753984847.jpg?c=2') }}"
                                                    alt="Saco Sleeves Muffler Black Trim Cavalier Boots"
                                                    title="Saco Sleeves Muffler Black Trim Cavalier Boots"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/28/499/5__753984847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/28/499/5__75398.1554449122.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/28/499/5__75398.1554449122.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/28/499/5__75398.1554449122.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/28/499/5__75398.1554449122.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/28/499/5__75398.1554449122.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/28/499/5__75398.1554449122.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/28/499/5__75398.1554449122.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/28/499/5__75398.1554449122.jpg?c=2 2560w"
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
                                            <a href="#">Saco
                                                Sleeves Muffler Black Trim Cavalier Boots</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;78.49</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="28">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="28">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-28" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="28"
                                                        id="compare-28" data-compare-id="28">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/27/505/6__025544847.jpg?c=2') }}"
                                                    alt="AmazingHind illios Tunic Blue long Shirts"
                                                    title="AmazingHind illios Tunic Blue long Shirts" data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/27/505/6__025544847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/27/505/6__02554.1554449158.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/27/505/6__02554.1554449158.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/27/505/6__02554.1554449158.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/27/505/6__02554.1554449158.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/27/505/6__02554.1554449158.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/27/505/6__02554.1554449158.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/27/505/6__02554.1554449158.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/27/505/6__02554.1554449158.jpg?c=2 2560w"
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
                                            </span>
                                        </p>
                                        <h4 class="card-title">
                                            <a href="#">AmazingHind
                                                illios Tunic Blue long Shirts</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;149.99</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="27">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="27">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-27" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="27"
                                                        id="compare-27" data-compare-id="27">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/26/514/7__869764847.jpg?c=2') }}"
                                                    alt="Styleys Cady Collection Leopard Print Clean Denim Skirt"
                                                    title="Styleys Cady Collection Leopard Print Clean Denim Skirt"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/26/514/7__869764847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/26/514/7__86976.1554449217.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/26/514/7__86976.1554449217.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/26/514/7__86976.1554449217.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/26/514/7__86976.1554449217.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/26/514/7__86976.1554449217.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/26/514/7__86976.1554449217.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/26/514/7__86976.1554449217.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/26/514/7__86976.1554449217.jpg?c=2 2560w"
                                                    class="lazyload card-image" />
                                            </div>
                                        </a>

                                    </figure>

                                    <div class="card-body">
                                        <p class="card-text" data-test-info-type="productRating">
                                            <span class="rating--small">
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
                                            <a
                                                href="#">Styleys
                                                Cady Collection Leopard Print Clean Denim Skirt</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;145.59</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="26">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="26">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-26" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="26"
                                                        id="compare-26" data-compare-id="26">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/25/517/3__609564847.jpg?c=2') }}"
                                                    alt="Shopizone Splash-proof Bag Self Design"
                                                    title="Shopizone Splash-proof Bag Self Design" data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/25/517/3__609564847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/25/517/3__60956.1554449272.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/25/517/3__60956.1554449272.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/25/517/3__60956.1554449272.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/25/517/3__60956.1554449272.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/25/517/3__60956.1554449272.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/25/517/3__60956.1554449272.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/25/517/3__60956.1554449272.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/25/517/3__60956.1554449272.jpg?c=2 2560w"
                                                    class="lazyload card-image" />
                                            </div>
                                        </a>

                                    </figure>

                                    <div class="card-body">
                                        <p class="card-text" data-test-info-type="productRating">
                                            <span class="rating--small">
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
                                            <a href="#">Shopizone
                                                Splash-proof Bag Self Design</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;49.50</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="25">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="25">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-25" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="25"
                                                        id="compare-25" data-compare-id="25">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/24/524/6__663594847.jpg?c=2') }}"
                                                    alt="Apple iPod Socks Men &amp; Women Muffler Slinky"
                                                    title="Apple iPod Socks Men &amp; Women Muffler Slinky"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/24/524/6__663594847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/24/524/6__66359.1554449305.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/24/524/6__66359.1554449305.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/24/524/6__66359.1554449305.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/24/524/6__66359.1554449305.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/24/524/6__66359.1554449305.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/24/524/6__66359.1554449305.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/24/524/6__66359.1554449305.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/24/524/6__66359.1554449305.jpg?c=2 2560w"
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
                                            </span>
                                        </p>
                                        <h4 class="card-title">
                                            <a href="#">Apple iPod
                                                Socks Men &amp; Women Muffler Slinky</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;29.00</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click" title="Add to Cart"
                                                    class="button button--small card-figcaption-button add-to-cart">Add
                                                    to Cart</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="24">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-24" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="24"
                                                        id="compare-24" data-compare-id="24">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/23/531/7__889514847.jpg?c=2') }}"
                                                    alt="Apple In-Ear Headphones Glitter Bodycon Dress"
                                                    title="Apple In-Ear Headphones Glitter Bodycon Dress"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/23/531/7__889514847.jpg?c=2') }}"
                                                    data-srcset="https://cdn11.bigcommerce.com/s-24232/images/stencil/80w/products/23/531/7__88951.1554449357.jpg?c=2 80w, https://cdn11.bigcommerce.com/s-24232/images/stencil/160w/products/23/531/7__88951.1554449357.jpg?c=2 160w, https://cdn11.bigcommerce.com/s-24232/images/stencil/320w/products/23/531/7__88951.1554449357.jpg?c=2 320w, https://cdn11.bigcommerce.com/s-24232/images/stencil/640w/products/23/531/7__88951.1554449357.jpg?c=2 640w, https://cdn11.bigcommerce.com/s-24232/images/stencil/960w/products/23/531/7__88951.1554449357.jpg?c=2 960w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1280w/products/23/531/7__88951.1554449357.jpg?c=2 1280w, https://cdn11.bigcommerce.com/s-24232/images/stencil/1920w/products/23/531/7__88951.1554449357.jpg?c=2 1920w, https://cdn11.bigcommerce.com/s-24232/images/stencil/2560w/products/23/531/7__88951.1554449357.jpg?c=2 2560w"
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
                                            <a href="#">Apple
                                                In-Ear Headphones Glitter Bodycon Dress</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;79.00</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click" title="Add to Cart"
                                                    class="button button--small card-figcaption-button add-to-cart">Add
                                                    to Cart</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="23">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-23" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="23"
                                                        id="compare-23" data-compare-id="23">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                            <div class="productCarousel-slide">

                                <article class="card ">
                                    <figure class="card-figure">
                                        <a href="#">
                                            <div class="card-img-container">
                                                <img src="{{ asset('assets/user/img/s-24232/images/stencil/700x300/products/20/538/4__384634847.jpg?c=2') }}"
                                                    alt="Speck 13-inch Pivot Backpack (Black) Metallic"
                                                    title="Speck 13-inch Pivot Backpack (Black) Metallic"
                                                    data-sizes="auto"
                                                    srcset="{{ asset('assets/user/img/s-24232/images/stencil/80w/products/20/538/4__384634847.jpg?c=2') }}"
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
                                            <a href="#">Speck
                                                13-inch Pivot Backpack (Black) Metallic</a>
                                        </h4>

                                        <div class="card-text price-container" data-test-info-type="price">

                                            <div class="price-section price-section--withTax">
                                                <span class="price-now-label" style="display: none;">

                                                </span>
                                                <span data-product-price-with-tax
                                                    class="price price--withTax">&#8377;49.95</span>
                                            </div>
                                            <div class="price-section price-section--withTax non-sale-price--withTax"
                                                style="display: none;">

                                                <span data-product-non-sale-price-with-tax
                                                    class="price price--non-sale">

                                                </span>
                                            </div>
                                        </div>

                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-body">

                                                <a href="#"
                                                    data-event-type="product-click"
                                                    class="button button--small card-figcaption-button add-to-cart"
                                                    data-product-id="20">Choose Options</a>

                                                <a href="#" title="Quick view"
                                                    class="button button--small card-figcaption-button quickview"
                                                    data-product-id="20">Quick view</a>

                                                <div class="form-action wishlist-button">
                                                    <input type="hidden" name="variation_id" value="">
                                                    <a href="#"
                                                        id="form-action-addToWishlist"
                                                        class="button button--small card-figcaption-button  tm-wishlist"
                                                        title="Add to Wish List">Add to Wish List
                                                    </a>
                                                </div>

                                                <label class="button button--small card-figcaption-button"
                                                    for="compare-20" title="Compare">
                                                    Compare<input type="checkbox" name="products[]" value="20"
                                                        id="compare-20" data-compare-id="20">
                                                </label>
                                            </div>
                                        </figcaption>

                                    </div>


                                </article>
                            </div>
                        </section>
                        <div data-content-region="home_below_new_products"></div>
                    </div>
                    <div class="blog-posts">
                        <div class="big-title">
                            <div class="main-title">
                                <h2 class="page-heading myhead1">from the blogs</h2>
                            </div>
                        </div>
                        <div class="blogslider">
                            <div class="blog-item">
                                <div class="blog-inner">
                                    <div class="image-block">
                                        <img src="{{ asset('assets/user/img/s-24232/images/stencil/original/uploaded_images/464a4.jpg?t=1554118510') }}"
                                            alt="">
                                        <span class="image-block-hover">
                                            <span class="block-hover-icons">
                                                <a href="#"><i
                                                        class="fa fa-search"></i></a>
                                            </span>
                                        </span>

                                    </div>
                                    <div class="details-block">
                                        <div class="title"><a
                                                href="#">Lorem
                                                Ipsum is simply dummy text</a></div>
                                        <div class="date">1st April 2019</div>
                                        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem.Sed ut
                                            perspiciatis unde omnis iste</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-inner">
                                    <div class="image-block">
                                        <img src="{{ asset('assets/user/img/s-24232/images/stencil/original/uploaded_images/3458e.jpg?t=1555140680') }}"
                                            alt="">
                                        <span class="image-block-hover">
                                            <span class="block-hover-icons">
                                                <a href="#"><i
                                                        class="fa fa-search"></i></a>
                                            </span>
                                        </span>

                                    </div>
                                    <div class="details-block">
                                        <div class="title"><a
                                                href="#">Lorem Ipsum is
                                                simply dummy text</a></div>
                                        <div class="date">1st April 2019</div>
                                        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem.Sed ut perspiciatis unde omnis iste n</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-inner">
                                    <div class="image-block">
                                        <img src="{{ asset('assets/user/img/s-24232/images/stencil/original/uploaded_images/8a057.jpg?t=1553578817') }}"
                                            alt="">
                                        <span class="image-block-hover">
                                            <span class="block-hover-icons">
                                                <a href="#"><i
                                                        class="fa fa-search"></i></a>
                                            </span>
                                        </span>

                                    </div>
                                    <div class="details-block">
                                        <div class="title"><a href="#">Nostrum
                                                Iesum Christum</a></div>
                                        <div class="date">20th January 2017</div>
                                        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem.Sed ut
                                            perspiciatis unde omnis iste</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-inner">
                                    <div class="image-block">
                                        <img src="{{ asset('assets/user/img/s-24232/images/stencil/original/uploaded_images/10144f.jpg?t=1553578753') }}"
                                            alt="">
                                        <span class="image-block-hover">
                                            <span class="block-hover-icons">
                                                <a href="#"><i
                                                        class="fa fa-search"></i></a>
                                            </span>
                                        </span>

                                    </div>
                                    <div class="details-block">
                                        <div class="title"><a href="#">Nasual risus
                                                suscipit</a></div>
                                        <div class="date">20th January 2017</div>
                                        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem.Sed ut
                                            perspiciatis unde omnis iste</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-inner">
                                    <div class="image-block">
                                        <img src="{{ asset('assets/user/img/s-24232/images/stencil/original/uploaded_images/6e78f.jpg?t=1553578707') }}"
                                            alt="">
                                        <span class="image-block-hover">
                                            <span class="block-hover-icons">
                                                <a href="#"><i
                                                        class="fa fa-search"></i></a>
                                            </span>
                                        </span>

                                    </div>
                                    <div class="details-block">
                                        <div class="title"><a href="#">Urna risus
                                                suscipit</a></div>
                                        <div class="date">20th January 2017</div>
                                        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem.Sed ut perspiciatis unde omnis ist</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-inner">
                                    <div class="image-block">
                                        <img src="{{ asset('assets/user/img/s-24232/images/stencil/original/uploaded_images/11b28d.jpg?t=1553578899') }}"
                                            alt="">
                                        <span class="image-block-hover">
                                            <span class="block-hover-icons">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </span>
                                        </span>

                                    </div>
                                    <div class="details-block">
                                        <div class="title"><a href="#">My first News</a></div>
                                        <div class="date">3rd January 2014</div>
                                        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem.Sed ut
                                            perspiciatis unde omnis iste</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-content-region="home_below_blogs"></div>
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
                <div class="swal2-icon swal2-error swal2-icon-show"><span class="swal2-x-mark"><span
                            class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>
                </div>

                <div class="modal-content"></div>

                <div class="button-container"><button type="button" class="confirm button" data-reveal-close>OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.__webpack_public_path__ = "https://cdn11.bigcommerce.com/s-24232/stencil/5fe2b680-bba0-0138-8fe1-0242ac11000f/e/fe0f7ff0-a22d-0137-2996-0242ac11001d/dist/";
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
        window.stencilBootstrap("default", "{\"themeSettings\":{\"optimizedCheckout-formChecklist-color\":\"#333333\",\"homepage_new_products_column_count\":5,\"card--alternate-color--hover\":\"#ffffff\",\"optimizedCheckout-colorFocus\":\"#4496f6\",\"fontSize-root\":13,\"show_accept_amex\":true,\"optimizedCheckout-buttonPrimary-borderColorDisabled\":\"transparent\",\"homepage_top_products_count\":10,\"paymentbuttons-paypal-size\":\"responsive\",\"optimizedCheckout-buttonPrimary-backgroundColorActive\":\"#000000\",\"brandpage_products_per_page\":12,\"color-secondaryDarker\":\"#e8e8e8\",\"navUser-color\":\"#000000\",\"color-textBase--active\":\"#ffd200\",\"social_icon_placement_bottom\":\"bottom_none\",\"header-bottom-backgroundColor\":\"#1f4c94\",\"show_powered_by\":true,\"show_accept_amazonpay\":false,\"fontSize-h4\":20,\"checkRadio-borderColor\":\"#dfdfdf\",\"color-primaryDarker\":\"#2d2d2d\",\"optimizedCheckout-buttonPrimary-colorHover\":\"#ffffff\",\"brand_size\":\"190x250\",\"optimizedCheckout-logo-position\":\"left\",\"optimizedCheckout-discountBanner-backgroundColor\":\"#e5e5e5\",\"color-textLink--hover\":\"#ffd200\",\"pdp-sale-price-label\":\"\",\"optimizedCheckout-buttonSecondary-backgroundColorHover\":\"#f5f5f5\",\"optimizedCheckout-headingPrimary-font\":\"Google_Montserrat_400\",\"logo_size\":\"125x44\",\"footer-backgroundColor\":\"#2457aa\",\"navPages-color\":\"#ffffff\",\"productpage_reviews_count\":9,\"optimizedCheckout-step-borderColor\":\"#dddddd\",\"header-top-backgroundColor\":\"#2457aa\",\"optimizedCheckout-formField-backgroundColor\":\"#ffffff\",\"show_accept_paypal\":true,\"paymentbuttons-paypal-label\":\"checkout\",\"logo-font\":\"Google_Montserrat_300\",\"paymentbuttons-paypal-shape\":\"rect\",\"optimizedCheckout-discountBanner-textColor\":\"#333333\",\"optimizedCheckout-backgroundImage-size\":\"1000x400\",\"pdp-retail-price-label\":\"\",\"optimizedCheckout-buttonPrimary-font\":\"Google_Karla_400\",\"carousel-dot-color\":\"#000000\",\"button--disabled-backgroundColor\":\"#dadada\",\"blockquote-cite-font-color\":\"#a5a5a5\",\"sub-title-color\":\"#a5a5a5\",\"optimizedCheckout-formField-shadowColor\":\"#e5e5e5\",\"categorypage_products_per_page\":12,\"container-fill-base\":\"#ffffff\",\"paymentbuttons-paypal-layout\":\"vertical\",\"homepage_featured_products_column_count\":5,\"button--default-color\":\"#000000\",\"pace-progress-backgroundColor\":\"#a3a3a3\",\"color-textLink--active\":\"#ffd200\",\"optimizedCheckout-loadingToaster-backgroundColor\":\"#333333\",\"color-textHeading\":\"#000000\",\"show_accept_discover\":true,\"optimizedCheckout-formField-errorColor\":\"#d14343\",\"spinner-borderColor-dark\":\"#989898\",\"restrict_to_login\":false,\"input-font-color\":\"#454545\",\"select-bg-color\":\"#ffffff\",\"blog-title-color\":\"#2457aa\",\"show_accept_mastercard\":true,\"show_custom_fields_tabs\":false,\"color_text_product_sale_badges\":\"#000000\",\"optimizedCheckout-link-font\":\"Google_Karla_400\",\"homepage_show_carousel_arrows\":true,\"supported_payment_methods\":[\"card\",\"paypal\"],\"carousel-arrow-bgColor\":\"#ffffff\",\"lazyload_mode\":\"lazyload+lqip\",\"carousel-title-color\":\"#000000\",\"color_hover_product_sale_badges\":\"#ffd200\",\"show_accept_googlepay\":false,\"card--alternate-borderColor\":\"#ffffff\",\"homepage_new_products_count\":10,\"footer-top-textColor\":\"#ffd200\",\"button--disabled-color\":\"#ffffff\",\"color-primaryDark\":\"#454545\",\"color-grey\":\"#4c4c4c\",\"body-font\":\"Google_Poppins_400\",\"optimizedCheckout-step-textColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-borderColorActive\":\"transparent\",\"navPages-subMenu-backgroundColor\":\"#2457aa\",\"button--primary-backgroundColor\":\"#2457aa\",\"optimizedCheckout-formField-borderColor\":\"#cccccc\",\"checkRadio-color\":\"#4f4f4f\",\"show_product_dimensions\":false,\"optimizedCheckout-link-color\":\"#476bef\",\"card-figcaption-button-background\":\"#2457aa\",\"icon-color-hover\":\"#000000\",\"optimizedCheckout-headingSecondary-font\":\"Google_Montserrat_400\",\"headings-font\":\"Google_Poppins_400\",\"label-backgroundColor\":\"#bfbfbf\",\"service-title-hover-color\":\"#ffd200\",\"button--primary-backgroundColorHover\":\"#ffd200\",\"show_product_reviews\":true,\"button--default-borderColor\":\"#ffd200\",\"pdp-non-sale-price-label\":\"\",\"button--disabled-borderColor\":\"#dadada\",\"label-color\":\"#ffffff\",\"optimizedCheckout-headingSecondary-color\":\"#333333\",\"select-arrow-color\":\"#828282\",\"logo_fontSize\":28,\"alert-backgroundColor\":\"#ffffff\",\"optimizedCheckout-logo-size\":\"250x100\",\"default_image_brand\":\"/assets/img/BrandDefault.gif\",\"card-title-color\":\"#707070\",\"service-title-color\":\"#000000\",\"product_list_display_mode\":\"grid\",\"optimizedCheckout-link-hoverColor\":\"#002fe1\",\"fontSize-h5\":15,\"product_size\":\"700x659\",\"paymentbuttons-paypal-color\":\"gold\",\"homepage_show_carousel\":true,\"optimizedCheckout-body-backgroundColor\":\"#ffffff\",\"button--default-borderColorActive\":\"#2457aa\",\"paymentbuttons-paypal-tagline\":false,\"color-greyDarkest\":\"#000000\",\"color_badge_product_sale_badges\":\"#ffd200\",\"price_ranges\":true,\"container-border-global-color-dark\":\"#454545\",\"productpage_videos_count\":8,\"color-greyDark\":\"#666666\",\"optimizedCheckout-buttonSecondary-borderColorHover\":\"#999999\",\"optimizedCheckout-discountBanner-iconColor\":\"#333333\",\"carousel-arrow-bghoverColor\":\"#ffffff\",\"card-price-color\":\"#2457aa\",\"optimizedCheckout-loadingToaster-textColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorDisabled\":\"#ffffff\",\"optimizedCheckout-formField-placeholderColor\":\"#999999\",\"navUser-color-hover\":\"#ffd200\",\"icon-ratingFull\":\"#ffab00\",\"default_image_gift_certificate\":\"/assets/img/GiftCertificate.png\",\"optimizedCheckout-buttonSecondary-borderColor\":\"#cccccc\",\"service-subitle-color\":\"#979797\",\"color-textBase--hover\":\"#ffd200\",\"color-errorLight\":\"#ffdddd\",\"social_icon_placement_top\":false,\"blog_size\":\"800x800\",\"shop_by_price_visibility\":true,\"optimizedCheckout-buttonSecondary-colorActive\":\"#000000\",\"cms-link-hover-color\":\"#2457aa\",\"optimizedCheckout-orderSummary-backgroundColor\":\"#ffffff\",\"footer_font-family\":\"Google_Montserrat_400\",\"color-warningLight\":\"#fffdea\",\"show_product_weight\":true,\"button--default-colorActive\":\"#ffffff\",\"color-info\":\"#666666\",\"optimizedCheckout-formChecklist-backgroundColorSelected\":\"#f5f5f5\",\"show_product_quick_view\":true,\"button--default-borderColorHover\":\"#2457aa\",\"card--alternate-backgroundColor\":\"#ffd200\",\"hide_content_navigation\":false,\"pdp-price-label\":\"\",\"show_copyright_footer\":true,\"swatch_option_size\":\"22x22\",\"optimizedCheckout-orderSummary-borderColor\":\"#dddddd\",\"navPages-backgroundColor\":\"#ffffff\",\"optimizedCheckout-show-logo\":\"none\",\"carousel-description-color\":\"#000000\",\"optimizedCheckout-formChecklist-backgroundColor\":\"#ffffff\",\"fontSize-h2\":25,\"optimizedCheckout-step-backgroundColor\":\"#757575\",\"optimizedCheckout-headingPrimary-color\":\"#333333\",\"color-textBase\":\"#707070\",\"color-warning\":\"#d4cb49\",\"productgallery_size\":\"700x300\",\"bottom-footer-textColor\":\"#ebebeb\",\"alert-color\":\"#4f4f4f\",\"shop_by_brand_show_footer\":true,\"card-figcaption-button-color\":\"#ffffff\",\"searchpage_products_per_page\":12,\"color-textSecondary--active\":\"#ffd200\",\"optimizedCheckout-formField-inputControlColor\":\"#476bef\",\"optimizedCheckout-contentPrimary-color\":\"#333333\",\"optimizedCheckout-buttonSecondary-font\":\"Google_Karla_400\",\"storeName-color\":\"#4f4f4f\",\"optimizedCheckout-backgroundImage\":\"\",\"form-label-font-color\":\"#000000\",\"color-greyLightest\":\"#e8e8e8\",\"optimizedCheckout-header-backgroundColor\":\"#f7f7f7\",\"productpage_related_products_count\":10,\"optimizedCheckout-buttonSecondary-backgroundColorActive\":\"#e5e5e5\",\"color-textLink\":\"#000000\",\"color-greyLighter\":\"#dfdfdf\",\"color-secondaryDark\":\"#e8e8e8\",\"fontSize-h6\":13,\"paymentbuttons-paypal-fundingicons\":false,\"carousel-arrow-color\":\"#000000\",\"productpage_similar_by_views_count\":10,\"show-admin-bar\":true,\"pdp-custom-fields-tab-label\":\"Additional Information\",\"loadingOverlay-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-color\":\"#ffffff\",\"input-bg-color\":\"#ffffff\",\"navPages-subMenu-separatorColor\":\"#2b69cc\",\"navPages-color-hover\":\"#ffd200\",\"color-infoLight\":\"#dfdfdf\",\"product_sale_badges\":\"topleft\",\"default_image_product\":\"/assets/img/ProductDefault.gif\",\"navUser-dropdown-borderColor\":\"#ededed\",\"optimizedCheckout-buttonPrimary-colorActive\":\"#ffffff\",\"color-greyMedium\":\"#989898\",\"optimizedCheckout-formChecklist-borderColor\":\"#cccccc\",\"feature-background-color\":\"#f7f7f7\",\"fontSize-h1\":20,\"homepage_featured_products_count\":10,\"color-greyLight\":\"#a5a5a5\",\"optimizedCheckout-logo\":\"\",\"icon-ratingEmpty\":\"#d3d3d3\",\"show_product_details_tabs\":true,\"icon-color\":\"#ffffff\",\"button--default-backgroundColorHover\":\"#2457aa\",\"overlay-backgroundColor\":\"#2d2d2d\",\"input-border-color-active\":\"#989898\",\"hide_contact_us_page_heading\":false,\"container-fill-dark\":\"#f7f7f7\",\"optimizedCheckout-buttonPrimary-backgroundColorDisabled\":\"#cccccc\",\"button--primary-color\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-borderColorHover\":\"transparent\",\"color-successLight\":\"#d5ffd8\",\"button--default-backgroundColor\":\"#ffd200\",\"color-greyDarker\":\"#454545\",\"show_product_quantity_box\":true,\"color-success\":\"#69d66f\",\"optimizedCheckout-header-borderColor\":\"#dddddd\",\"zoom_size\":\"1280x1280\",\"color-white\":\"#ffffff\",\"optimizedCheckout-buttonSecondary-backgroundColor\":\"#ffffff\",\"productview_thumb_size\":\"100x100\",\"fontSize-h3\":22,\"spinner-borderColor-light\":\"#ffffff\",\"geotrust_ssl_common_name\":\"\",\"carousel-bgColor\":\"#ffffff\",\"carousel-dot-color-active\":\"#666666\",\"input-border-color\":\"#dfdfdf\",\"optimizedCheckout-buttonPrimary-backgroundColor\":\"#333333\",\"color-secondary\":\"#ffffff\",\"card-figcaption-button-color-hover\":\"#000000\",\"button--primary-backgroundColorActive\":\"#ffd200\",\"color-textSecondary--hover\":\"#ffd200\",\"color-whitesBase\":\"#f8f8f8\",\"body-bg\":\"#ffffff\",\"dropdown--quickSearch-backgroundColor\":\"#ffffff\",\"optimizedCheckout-contentSecondary-font\":\"Google_Karla_400\",\"navUser-dropdown-backgroundColor\":\"#ffffff\",\"color-primary\":\"#ededed\",\"optimizedCheckout-contentPrimary-font\":\"Google_Karla_400\",\"card-figcaption-button-backgroundHover\":\"#ffd200\",\"supported_card_type_icons\":[\"american_express\",\"diners\",\"discover\",\"mastercard\",\"visa\"],\"navigation_design\":\"simple\",\"optimizedCheckout-formField-textColor\":\"#333333\",\"color-black\":\"#000000\",\"homepage_top_products_column_count\":4,\"hide_page_heading\":false,\"optimizedCheckout-buttonSecondary-colorHover\":\"#333333\",\"button--primary-colorActive\":\"#000000\",\"homepage_stretch_carousel_images\":false,\"optimizedCheckout-contentSecondary-color\":\"#757575\",\"card-title-color-hover\":\"#000000\",\"applePay-button\":\"black\",\"thumb_size\":\"100x100\",\"hide_breadcrumbs\":false,\"show_accept_klarna\":false,\"optimizedCheckout-buttonPrimary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonSecondary-borderColorActive\":\"#757575\",\"hide_blog_page_heading\":false,\"optimizedCheckout-header-textColor\":\"#333333\",\"hide_category_page_heading\":false,\"optimizedCheckout-show-backgroundImage\":false,\"color-primaryLight\":\"#a5a5a5\",\"navUser-indicator-backgroundColor\":\"#ffd200\",\"banner-text-color\":\"#ffffff\",\"show_accept_visa\":true,\"logo-position\":\"left\",\"show_product_reviews_tabs\":false,\"carousel-dot-bgColor\":\"#d3d3d3\",\"optimizedCheckout-form-textColor\":\"#666666\",\"optimizedCheckout-buttonSecondary-color\":\"#333333\",\"geotrust_ssl_seal_size\":\"M\",\"button--icon-svg-color\":\"#ffffff\",\"alert-color-alt\":\"#ffffff\",\"footer-textColor\":\"#ebebeb\",\"button--default-colorHover\":\"#ffffff\",\"checkRadio-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-backgroundColorHover\":\"#666666\",\"input-disabled-bg\":\"#ffffff\",\"carousel-arrow-colorHover\":\"#ffd200\",\"dropdown--wishList-backgroundColor\":\"#2457aa\",\"container-border-global-color-base\":\"#ededed\",\"productthumb_size\":\"100x100\",\"button--primary-colorHover\":\"#000000\",\"color-error\":\"#ff7d7d\",\"color-textSecondary\":\"#000000\",\"gallery_size\":\"300x300\",\"homepage_blog_posts_count\":6,\"cms-link-color\":\"#989898\"},\"genericError\":\"Oops! Something went wrong.\",\"maintenanceModeSettings\":[],\"adminBarLanguage\":\"{\\\"locale\\\":\\\"en\\\",\\\"locales\\\":{\\\"admin.maintenance_header\\\":\\\"en\\\",\\\"admin.maintenance_tooltip\\\":\\\"en\\\",\\\"admin.maintenance_showstore_link\\\":\\\"en\\\",\\\"admin.prelaunch_header\\\":\\\"en\\\",\\\"admin.page_builder_link\\\":\\\"en\\\"},\\\"translations\\\":{\\\"admin.maintenance_header\\\":\\\"Your store is down for maintenance.\\\",\\\"admin.maintenance_tooltip\\\":\\\"Only administrators can view the store at the moment. Visit your control panel settings page to disable maintenance mode.\\\",\\\"admin.maintenance_showstore_link\\\":\\\"Click here to see what your visitors will see.\\\",\\\"admin.prelaunch_header\\\":\\\"Your storefront is private. Share your site with preview code:\\\",\\\"admin.page_builder_link\\\":\\\"Design this page in Page Builder\\\"}}\",\"urls\":{\"home\":\"index.html\",\"account\":{\"index\":\"/account.php\",\"orders\":{\"all\":\"logind1fa.html?action=order_status\",\"completed\":\"login91d7.html?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"update_action\":\"login83b1.html?action=update_account\",\"returns\":\"logine921.html?action=view_returns\",\"addresses\":\"login479d.html?action=address_book\",\"inbox\":\"login5df3.html?action=inbox\",\"send_message\":\"login1273.html?action=send_message\",\"add_address\":\"logindda8.html?action=add_shipping_address\",\"wishlists\":{\"all\":\"/wishlist.php\",\"add\":\"login5946.html?action=addwishlist\",\"edit\":\"login1c39.html?action=editwishlist\",\"delete\":\"/wishlist.php?action=deletewishlist\"},\"details\":\"login8e0b.html?action=account_details\",\"recent_items\":\"/account.php?action=recent_items\"},\"brands\":\"brands/index.html\",\"gift_certificate\":{\"purchase\":\"/giftcertificates.php\",\"redeem\":\"giftcertificatese8f7.html?action=redeem\",\"balance\":\"/giftcertificates.php?action=balance\"},\"auth\":{\"login\":\"/login.php\",\"check_login\":\"loginb320.html?action=check_login\",\"create_account\":\"logind85d.html?action=create_account\",\"save_new_account\":\"login5485.html?action=save_new_account\",\"forgot_password\":\"login8311.html?action=reset_password\",\"send_password_email\":\"login4104.html?action=send_password_email\",\"save_new_password\":\"logina61b.html?action=save_new_password\",\"logout\":\"/login.php?action=logout\"},\"product\":{\"post_review\":\"/postreview.php\"},\"cart\":\"/cart.php\",\"checkout\":{\"single_address\":\"/checkout\",\"multiple_address\":\"/checkout.php?action=multiple\"},\"rss\":{\"products\":[]},\"contact_us_submit\":\"pages187d.html?action=sendContactForm\",\"search\":\"/search.php\",\"compare\":\"/compare\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}},\"secureBaseUrl\":\"index.html\",\"cartId\":null,\"channelId\":1,\"template\":\"pages/home\"}").load();
    </script>

    <script type="text/javascript"
        src="{{ asset('assets/user/js/csrf-protection-header-5eeddd5de78d98d146ef4fd71b2aedce4161903e.js') }}"></script>

</body>
@endsection