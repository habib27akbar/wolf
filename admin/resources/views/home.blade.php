@extends('layouts.master')

@section('title','Home')
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol> --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         {{-- @php
            $now = date('H');
        @endphp
            @if ($now >= 5 && $now < 12)
              @php echo "Selamat Pagi Admin"; @endphp
            @elseif ($now >= 12 && $now < 18)
              @php echo "Selamat Siang Admin"; @endphp
            @elseif ($now >= 18 && $now < 24)
               @php echo "Selamat Sore Admin"; @endphp
            @else
              @php echo "Selamat Malam Admin"; @endphp
            @endif --}}
         
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection
  @section('js')
  @endsection