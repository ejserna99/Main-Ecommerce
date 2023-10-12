<header class="pb-md-4 pb-0">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                            <span class="navbar-toggler-icon">
                                <i class="fa-solid fa-bars"></i>
                            </span>
                        </button>
                        <a href="{{ route('home') }}" class="web-logo nav-logo">
                            <img src="{{ $logo }}" class="img-fluid blur-up lazyload"
                                alt="{{ shopper_setting('shop_name') }}" style="max-height: 50px;">
                        </a>

                        <div class="middle-box">
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="I'm searching for..."
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn" type="button" id="button-addon2">
                                        <i data-feather="search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box">
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <a href="contact-us.html" class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="phone-call"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>Entrega 24/7</h6>
                                            <h5>{{ shopper_setting('shop_phone_number') }}</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                <li class="right-side">
                                    @livewire('site.components.cart.cart-header')
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>Hello,</h6>
                                            <h5>My Account</h5>
                                        </div>
                                    </div>

                                    <div class="onhover-div onhover-div-login">
                                        <ul class="user-box-name">
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="login.html">Log In</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="sign-up.html">Register</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="forgot.html">Forgot Password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="header-nav">
                    <div class="header-nav-left w-25">
                        <button class="dropdown-category">
                            <i data-feather="align-left"></i>
                            <span>Categorías</span>
                        </button>

                        <div class="category-dropdown" style="width: 330px;">
                            <div class="category-title">
                                <h5>Categorías</h5>
                                <button type="button" class="btn p-0 close-button text-content">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <ul class="category-list">
                                @foreach ($this->categories as $category)
                                    <li class="onhover-category-list">
                                        <a href="{{ route('category.show', $category->slug) }}" class="category-name">
                                            <img src="{{ $category->getFirstMediaUrl($storageName) }}"
                                                alt="{{ $category->name }}">
                                            <h6>{{ $category->name }}</h6>

                                            @if ($category->children->count() > 0)
                                                <i class="fa-solid fa-angle-right"></i>
                                            @endif
                                        </a>

                                        @if ($category->children->count() > 0)
                                            <div class="onhover-category-box" style="width: 350px;">
                                                <div class="list-1">
                                                    <ul>
                                                        @foreach ($category->children as $children)
                                                            <li>
                                                                <a
                                                                    href="{{ route('category.show', $children->slug) }}">{{ $children->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="header-nav-middle w-75 d-none d-xl-block">
                        <div class="main-nav navbar navbar-expand-lg navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menú</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item mx-2">
                                            <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                                        </li>

                                        <li class="nav-item dropdown mx-2">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Shop</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="shop-category-slider.html">Shop
                                                        Category Slider</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-category.html">Shop
                                                        Category Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-banner.html">Shop
                                                        Banner</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop
                                                        Left
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop
                                                        Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top
                                                        Filter</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown mx-2">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Product</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="product-4-image.html">Product
                                                        4 Image</a>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a href="javascript:void(0)" class="dropdown-item">Product
                                                        Thumbnail</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="product-left-thumbnail.html">Left
                                                                Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-right-thumbnail.html">Right
                                                                Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-bottom-thumbnail.html">Bottom
                                                                Thumbnail</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-bundle.html" class="dropdown-item">Product
                                                        Bundle</a>
                                                </li>
                                                <li>
                                                    <a href="product-slider.html" class="dropdown-item">Product
                                                        Slider</a>
                                                </li>
                                                <li>
                                                    <a href="product-sticky.html" class="dropdown-item">Product
                                                        Sticky</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown dropdown-mega mx-2">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Mega Menu</a>

                                            <div class="dropdown-menu dropdown-menu-2">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Daily Vegetables</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans
                                                            &
                                                            Brinjals</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a href="shop-left-sidebar.html"
                                                            class="dropdown-item">Chilies,
                                                            Garlic</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Gourd,
                                                            Cucumber</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Herbs
                                                            &
                                                            Sprouts</a>

                                                        <a href="demo-personal-portfolio.html"
                                                            class="dropdown-item">Lettuce
                                                            & Leafy</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Baby Tender</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans
                                                            &
                                                            Brinjals</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Chilies,
                                                            Garlic</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Gourd,
                                                            Cucumber</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Potatoes
                                                            & Tomatoes</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">Peas
                                                            &
                                                            Corn</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Exotic Vegetables</h5>
                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Asparagus
                                                            & Artichokes</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Avocados
                                                            & Peppers</a>

                                                        <a class="dropdown-item"
                                                            href="shop-left-sidebar.html">Broccoli
                                                            & Zucchini</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Celery,
                                                            Fennel & Leeks</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Chilies
                                                            &
                                                            Lime</a>
                                                    </div>

                                                    <div class="dropdown-column dropdown-column-img col-3"></div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown mx-2">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog-detail.html">Blog
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown new-nav-item mx-2">
                                            <label class="new-dropdown">New</label>
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Email
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a
                                                                href="../email-templete/abandonment-email.html">Abandonment</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/offer-template.html">Offer
                                                                Template</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/order-success.html">Order
                                                                Success</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/reset-password.html">Reset
                                                                Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/welcome.html">Welcome
                                                                template</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Invoice
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="../invoice/invoice-1.html">Invoice 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="../invoice/invoice-2.html">Invoice 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="../invoice/invoice-3.html">Invoice 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="contact-us.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="coming-soon.html">Coming
                                                        Soon</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-success.html">Order
                                                        Success</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-tracking.html">Order
                                                        Tracking</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="otp.html">OTP</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="search.html">Search</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="user-dashboard.html">User
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown mx-2">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Seller</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="seller-become.html">Become a
                                                        Seller</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-dashboard.html">Seller
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail.html">Seller
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail-2.html">Seller
                                                        Detail 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid.html">Seller
                                                        Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid-2.html">Seller Grid
                                                        2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-right">
                        <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                            <i data-feather="zap"></i>
                            <span>Deal Today</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
