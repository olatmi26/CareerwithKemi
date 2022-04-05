<div class="header-column justify-content-end">
    <div class="header-row">
        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
            <div
                class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index-page') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index-page') }}">

                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle active" href="#">
                               About
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('page', 'about-us') }}">About me</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('page', 'contact-us') }}">Contact me</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('page', 'privacy-policy') }}">Privacy policy</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle active" href="#">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="feature-gdpr.html">Consultation</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="feature-gdpr.html">Employeer's Corner</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="feature-gdpr.html">Job Seekers</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="feature-gdpr.html">Testimonies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item" href="#">
                                HR Mentorship
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                                Resume Builder
                                <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Build My Resume<i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Exprienced Professional</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Fresh Graduate </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Student</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                       
                        <li class="nav-item">
                            <a class="nav-item" href="#">
                                Blog
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">e-books</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Resume Builders</a>
                                </li>
                                <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                                <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                                Clients
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Sign In</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Register</a>
                                </li>
                                <li><a class="dropdown-item" href="shop-cart.html">My Dashboard</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i
                        class="fas fa-search header-nav-top-icon"></i></a>
                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed"
                    id="headerTopSearchDropdown">
                    <form role="search" action="page-search-results.html" method="get">
                        <div class="simple-search input-group">
                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value=""
                                placeholder="Search...">
                            <button class="btn" type="submit">
                                <i class="fas fa-search header-nav-top-icon"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">
                <a href="#" class="header-nav-features-toggle">
                    <img src="{{ asset('images/icon-svg/icon-cart-light.svg')}}" width="14" alt=""
                        class="header-nav-top-icon-img">
                    @livewire('cart-item-counter')
                </a>
                @livewire('cart-item')

            </div>
        </div>
    </div>
</div>
