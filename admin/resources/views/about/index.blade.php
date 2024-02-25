@extends('layouts.master')

@section('title','Home')
@section('css')
  
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">About Us</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary"> 
              <div class="card-body">
                 @include('include.alert')
                 <form action="{{ route('about.update', ['about' => $about['id']]) }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            
                                <textarea id="summernote" name="ket">
                                  {{ $about['ket'] }}
                                </textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Control of Quality</label>
                                <textarea id="coq" name="coq">
                                    {{ $about['coq'] }}
                                </textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Misi</label>
                                <textarea id="misi" name="misi">
                                    {{ $about['misi'] }}
                                </textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Visi</label>
                                <textarea id="visi" name="visi">
                                    {{ $about['visi'] }}
                                </textarea>
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>
                    <button class="btn btn-primray">Save</button>
                 </form>
                
              </div>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection
  @section('js')
    <!-- DataTables  & Plugins -->
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
    $(function () {
        
        $('#summernote').summernote()
        $('#coq').summernote()
        $('#misi').summernote()
        $('#visi').summernote()
    });
    </script>
  @endsection