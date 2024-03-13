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
              <li class="breadcrumb-item active">Update</li>
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
                       
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10" style="margin-top:8px;">
                                {{ $product['product_name'] }}
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                               
                                 <img style="width:30%;" src="{{ asset('img/product/'.$product['gambar']) }}" alt="" srcset="">
                                
                            </div>
                            <a href="{{ url('product') }}" class="btn btn-default">Kembali</a>
                        </div>
                       
                        @include('include.alert')
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Detail Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Image</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <br/>
                                <a href="{{ url('product_detail/create?product_id='.$product['id']) }}" class="btn btn-primary">Tambah</a>
                               
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width: 20%">Action</th>
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
                                                    <td>
                                                        <div class="btn-group">
                                                            <form method="POST" action="{{ route('product_detail.destroy', ['product_detail' => $value->id]) }}">
                                                                <a href="{{ route('product_detail.edit',$value->id) }}" class="btn btn-warning">Edit</a>
                                                            
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $value->product_id }}">
                                                                <button onclick="confirm('apakah anda yakin ?')" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
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
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                <br/>
                                <a href="{{ url('product_image/create?product_id='.$product['id']) }}" class="btn btn-primary">Tambah</a>
                               
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width: 20%">Action</th>
                                            <th>Image</th>               
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product_image as $key => $value)
                                                <tr>
                                                    <td>
                                                        <div class="btn-group">
                                                            <form method="POST" action="{{ route('product_image.destroy', ['product_image' => $value->id]) }}">
                                    
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $value->product_id }}">
                                                                <button onclick="confirm('apakah anda yakin ?')" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                         <img style="width:30%;" src="{{ asset('img/product/'.$value->gambar) }}" alt="" srcset="">
                                                    </td>
                                                    
                                                   
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                       
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

        $('#example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": false,
        });
        
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": false,
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