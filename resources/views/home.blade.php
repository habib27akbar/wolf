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
        <div class="slider-area">
            <!-- Slider Area Start Here -->
            <div class="slider-activation owl-carousel">
                
               
                @foreach($slider as $key => $value)
                    <!-- Start Single Slide -->
                    <div class="slide align-center-left fullscreen animation-style-01 bg-image-1 " style="background: url('admin/public/img/slider/{{ $value['gambar'] }}')no-repeat center center / cover">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slider-content">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Slide -->
                @endforeach
            </div>
            <!-- Slider Area End Here -->
        </div>
        <!-- Slider Area End -->
    
       
        
        <!-- Best Selling Area Start Here -->
        <div class="best-selling-pro deal-pro-style-one pt-90">
            <div class="container">
               <div class="section-title text-center">
                    <h2>COMPANY PROFILE</h2>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?=$about[0]->ket?>
                        <div style="margin-top: 10px">
                            <b>CONTROL OF QUALITY</b>
                            <?=$about[0]->coq?>
                        </div>
                        <div style="margin-top: 10px">
                            <b>Misi</b>
                            <?=$about[0]->misi?>
                            
                        </div>
                        <div style="margin-top: 10px">
                            <b>Visi</b>
                            <?=$about[0]->visi?>
                        </div>
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
                    @foreach($production as $key => $value)
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="admin/public/img/production/{{ $value->gambar }}" alt="product-img">
                            </div>
                        </div>
                     @endforeach  
                    
                    
                </div>
               
            </div>
        </div>
        <!-- New Arrival Products End Here -->


       <!-- New Arrival Products Start Here -->
        <div class="new-arrival no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>Certificate</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="row" style="">
                    @foreach($certificate as $key => $value)
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="admin/public/img/certificate/{{ $value->gambar }}" alt="product-img">
                            </div>
                        </div>
                     @endforeach  
                    
                    
                </div>
               
            </div>
        </div>
        <!-- New Arrival Products End Here -->
       
        
        <!-- Our Product Area Start Here -->
        <div class="our-product new-arrival-style-two border-style pt-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>Products</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="main-product-tab-area">
                    <!-- Furniture Product Activation Start Here -->
                    <div class="our-pro-active owl-carousel">
                        @foreach($product as $key => $value)
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="#product_detail"><img src="admin/public/img/product/{{ $value->gambar }}" class="image" alt="product-img"></a>
                               
                                <div class="quick-view-pro">
                                    <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                               
                                <h4 class="pro-title"><a href="#product_detail">{{ $value['product_name'] }}</a></h4>
                                
                                
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        @endforeach

                       
                    </div>
                    <!-- Furniture Product Activation End Here -->
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
       
        
       
       
@endsection