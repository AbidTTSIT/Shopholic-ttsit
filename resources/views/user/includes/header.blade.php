  <header class="header header-logo--left site-header-fix header_home" role="banner">
      <div data-content-region="header_top"></div>
      <div class="navigation site-header">

          <div class="header-right">
              <div class="container">
                  <div class="header-top">
                      <div class="header-left">
                          <h1 class="header-logo header-logo--left">
                              <a href="{{ route('home') }}">
                                  <div class="header-logo-image-container">
                                      <img class="header-logo-image"
                                          src="https://shopholic.co.in/assets/img/logo-width.png"
                                          alt="TemplateMela Store">
                                  </div>
                              </a>
                          </h1>

                      </div>
                  </div>


                  <!--span class="removeSearch"><span aria-hidden="true">&#215;</span></span-->


                  <!--<div class="tm-container tm-search-wrapper">-->
                  <!-- snippet location forms_search -->


                  <div class="dropdown dropdown--quickSearch" id="quickSearch" aria-hidden="true" tabindex="-1">
                      <div class="container">
                          <span class="removeSearch"><span aria-hidden="true">&#215;</span></span>
                          <section class="quickSearchResults" data-bind="html: results"></section>
                      </div>
                  </div>

                  <!--</div>-->


                  <div class="header-bottom-right">
                      <div class="header-bottom-right-top">
                          <div class="header-search-bottom">
                              <div class="home_serach"> <!-- Search from nav-menu html page -->
                                  <ul class="navPages-list">
                                      <li class="navUser-item">
                                          <div class="tm-container tm-search-wrapper">
                                              <fieldset class="form-fieldset">
                                                  <div class="form-field">
                                                      <div class="header-search-btn"></div>
                                                      <form class="form search-header"
                                                          action="https://tmdemo10.mybigcommerce.com/search.php">
                                                          <div class="main-serch" data-prevent-quick-search-close>
                                                              <input class="form-input searchbtn" data-search-quick
                                                                  name="search_query" id="search_query"
                                                                  data-error-message="Search field cannot be empty."
                                                                  placeholder="Search the store" autocomplete="off">
                                                              <button type="submit"
                                                                  class="button button--primary searchbtn"
                                                                  value="Search"><i class="fa fa-search"></i></button>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </fieldset>

                                          </div>
                                      </li>

                                  </ul>
                              </div>
                          </div>

                          <div class="header-cms-service">
                              <div class="contact-block">
                                  <div class="contact-icon"></div>
                                  <div class="contact-block-inner">
                                      <div class="contact-text text1">Contact</div>
                                      <div class="contact-text text2">0123-456-789</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div data-content-region="header_bottom"></div>
              </div>
          </div>
          <div data-content-region="header_below_siteheader"></div>
          <div class="header-bottom">

              <div class="container">
                  <div class="category-list">
                      <div class="box-category-heading">
                          <div class="box-category">
                              <div class="category-text">
                                  <span class="text1">Shop By</span>
                                  <span class="text2"> categories </span>
                              </div>
                          </div>
                          <div class="sidebarBlock">
                              <!-- <h5 class="sidebarBlock-heading">Categories</h5>-->

                              <div class="catgory-left">
                                  <div class="category-lfet-box">

                                      <ul class="navList level-0">
                                          @foreach ($categories as $category)
                                          <li class="navList-item level-0">
                                              <a class="navList-action" href="#">{{ $category->name }}</a>
                                              @if($category->subcategories->count())
                                              <div class="right-angle">
                                                  <i class="icon" aria-hidden="true">
                                                      <svg>
                                                          <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                              xlink:href="#icon-chevron-right"></use>
                                                      </svg>
                                                  </i>
                                              </div>
                                              <div class="plus_minus">
                                                  <svg class="icon_plus">
                                                      <use xlink:href="#icon-add" />
                                                  </svg>
                                                  <svg class="icon_minus">
                                                      <use xlink:href="#icon-remove" />
                                                  </svg>
                                              </div>


                                              @foreach($category->subcategories as $subcategory)
                                              <div class="my_dropdown-menu column3 has-subbanner">
                                                  <div class="my_dropdown-inner">
                                                      <ul class="navList category level-1">
                                                          <li class="navList-item level-1">
                                                              <a class="navList-action"
                                                                  href="#">Accessories</a>
                                                              <div class="right-angle">
                                                                  <i class="icon" aria-hidden="true">
                                                                      <svg>
                                                                          <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              xlink:href="#icon-chevron-right"></use>
                                                                      </svg>
                                                                  </i>

                                                              </div>
                                                              <div class="plus_minus">
                                                                  <svg class="icon_plus">
                                                                      <use xlink:href="#icon-add" />
                                                                  </svg>
                                                                  <svg class="icon_minus">
                                                                      <use xlink:href="#icon-remove" />
                                                                  </svg>
                                                              </div>
                                                              <div class="my_dropdown-menu">
                                                                  <div class="my_dropdown-inner">
                                                                      <ul class="navList category level-2"
                                                                          id="navPages-4">
                                                                          @foreach ($category->subcategories as $data)
                                                                          <li class="navList-item level-2">
                                                                              <a class="navList-action"
                                                                                  href="#">{{ $data->name }}</a>
                                                                          </li>
                                                                          @endforeach
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </li>

                                                      </ul>
                                                  </div>
                                              </div>
                                              @endforeach
                                              @endif
                                          </li>
                                          @endforeach
                                      </ul>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="navPages-container" id="menu" data-menu>
                      <nav class="navPages">
                          <div class="menu-inner">
                              <div class="header-bottom-left">
                                  <div class="header-center-bottom" id="menu" data-menu">
                                      <div class="menu-content">
                                          <div class="navPages-quickSearch">
                                              <form class="form"
                                                  action="https://tmdemo10.mybigcommerce.com/search.php">
                                                  <div class="main-serch" data-prevent-quick-search-close>
                                                      <input class="form-input" data-search-quick name="search_query"
                                                          id="search_query"
                                                          data-error-message="Search field cannot be empty."
                                                          placeholder="Search the store" autocomplete="off">
                                                      <input type="submit" class="button button--primary searchbtn"
                                                          value="Search">
                                                  </div>
                                              </form>
                                              <!--span class="removeSearch"><span aria-hidden="true">&#215;</span></span-->


                                              <!--<div class="tm-container tm-search-wrapper">-->
                                              <!-- snippet location forms_search -->


                                              <div class="dropdown dropdown--quickSearch" id="quickSearch"
                                                  aria-hidden="true" tabindex="-1">
                                                  <div class="container">
                                                      <span class="removeSearch"><span
                                                              aria-hidden="true">&#215;</span></span>
                                                      <section class="quickSearchResults" data-bind="html: results">
                                                      </section>
                                                  </div>
                                              </div>

                                              <!--</div>-->


                                          </div>
                                          <ul class="navPages-list navigation-menu test ">

                                              <li class="navPages-item navPages-item-page">
                                                  <a class="navPages-action" href="{{ route('home') }}">Home</a>
                                              </li>
                                              <li class="navPages-item navPages-item-page">
                                                  <a class="navPages-action"
                                                      href="#">contact-us</a>
                                              </li>

                                          </ul>
                                          <ul class="navPages-list navPages-list--user">
                                              <li class="navPages-item">
                                                  <a class="navPages-action" href="#">Gift
                                                      Certificates</a>
                                              </li>


                                              <a class="navPages-action" href="#">Login</a>
                                              <!-- <span class="navUser-or"></span>  -->
                                              <a class="navPages-action"
                                                  href="#">Sign Up</a>
                                      </div>
                                  </div>
                      </nav>
                  </div>
                  <a href="#" class="mobileMenu-toggle" data-mobile-menu-toggle="menu">
                      <span class="mobileMenu-toggleIcon">Toggle menu</span>
                  </a>

                  <div class="header-bottom-account">
                      <div class="account-text">
                          <div class="account-label"><a href="#">Sign In</a></div>
                          <div class="account-contents">Account</div>
                      </div>
                      <ul class="my-account">

                          <ul class="navUser-section navUser-section--alt">


                              <li class="navUser-item navUser-item--account">
                                  <a class="navUser-action" href="#">Login</a>
                                  <!-- <span class="navUser-or"></span>  -->
                                  <a class="navUser-action" href="#">Sign Up</a>
                              </li>
                          </ul>

                      </ul>

                  </div>

                  <div class="navUser-item compare">
                      <div class="account-label">
                          <a class="navUser-item--compare" href="#" data-compare-nav><span
                                  class="countPill countPill--positive countPill--alt"></span></a>
                      </div>
                  </div>
                  <div class="header-bottom-wishlist">
                      <a href="#" class="header-wishlist" title="Add to Wish List">
                      </a>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </header>