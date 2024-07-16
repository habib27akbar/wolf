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
        <br/>
        <br/>

@endsection