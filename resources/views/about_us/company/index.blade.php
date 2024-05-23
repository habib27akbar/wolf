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
        <br/>
        <br/>

@endsection