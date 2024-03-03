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
                                        <span>Call us : {{ $contact[0]->telepon }}</span>
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
                                <li>
                                    <a href="#">About Us</a>
                                    <!-- Women Accessories Dropdown Start -->
                                    <ul>
                                        <!-- Dress Dropdown Start -->
                                        <li>
                                            <ul>
                                                <li><a href="{{ route('profil.index') }}">Our Profile</a></li>
                                                <li><a href="{{ route('production.index') }}">Our Production</a></li>
                                                <li><a href="{{ route('certificate.index') }}">Our Certificate</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                    <!-- Women Accessories Dropdown Start -->
                                </li>
                                <li><a href="#">Product</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-dropdown">
                                         @foreach($product as $key => $value)
                                        <li>
                                            <a href="{{ route('product.show',$value->id) }}">{{ $value['product_name'] }}</a>
                                            
                                        </li>
                                        @endforeach
                                    </ul>
                                    <!-- Men Accessories Dropdown End -->
                                </li>
                                
                                <li><a href="#">Support</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="{{ env('ASSET_URL_ADMIN') }}/img/katalog/{{ $katalog[0]->katalog }}">Download E-Catalog</a></li>
                                       
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="{{ route('news.index') }}">News</a></li>
                                
                                <li><a href="{{ route('contact.index') }}">contact us</a></li>
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
                                <li class="active"><a href="{{ route('home') }}">home</a>
                                   
                                </li>
                                <li>
                                    <a class="drop-icon" href="#">About Us</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown">
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li><a href="{{ route('profil.index') }}">Our Profile</a></li>
                                                <li><a href="{{ route('production.index') }}">Our Production</a></li>
                                                <li><a href="{{ route('certificate.index') }}">Our Certificate</a></li>
                                                
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        

                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                <li>
                                    <a class="drop-icon" href="#">Product</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown">
                                        <!-- Single Column Start -->
                                        @foreach($product as $key => $value)
                                        <li>
                                            <a href="{{ route('product.show',$value->id) }}">{{ $value['product_name'] }}</a>
                                            
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                 <li>
                                    <a class="drop-icon" href="#">Support</a>
                                    <!--  Mega-Menu Start -->
                                    <ul class="ht-dropdown">
                                        <!-- Single Column Start -->
                                        <li>
                                            <ul>
                                                <li><a href="{{ env('ASSET_URL_ADMIN') }}/img/katalog/{{ $katalog[0]->katalog }}" target="_blank">Download E-Catalog</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Column End -->
                                        

                                    </ul>
                                    <!-- Mega-Menu End -->
                                </li>
                                <li>
                                    <a href="{{ route('news.index') }}">News</a>
                                    
                                </li>

                                
                                
                                <li>
                                    <a  href="{{ route('contact.index') }}">Contact Us</a>
                                    
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