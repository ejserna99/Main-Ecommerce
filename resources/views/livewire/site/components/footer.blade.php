<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('svg/delivery.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Entrega gratuita para pedidos superiores a $50,000</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('svg/discount.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Megadescuentos diarios</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('svg/market.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>El mejor precio del mercado</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ $logo }}" class="blur-up lazyload"
                                    alt="{{ shopper_setting('shop_name') }}" style="max-height: 50px;">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            {!! shopper_setting('shop_about') !!}

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="javascript:void(0)">{{ shopper_setting('shop_street_address') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Categorías</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            @foreach ($this->categories as $category)
                                <li>
                                    <a href="{{ route('category.show', $category->slug) }}" class="text-content">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Enlaces útiles</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="text-content">Inicio</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Shop</a>
                            </li>
                            <li>
                                <a href="about-us.html" class="text-content">About Us</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="text-content">Blog</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-content">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Help Center</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="order-success.html" class="text-content">Your Order</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="text-content">Your Account</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="text-content">Track Order</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="text-content">Your Wishlist</a>
                            </li>
                            <li>
                                <a href="search.html" class="text-content">Search</a>
                            </li>
                            <li>
                                <a href="faq.html" class="text-content">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Contáctenos</h4>
                    </div>

                    <div class="footer-contact">
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Línea directa 24/7:</h6>
                                        <h5>
                                            <a
                                                href="tel:{{ shopper_setting('shop_phone_number') }}">{{ shopper_setting('shop_phone_number') }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Correo electrónico:</h6>
                                        <h5>
                                            <a
                                                href="mailto:{{ shopper_setting('shop_email') }}">{{ shopper_setting('shop_email') }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="reserve">
                <h6 class="text-content">©{{ $year }} <a href="https://pixxeles.com" target="_blank"
                        rel="noopener noreferrer">Pixxeles</a> Todos los derechos reservados
                </h6>
            </div>

            <div class="payment">
                <img src="{{ asset('img/payment/1.png') }}" class="blur-up lazyload" alt="Métodos de pago">
            </div>

            @if (shopper_setting('shop_facebook_link') ||
                    shopper_setting('shop_instagram_link') ||
                    shopper_setting('shop_twitter_link'))
                <div class="social-link">
                    <h6 class="text-content">Mantente conectado:</h6>
                    <ul>
                        @if ($link = shopper_setting('shop_facebook_link'))
                            <li>
                                <a href="{{ $link }}" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                        @endif

                        @if ($link = shopper_setting('shop_instagram_link'))
                            <li>
                                <a href="{{ $link }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        @endif

                        @if ($link = shopper_setting('shop_twitter_link'))
                            <li>
                                <a href="{{ $link }}" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </div>
</footer>
