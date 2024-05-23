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

    .image-footer {
        width: 30%;
        aspect-ratio:16/20;
        object-fit: contain;
        

    }
    p{
        font-size: 17px;
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
                    <h3>COMPANY PROFILE</h3>
                    
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
                    {{-- @foreach($production as $key => $value)
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="admin/public/img/production/{{ $value->gambar }}" alt="product-img">
                            </div>
                        </div>
                     @endforeach   --}}
                    @for ($i = 1; $i <= 4; $i++)
                         <div class="col-md-3">
                            <div class="pro-img">
                                <img src="{{ asset('img/products/p1.jpg') }}" class="imgage" alt="product-img">
                            </div>
                        </div>
                     @endfor
                    
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
                SERTIFIKAT YANG KAMI MILIKI ADALAH:
                <ol>
                    <li>CE</li>
                    <li>ROHS</li>
                    <li>UL</li>
                    <li>Dan ISO 9001</li>
                </ol>
                <!-- Section Title End -->
                <div class="row" style="">
                    {{-- @foreach($certificate as $key => $value)
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img src="admin/public/img/certificate/{{ $value->gambar }}" alt="product-img">
                            </div>
                        </div>
                     @endforeach   --}}

                     @for ($i = 1; $i <= 4; $i++)
                         <div class="col-md-3">
                            <div class="pro-img">
                                <img src="{{ asset('img/products/p1.jpg') }}" class="imgage" alt="product-img">
                            </div>
                        </div>
                     @endfor
                    
                    
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
                                <a href="{{ route('product.show',$value->id) }}"><img src="admin/public/img/product/{{ $value->gambar }}" class="image" alt="product-img"></a>
                               
                                <div class="quick-view-pro">
                                    <a class="quick-view" href="{{ route('product.show',$value->id) }}"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                               
                                <h4 class="pro-title"><a href="{{ route('product.show',$value->id) }}">{{ $value['product_name'] }}</a></h4>
                                
                                
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
                    @foreach($company as $key => $value)
                        <div class="col-md-2">
                            <div class="pro-img">
                                <img src="admin/public/img/company/{{ $value['gambar'] }}" class="image" alt="client-logo">
                                
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                
                
                       
                    
               
            </div>
        </div>

         {{-- <div class="social-link-area dark-white-bg ptb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        
                            <img src="{{ env('ASSET_URL_ADMIN') }}/img/bridgelux-0000-removebg-preview.jpg" class="image-footer" alt="" srcset="">
                            <img src="{{ env('ASSET_URL_ADMIN') }}/img/creelogo-removebg-preview (1).jpg" class="image-footer" alt="" srcset="">
                            <img src="{{ env('ASSET_URL_ADMIN') }}/img/index-removebg-preview.jpg" class="image-footer" alt="" srcset="">
    
                       
                    </div>
                    <div class="col-lg-6">
                        
                            <img src="{{ env('ASSET_URL_ADMIN') }}/img/Nichia_Logo.svg-removebg-preview.jpg" class="image-footer" alt="" srcset="">
                            <img src="{{ env('ASSET_URL_ADMIN') }}/img/Philips_logo 2-removebg-preview.jpg" class="image-footer" alt="" srcset="">
                            <img src="{{ env('ASSET_URL_ADMIN') }}/img/sanan-optoelectronics_416x416-removebg-preview-removebg-preview.jpg" class="image-footer" alt="" srcset="">
                        
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- New Arrival Products End Here -->
   
        
       
       
@endsection