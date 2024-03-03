@extends('layouts.master')
@section('title','Home')
@section('content')

@section('css')
<style>
   /* Style untuk judul berita */
    .news-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    /* Style untuk gambar berita */
    .news-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    /* Style untuk konten berita */
    .news-content {
        font-size: 16px;
        color: #666;
        line-height: 1.5;
    }

    /* Style untuk tombol baca selengkapnya */
    .read-more {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .read-more:hover {
        background-color: #0056b3;
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
                    <h2>Contact</h2>
                    
                </div>
               <div class="row">
                    <!-- Single Footer Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 mb-all-40">
                        <div class="single">
                            <h3 class="title">Address</h3>
                            <div class="content">
                                <ul class="list last">
                                    <li class="list-upper">
                                    <p>{{ $contact[0]->alamat }}</p>
                                    </li>
                                    <li>
                                        <p>Call : <span> {{ $contact[0]->telepon }}</span></p>
                                    </li>
                                    <li>
                                        <p>Whatsapp : <span>{{ $contact[0]->whatsapp }}</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 mb-all-40">
                        <div class="single style-change">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.676330078582!2d106.822566!3d-6.1415716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e422331a8396667%3A0x671284d3cb18a5aa!2sPT.Dwitunggal%20Sinar%20Sentosa!5e0!3m2!1sid!2sid!4v1708848764054!5m2!1sid!2sid" style="border:0; width:100%" allowfullscreen="yes" loading="lazy" height="300" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    
                    
                </div>
            </div>
        </div>
        <!-- New Arrival Products End Here -->

        <br/>
        <br/>

@endsection