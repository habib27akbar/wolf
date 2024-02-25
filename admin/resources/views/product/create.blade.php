@extends('layouts.master')

@section('title','Product')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Product</a></li>
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
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" id="product_name" class="form-control" id="product_name" required>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Model</label>
                            <div class="col-sm-10">
                                <input type="text" name="model" id="model" class="form-control" id="model" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                                <input type="text" name="size" id="size" class="form-control" id="size">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Lumens</label>
                            <div class="col-sm-10">
                                <input type="text" name="lumens" id="lumens" class="form-control" id="lumens">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Power</label>
                            <div class="col-sm-10">
                                <input type="text" name="power" id="power" class="form-control" id="power">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Spec</label>
                            <div class="col-sm-10">
                                <input type="text" name="spec" id="spec" class="form-control" id="spec">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Color Temp</label>
                            <div class="col-sm-10">
                                <input type="text" name="color_temp" id="color_temp" class="form-control" id="color_temp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">CRI</label>
                            <div class="col-sm-10">
                                <input type="text" name="cri" id="cri" class="form-control" id="cri">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Driver</label>
                            <div class="col-sm-10">
                                <input type="text" name="driver" id="driver" class="form-control" id="driver">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Quality Warranty</label>
                            <div class="col-sm-10">
                                <input type="text" name="quality_warranty" id="quality_warranty" class="form-control" id="quality_warranty">
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" id="file" required>
                                <div class="alertSize" style="display: none;">File anda melebihi 5 MB</div>
                                <div class="alert" style="display: none;">File anda Bukan gambar, tidak dapat diupload</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="btnSave" type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('product.index') }}" class="btn btn-default">Batal</a>
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
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
    $(function () {
        
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        });
    });
    $('#image').bind('change', function() {
        //console.log(this.files[0]);
            let fileSizeUpload = this.files[0].size;
            let fileSize = (fileSizeUpload / (1024 * 1024)).toFixed(2);
            let fileType = this.files[0].type.split('/');
            //console.log(fileType[1]);
            if (
               fileSize <  5
            ) {
                $(".alertSize").hide();
                if (fileType[1] == 'jpg' || fileType[1] == 'jpeg' || fileType[1] == 'png') {
                    $("#btnSave").show();
                    $(".alert").hide();
                }else{
                    $(".alert").show();
                    $("#btnSave").hide();
                }
               
            } else {
                $(".alertSize").show();
                //document.getElementById("file_raport").classList.add('is-invalid');
                $("#btnSave").hide();

            }
            //this.files[0].size gets the size of your file.
            //alert(fileSize);

        });
    </script>
  @endsection