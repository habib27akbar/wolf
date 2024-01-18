<header class="header-style-two">
        <!-- Header Middle Start Here -->
            <div class="header-middle white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-12 order-3 order-lg-1">
                            <div class="categorie-search-box">
                                {{-- <form action="#">
                                    <input type="text" name="search" placeholder="Search entire store here...">
                                    <button><span class="pe-7s-search"></span></button>
                                </form> --}}
                            </div>
                        </div>
                        <!-- Categorie Search Box End Here -->
                        <!-- Logo Start -->
                        <div class="col-xl-6 col-lg-4 col-md-5 col-sm-12 order-1 order-lg-2">
                            <div class="logo text-center text-md-start text-lg-center mt-sm-35">
                                <a href="index.html"><img src="{{ asset('img/logo/logo-wolf-sementara.jpg') }}" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Cart Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-5  col-sm-7 order-2 order-lg-3">
                            <div class="cart-box">
                                <div class="single-support d-flex align-items-center">
                                    <div class="support-icon">
                                        <img src="{{ asset('img/support/s4.png') }}" alt="support-icon">
                                    </div>
                                    <div class="support-desc">
                                        <h6>Help & Support</h6>
                                        <span>Call us : + 0123.4567.89</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                    <!-- Mobile Menu Start Here -->
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">home</a>
                                   
                                </li>
                                <li><a href="#">furniture</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <li><a href="#">living</a>
                                            <!-- Watches Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">sofa set</a></li>
                                                <li><a href="shop.html">corner table</a></li>
                                                <li><a href="shop.html">center table</a></li>
                                                <li><a href="shop.html">tv cabine</a></li>
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li><a href="#">bedroom</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">bed room sofa</a></li>
                                                <li><a href="shop.html">bed drawer</a></li>
                                                <li><a href="shop.html">bed side table</a></li>
                                                <li><a href="shop.html">dressing table</a></li>
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li><a href="#">dining</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">Dining set</a></li>
                                                <li><a href="shop.html">chair</a></li>
                                                <li><a href="shop.html">showcase</a></li>
                                                <li><a href="shop.html">dinner wagon</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li><a href="#">office</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">meeting table</a></li>
                                                <li><a href="shop.html">conference table</a></li>
                                                <li><a href="shop.html">mobile drawer</a></li>
                                                <li><a href="shop.html">group chair</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                    </ul>
                                    <!-- Men Accessories Dropdown End -->
                                </li>
                                <li><a href="#">lighting</a>
                                    <!-- Women Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <!-- Dress Dropdown Start -->
                                        <li><a href="#">lamp</a>
                                            <ul>
                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                <li><a href="shop.html">gps accessories</a></li>
                                                <li><a href="shop.html">Microphones</a></li>
                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                            </ul>
                                        </li>
                                        <!-- Dress Dropdown End -->
                                        <!-- shoes Dropdown Start -->
                                        <li><a href="#">wall</a>
                                            <ul>
                                                <li><a href="shop.html">Bathroom Lighting</a></li>
                                                <li><a href="shop.html">Wall Torchieres</a></li>
                                                <li><a href="shop.html">Picture Lights</a></li>
                                                <li><a href="shop.html">Pharmacy - Wall</a></li>
                                            </ul>
                                        </li>
                                        <!-- shoes Dropdown End -->
                                        <!-- Bags Dropdown Start -->
                                        <li><a href="#">outdoor</a>
                                            <ul>
                                                <li><a href="shop.html">ceiling mount</a></li>
                                                <li><a href="shop.html">Fountains</a></li>
                                                <li><a href="shop.html">Gas Lanterns</a></li>
                                                <li><a href="shop.html">Hanging</a></li>
                                            </ul>
                                        </li>
                                        <!-- Bags Dropdown End -->
                                        <!-- swimwear Dropdown Start -->
                                        <li><a href="#">decor</a>
                                            <ul>
                                                <li><a href="shop.html">mirrors</a></li>
                                                <li><a href="shop.html">clocks</a></li>
                                                <li><a href="shop.html">coat racks</a></li>
                                                <li><a href="shop.html">plumbing</a></li>
                                            </ul>
                                        </li>
                                        <!-- swimwear Dropdown End -->
                                    </ul>
                                    <!-- Women Accessories Dropdown Start -->
                                </li>
                                <li><a href="#">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="blog.html">3 column</a></li>
                                        <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                        <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu End Here -->
                </div>
                <!-- Container End -->
            </div>
        <!-- Header Middle End Here -->

        <!-- Header Bottom Start Here -->
        <div class="header-bottom black-bg header-sticky d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 ">
                        <nav>
                            <ul class="header-bottom-list d-flex">
                                <li class="active"><a class="drop-icon" href="index.html">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul class="ht-dropdown">
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="home-2.html">Home Version 2</a></li>
                                        <li><a href="home-3.html">Home Version 3</a></li>
                                        <li><a href="home-4.html">Home Version 4</a></li>
                                        <li><a href="home-5.html">Home Version 5</a></li>
                                        <li><a href="home-6.html">Home Version 6</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a class="drop-icon" href="shop.html">furniture</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu big-megamneu">
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">living</li>
                                                <li><a href="shop.html">sofa set</a></li>
                                                <li><a href="shop.html">corner table</a></li>
                                                <li><a href="shop.html">center table</a></li>
                                                <li><a href="shop.html">tv cabine</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">bedroom</li>
                                                <li><a href="shop.html">bed room sofa</a></li>
                                                <li><a href="shop.html">bed drawer</a></li>
                                                <li><a href="shop.html">bed side table</a></li>
                                                <li><a href="shop.html">dressing table</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">Dining</li>
                                                <li><a href="shop.html">Dining set</a></li>
                                                <li><a href="shop.html">chair</a></li>
                                                <li><a href="shop.html">showcase</a></li>
                                                <li><a href="shop.html">dinner wagon</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">office</li>
                                                <li><a href="shop.html">meeting table</a></li>
                                                <li><a href="shop.html">conference table</a></li>
                                                <li><a href="shop.html">mobile drawer</a></li>
                                                <li><a href="shop.html">group chair</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->

                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                <li><a class="drop-icon" href="shop.html">lighting</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu big-megamneu">
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">lamp</li>
                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                <li><a href="shop.html">gps accessories</a></li>
                                                <li><a href="shop.html">Microphones</a></li>
                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">wall</li>
                                                <li><a href="shop.html">Bathroom Lighting</a></li>
                                                <li><a href="shop.html">Wall Torchieres</a></li>
                                                <li><a href="shop.html">Picture Lights</a></li>
                                                <li><a href="shop.html">Pharmacy - Wall</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">outdoor</li>
                                                <li><a href="shop.html">ceiling mount</a></li>
                                                <li><a href="shop.html">Fountains</a></li>
                                                <li><a href="shop.html">Gas Lanterns</a></li>
                                                <li><a href="shop.html">Hanging</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">decor</li>
                                                <li><a href="shop.html">mirrors</a></li>
                                                <li><a href="shop.html">clocks</a></li>
                                                <li><a href="shop.html">coat racks</a></li>
                                                <li><a href="shop.html">plumbing</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->

                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                <li><a class="drop-icon" href="shop.html">room</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu megamenu-three">
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">Large Appliances</li>
                                                <li><a href="shop.html">Armchairs</a></li>
                                                <li><a href="shop.html">Bunk Bed</a></li>
                                                <li><a href="shop.html">Mattress</a></li>
                                                <li><a href="shop.html">Sideboard</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">Medium Appliances</li>
                                                <li><a href="shop.html">Bootees Bags</a></li>
                                                <li><a href="shop.html">Jackets</a></li>
                                                <li><a href="shop.html">Shelf</a></li>
                                                <li><a href="shop.html">Shoes</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">Small Appliances</li>
                                                <li><a href="shop.html">Bootees Bags</a></li>
                                                <li><a href="shop.html">Jackets</a></li>
                                                <li><a href="shop.html">Shelf</a></li>
                                                <li><a href="shop.html">Shoes</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                <li><a class="drop-icon" href="shop.html">new collections</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown megamenu megamenu-two">
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">Large Appliances</li>
                                                <li><a href="shop.html">Armchairs</a></li>
                                                <li><a href="shop.html">Bunk Bed</a></li>
                                                <li><a href="shop.html">Mattress</a></li>
                                                <li><a href="shop.html">Sideboard</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li class="menu-tile">Small Appliances</li>
                                                <li><a href="shop.html">Bootees Bags</a></li>
                                                <li><a href="shop.html">Jackets</a></li>
                                                <li><a href="shop.html">Shelf</a></li>
                                                <li><a href="shop.html">Shoes</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->

                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                <li><a class="drop-icon" href="shop.html">shop</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul class="ht-dropdown">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a class="drop-icon" href="blog.html">blog</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul class="ht-dropdown blog-dropdown">
                                        <li><a href="blog.html">3 column</a></li>
                                        <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                        <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a class="drop-icon" href="#">pages</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul class="ht-dropdown">
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Header Bottom End Here -->
    </header>