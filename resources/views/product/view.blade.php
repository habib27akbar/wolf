@extends('layouts.master')
@section('title','Home')
@section('content')

@section('css')
<style>
    .image {
        width: 100%;
        aspect-ratio:17/20;
        object-fit: contain;
        text-align: center;

    }

</style>
@endsection

    <!-- Slider Area Start -->
        <div class="slider-area">
            <!-- Slider Area Start Here -->
            <div class="slider-activation owl-carousel">
                
               
                @foreach($slider as $key => $value)
                    <!-- Start Single Slide -->
                    <div class="slide align-center-left fullscreen animation-style-01 bg-image-1 " style="background: url('{{ env('ASSET_URL_ADMIN') }}/img/slider/{{ $value['gambar'] }}')no-repeat center center / cover">
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
                    <h2>Product</h2>
                    
                </div>
                <!-- Section Title End -->
                <div class="row" style="">
                    <?php 
                    //var_dump($product_id['gambar']);
                    //exit;    
                    ?>
                    
                        <div class="col-md-12">
                            <div class="pro-img">
                                <center>
                                    <img style="width: 30%" src="{{ env('ASSET_URL_ADMIN') }}/img/product/{{ $product_id['gambar'] }}" alt="product-img">
                                </center>
                                
                            </div>
                        </div>

                        <div class="col-md-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                   
                                    <th>Model</th>               
                                    <th>Size</th>
                                    <th>Lumens(LM)</th>
                                    <th>Power(W)</th>
                                    <th>LED Chip</th>
                                    <th>Input Voltage(V)</th>
                                    <th>Spec</th>
                                    <th>Color Temp.</th>
                                    <th>CRI</th>
                                    <th>Driver</th>
                                    <th>Quality Warranty</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($product_detail as $key => $value)
                                        <tr>
                                            
                                            <td>{{ $value->model }}</td>
                                            
                                            <td>
                                                {{ $value->size }}
                                            </td>
                                            <td>
                                                {{ $value->lumens }}
                                            </td>
                                            <td>
                                                {{ $value->power }}
                                            </td>
                                            <td>
                                                {{ $value->led_chip }}
                                            </td>
                                            <td>
                                                {{ $value->input_voltage }}
                                            </td>
                                            <td>
                                                {{ $value->spec }}
                                            </td>
                                            <td>
                                                {{ $value->color_temp }}
                                            </td>
                                            <td>
                                                {{ $value->cri }}
                                            </td>
                                            <td>
                                                {{ $value->driver }}
                                            </td>
                                            <td>
                                                {{ $value->quality_warranty }}
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                    
                    
                </div>
               
            </div>
        </div>
        <!-- New Arrival Products End Here -->

        <br/>
        <br/>

@endsection