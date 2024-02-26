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
        <br/>
        <br/>

@endsection