  <footer class="footer" role="contentinfo">
        <section class="footer-info">
            <div data-content-region="home_footer_top"></div>
            <div class="container">
                <article class="footer-info-col footer-info-col--small" data-section-type="footer-webPages">
                    <h5 class="footer-info-heading">Navigation</h5>
                    <ul class="footer-info-list">
                        <li>
                            <a href="#">contact-us</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Sitemap</a>
                        </li>
                    </ul>
                </article>
                <article class="footer-info-col footer-info-col--small" data-section-type="footer-brands">
                    <h5 class="footer-info-heading">Popular Brands</h5>
                    <ul class="footer-info-list">
                        <li>
                            <a href="#">Apple</a>
                        </li>
                        <li>
                            <a href="#">Elgato</a>
                        </li>
                        <li>
                            <a href="#">Microsoft</a>
                        </li>
                        <li>
                            <a href="#">Crumpler</a>
                        </li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </article>

                <article class="footer-info-col footer-info-col--small link2" data-section-type="footer-categories">
                    <h5 class="footer-info-heading">Categories</h5>
                    <ul class="footer-info-list">
                        <li>
                            <a href="#">Shop Mac</a>
                        </li>
                        <li>
                            <a href="#">Shop Phone</a>
                        </li>
                        <li>
                            <a href="#">Video Devices</a>
                        </li>
                        <li>
                            <a href="#">Shop Alexaa</a>
                        </li>
                        <li>
                            <a href="#">Shop software</a>
                        </li>
                        <li>
                            <a href="#">Clothes</a>
                        </li>
                        <li>
                            <a href="#">beauty &amp; grooming</a>
                        </li>
                        <li>
                            <a href="#">sling bags</a>
                        </li>
                        <li>
                            <a href="#">Shop iPod</a>
                        </li>
                        <li>
                            <a href="#">Shop Notepad</a>
                        </li>
                        <li>
                            <a href="#">Shop LCD</a>
                        </li>
                        <span class="#">View All</span>
                    </ul>
                </article>
                <script type="text/javascript">
                    (function () {
                        ('.tmread-more').click(function () {
                            ('.link2 li:hidden').slice(0, 2).show();
                            if ($('.link2 li').length == $('.link2 li:visible').length) {
                                $('.tmread-more ').hide();
                            }
                        });
                    });
                </script>

                <article class="footer-info-col footer-info-col--small store-info" data-section-type="storeInfo">
                    <h5 class="footer-info-heading company-info">Information</h5>
                    <div class="footer-info-list">
                        <li class="footer-address">
                            <address>Acme Widgets 123 Widget Street Acmeville, AC 12345 United States of America.
                            </address>
                        </li>
                        <li class="footer-phone">
                            <div class="phone-inner">0123-456-789</div>
                        </li>
                        <li class="footer-email">
                            <a target="_black" href="mailto:" class="email-inner">shopholic@gmail.com</a>
                        </li>
                    </div>
                </article>

                <article class="footer-info-col footer-info-col--small newsletter-container">

                    <div class="footer-newsletter" data-section-type="newsletterSubscription">
                        <div class="footer-newsletters-block">
                            <h5 class="footer-info-heading"> newsletter </h5>

                            <div class="footer-info-list newsletter-content-outer">
                                <span>Subscribe to our newsletter get 10% off your first purchase at here for
                                    update</span>
                                <form class="form" action="#"
                                    method="post">
                                    <fieldset class="form-fieldset">
                                        <input type="hidden" name="action" value="subscribe">
                                        <input type="hidden" name="nl_first_name" value="bc">
                                        <input type="hidden" name="check" value="1">
                                        <div class="form-field">
                                            <label class="form-label is-srOnly" for="nl_email">Email Address</label>
                                            <div class="form-prefixPostfix wrap">
                                                <input class="form-input" id="nl_email" name="nl_email" type="email"
                                                    value="" placeholder="Your email address">
                                                <input class="button button--primary form-prefixPostfix-button--postfix"
                                                    type="submit" value="Subscribe">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                </article>

            </div>
        </section>

        <!--  news letter  -->
        <!-- container class ends -->

        <div data-content-region="home_below_footer_info"></div>
        <div class="footer-bottom" data-section-type="footer-webPages">


            <div class="container">
                <ul class="footer-info-list  bottom-link">
                    <li>
                        <a href="#">contact-us</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Sitemap</a>
                    </li>
                </ul>
                <div class="footer-copyright">
                    <!-- <div class="footer-copyright"> -->
                    <p class="powered-by">&copy; <span id="copyright_year"></span> Shopholic Store. </p>
                    <!-- <p class="powered-by">&copy; 2025 TemplateMela Store </p> -->
                    <!-- </div> -->
                    <script type="text/javascript">
                        document.getElementById("copyright_year").innerHTML = new Date().getFullYear();
                    </script>
                    <!-- <div class="footer-copyright"> -->
                    <p class="powered-by"> Powered by <a
                            href="#"
                            rel="nofollow">TTSIT</a></p>
                    <!-- </div> -->
                </div>
                <div class="footer-payment-icons">
                    <svg class="footer-payment-icon">
                        <use xlink:href="#icon-logo-american-express"></use>
                    </svg>
                    <svg class="footer-payment-icon">
                        <use xlink:href="#icon-logo-discover"></use>
                    </svg>
                    <svg class="footer-payment-icon">
                        <use xlink:href="#icon-logo-mastercard"></use>
                    </svg>
                    <svg class="footer-payment-icon">
                        <use xlink:href="#icon-logo-paypal"></use>
                    </svg>
                    <svg class="footer-payment-icon">
                        <use xlink:href="#icon-logo-visa"></use>
                    </svg>
                </div>
            </div>
        </div>
        <!--<div>-->
        <div data-content-region="home_below_footer_bottom"></div>
        <a href="#" class="scrollup"></a>
    </footer>