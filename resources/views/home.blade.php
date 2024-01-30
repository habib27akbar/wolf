@extends('layouts.master')
@section('title','Home')
@section('content')

@section('css')
<style>
    .image {
        width: 100%;
        aspect-ratio:17/20;
        object-fit: contain;
        

    }
</style>
@endsection
    
        <!-- Slider Area Start -->
        <div class="slider-area slider-style-two">
            <div class="container">
                <!-- Slider Area Start Here -->
                <div class="slider-activation owl-carousel">
                    <!-- Start Single Slide -->
                    <div class="slide align-center-left fullscreen animation-style-01 bg-image-6">
                        <div class="slider-progress"></div>
                        <div class="slider-content">
                           
                        </div>
                    </div>
                    <!-- End Single Slide -->
                    <!-- Start Single Slide -->
                    <div class="slide align-center-left fullscreen animation-style-01 bg-image-7">
                        <div class="slider-progress"></div>
                        <div class="slider-content">
                            
                        </div>
                    </div>
                    <!-- End Single Slide -->
                </div>
                <!-- Slider Area End Here -->
            </div>
        </div>
        <!-- Slider Area End -->
        
        <!-- Best Selling Area Start Here -->
        <div class="best-selling-pro deal-pro-style-one pt-90">
            <div class="container">
               <div class="section-title text-center">
                    <h2>COMPANY PROFILE</h2>
                    
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>PT. Dwitunggal Sinar Sentosa berdiri pada tahun 2011
                        bisnis kami bergerak dalam bidang hemat energi,
                        melalui penjualan berbagai jenis Lampu LED dan
                        Solar Cell (Tenaga Surya)</p>
                        <div style="margin-top: 10px">
                            <h6 style="background-color: darkseagreen;">CONTROL OF QUALITY</h6>
                            <p>Perusahaan Kami melakukan layanan yang terbaik
                            terutama dalam proses manufaktur dan layanan purna jual.</p>
                        </div>
                        <div style="margin-top: 10px">
                            <h6 style="background-color: darkseagreen;">Misi</h6>
                            <p>PT Dwitunggal Sinar Sentosa Didedikasikan
                                untuk solusi yang inovasi untuk masalah krisis
                                energi didunia dan untuk membuat dunia lebih bersih
                                dengan cara mencari tahu dan mengembangkan teknologi
                                terbaru untuk generasi kedepan yang lebih baik.</p>
                        </div>
                        <div style="margin-top: 10px">
                            <h6 style="background-color: darkseagreen;">Visi</h6>
                            <p>- Untuk menyediakan lingkungan yang lebih bersahabat
                                dan diperbaharui.<br/>
                                - Menyediakan service yang bermutu tinggi dan menyediakan
                                informasi bagi konsumen yang membutuhkan.<br/>
                                - Untuk membantu dalam mengatasi masalah
                                krisis energi di Indonesia.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img  src="{{ asset('img/products/p6.jpg') }}" alt="" style="width:100%" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Selling Area End Here -->

        <!-- New Arrival Products Start Here -->
        <div class="new-arrival no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>Production</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="row" style="">
                   
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="{{ asset('img/products/p6.jpg') }}" alt="product-img">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="{{ asset('img/products/p6.jpg') }}" alt="product-img">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="{{ asset('img/products/p6.jpg') }}" alt="product-img">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="{{ asset('img/products/p6.jpg') }}" alt="product-img">
                            </div>
                        </div>
                    
                    
                </div>
               
            </div>
        </div>
        <!-- New Arrival Products End Here -->


        <!-- New Arrival Products Start Here -->
        <div class="new-arrival no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>certificate</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="our-pro-active owl-carousel">
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                           <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                            
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                </div>
            </div>
        </div>
        <!-- New Arrival Products End Here -->
       
        
        <!-- Our Product Area Start Here -->
        <div class="our-product new-arrival-style-two border-style pt-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>Category products</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="main-product-tab-area">
                    <!-- Nav tabs -->
                    <ul class="nav tabs-area pro-tabs-area" role="tablist">
                        <li class="nav-item">
                            <a class="active" data-bs-toggle="tab" href="#furniture">funiture</a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#lighting">lighting</a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#rooms">rooms</a>
                        </li>
                    </ul>
                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="furniture" class="tab-pane fade show active">
                            <!-- Furniture Product Activation Start Here -->
                            <div class="our-pro-active owl-carousel">
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Chaz Kangeroo Hoodie</a></h4>
                                        <p><span class="price">$45.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Sprite Yoga Straps1</a></h4>
                                        <p><span class="price">$65.00</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Voyage Yoga Bag</a></h4>
                                        <p><span class="price">$61.21</span><span class="prev-price">$64.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Fusion Backpack</a></h4>
                                        <p><span class="price">$72.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Impulse Duffle</a></h4>
                                        <p><span class="price">$45.50</span><span class="prev-price">$30.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Field Messenger</a></h4>
                                        <p><span class="price">$55.50</span><span class="prev-price">$59.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Field Messenger</a></h4>
                                        <p><span class="price">$42.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                            </div>
                            <!-- Furniture Product Activation End Here -->
                        </div>
                        <!-- #furniture End Here -->
                        <div id="lighting" class="tab-pane fade">
                            <!-- Lighting Product Activation Start Here -->
                            <div class="our-pro-active owl-carousel">
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Sprite Yoga Straps1</a></h4>
                                        <p><span class="price">$45.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Chaz Kangeroo Hoodie </a></h4>
                                        <p><span class="price">$65.00</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Fusion Backpack</a></h4>
                                        <p><span class="price">$61.21</span><span class="prev-price">$64.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Voyage Yoga Bag </a></h4>
                                        <p><span class="price">$72.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Impulse Duffle</a></h4>
                                        <p><span class="price">$45.50</span><span class="prev-price">$30.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Field Messenger</a></h4>
                                        <p><span class="price">$55.50</span><span class="prev-price">$59.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Field Messenger</a></h4>
                                        <p><span class="price">$42.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                            </div>
                            <!-- Lighting Product Activation End Here -->
                        </div>
                        <!-- #lighting End Here -->
                        <div id="rooms" class="tab-pane fade">
                            <!-- Rooms Product Activation Start Here -->
                            <div class="our-pro-active owl-carousel">
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Chaz Kangeroo Hoodie</a></h4>
                                        <p><span class="price">$45.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Sprite Yoga Straps1</a></h4>
                                        <p><span class="price">$65.00</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Voyage Yoga Bag</a></h4>
                                        <p><span class="price">$61.21</span><span class="prev-price">$64.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Fusion Backpack</a></h4>
                                        <p><span class="price">$72.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Impulse Duffle</a></h4>
                                        <p><span class="price">$45.50</span><span class="prev-price">$30.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Field Messenger</a></h4>
                                        <p><span class="price">$55.50</span><span class="prev-price">$59.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="#product_detail"><img src="{{ asset('img/products/p6.jpg') }}" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <span class="sticker-sale">-5%</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="#product_detail">Field Messenger</a></h4>
                                        <p><span class="price">$42.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                            </div>
                            <!-- Rooms Product Activation End Here -->
                        </div>
                        <!-- #rooms End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
        </div>
        <!-- Our Product Area End Here -->


         <!-- New Arrival Products Start Here -->
        <div class="new-arrival no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center" style="margin-bottom: 0;">
                    <h2>our reference company</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="row">
                    <div class="col-md-2">
                        <div class="pro-img">
                            <img src="{{ asset('img/client/trafindo.png') }}" class="image" alt="client-logo">
                            
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="pro-img">
                            <img src="{{ asset('img/client/wilmar.png') }}" class="image" alt="client-logo">
                            
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="pro-img">
                            <img src="{{ asset('img/client/mitrapack.png') }}" class="image" alt="client-logo">
                            
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="pro-img">
                            <img src="{{ asset('img/client/sinde.jpeg') }}" class="image" alt="client-logo">
                            
                        </div>
                    </div>
                </div>
                
                
                       
                    
               
            </div>
        </div>
        <!-- New Arrival Products End Here -->
       
        
       
        <!-- Social Link Area Start -->
        <div class="social-link-area social-link-style-two dark-white-bg ptb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-all-40">
                        {{-- <div class="twitter-post">
                            <h3 class="social-title">Latest Tweets</h3>
                            <div class="twitter-content">
                                <div class="twitter-user"><a href="#">Example themes Club</a> <a href="#">@demothemes</a></div>
                                <div class="twitter-desc">
                                    <p>Check out "pander - Furniture ecommerce #HTML #Template" <br> on #Envato by <a href="#">@exampletheme</a> #Themeforest <a href="#">you twitter link </a><br><span class="tweet-time"><a href="#">23 Sep</a></span></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="social-share">
                            <h3 class="social-title">Stay Connected</h3>
                            <ul class="social-share-list">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Social Link Area End -->
@endsection