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
                    @foreach($certificate as $key => $value)
                        <div class="col-md-3">
                            <div class="pro-img">
                                <img class="image" src="admin/public/img/certificate/{{ $value->gambar }}" alt="product-img">
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