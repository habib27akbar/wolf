@extends('layouts.master')

@section('title','Carrier')
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
            <h1>Carrier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Carrier</a></li>
              <li class="breadcrumb-item active">Create</li>
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
                <form action="{{ route('carrier.store') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                         <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" id="judul" class="form-control" id="judul" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Tanggal Posting</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_posting" id="tanggal_posting" class="form-control" id="tanggal_posting" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                
                               <textarea name="isi" id="summernote"></textarea>
                            </div>
                        </div>
                        
                      
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('carrier.index') }}" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection
  @section('js')
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
    $(function () {
        
        $('#summernote').summernote()
       
    });
    </script>
  @endsection