@extends('layouts.master')
@section('title','Home')
@section('content')

@section('css')
<style>
    .image {
        width: 100%;
        aspect-ratio: 2/4;
        object-fit: contain;
        text-align: center;

    }
</style>
@endsection





<div class="main-product-thumbnail white-bg ptb-90">
    <div class="container">
        <h2 class="product-header">{{ $product_id['product_name'] }}</h2>
        <div class="row">
            <!-- Main Thumbnail Image Start -->
            <div class="col-lg-4 col-md-4 mb-all-40">
                <!-- Thumbnail Large Image start -->
                <div class="tab-content">
                    <div id="thumb1" class="tab-pane fade show active">
                        <a data-fancybox="images" href="{{ env('ASSET_URL_ADMIN') }}/img/product/{{ $product_id['gambar'] }}"><img src="{{ env('ASSET_URL_ADMIN') }}/img/product/{{ $product_id['gambar'] }}" alt="product-img"></a>
                    </div>

                </div>
                <!-- Thumbnail Large Image End -->

            </div>
            @foreach($product_image as $key => $value)
            <div class="col-lg-4 col-md-4 mb-all-40">
                <!-- Thumbnail Large Image start -->
                <div class="tab-content">
                    <div id="thumb1" class="tab-pane fade show active">
                        <a data-fancybox="images" href="{{ env('ASSET_URL_ADMIN') }}/img/product/{{ $value->gambar }}"><img src="{{ env('ASSET_URL_ADMIN') }}/img/product/{{ $value->gambar }}" alt="product-img"></a>
                    </div>

                </div>
                <!-- Thumbnail Large Image End -->

            </div>

            @endforeach

        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>



<div class="thumnail-desc">
    <div class="container">
        <div class="thumb-desc-inner">
            <ul class="main-thumb-desc nav tabs-area" role="tablist">
                <li><a class="active" data-bs-toggle="tab" href="#dtail">Description</a></li>

            </ul>
            <!-- Product Thumbnail Tab Content Start -->
            <div class="tab-content thumb-content">
                <div id="dtail" class="tab-pane fade show active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
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
                        *) Pesanan dengan Qty tertentu bisa Customize Spesifikasi
                    </div>
                </div>

            </div>
            <!-- Product Thumbnail Tab Content End -->
        </div>
    </div>
    <!-- Container End -->
</div>


<br />
<br />

@endsection