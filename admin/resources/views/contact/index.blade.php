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
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Contact</a></li>
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
                 <form action="{{ route('contact.update', ['contact' => $contact['id']]) }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Whatsapp</label>
                            <div class="form-group">
                                <input type="text" name="whatsapp" class="form-control" value="<?=$contact['whatsapp']?>">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" name="telepon" class="form-control" value="<?=$contact['telepon']?>">
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?=$contact['alamat']?>">
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Channel Youtube</label>
                                <input type="text" name="youtube" class="form-control" value="<?=$contact['youtube']?>">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Akun Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="<?=$contact['facebook']?>">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Akun Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="<?=$contact['instagram']?>">
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Peta</label>
                                <textarea name="peta" cols="140" rows="10" class="form-contol">
                                    <?=$contact['peta']?>
                                </textarea>
                               
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>
                    <button class="btn btn-primary">Save</button>
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