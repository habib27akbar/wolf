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

        <br/>
        <br/>

@endsection