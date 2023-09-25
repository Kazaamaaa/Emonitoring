@extends('layout.main')
@section('content')
@section('title')
<title>AdminLTE 3 | Tambah RKAP</title>
@endsection
 <body class="hold-transition sidebar-mini">
    <div class="wrapper">
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>EDIT DATA RKAP</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">RKAP</a></li>
                  <li class="breadcrumb-item active">EDIT RKAP</li>
                </ol>
              </div>
            </div>
        </form>
          </div><!-- /.container-fluid -->
        </section>


 <section class="content">
    <div class="container-fluid">
        <form action="{{ route('updatedata',['id' =>$data->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">FORM RKAP</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kegiatan</label>
                  <input type="text" name="kegiatan" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama" value="{{$data->Kegiatan}}">
                  @error('kegiatan')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Uraian</label>
                    <input type="text" name="uraian" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$data->Uraian}}">
                    @error('uraian')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Rkap</label>
                  <input type="text" name="rkap" class="form-control" id="exampleInputPassword1" placeholder="Enter Data" value="{{$data->RKAP}}">
                  @error('rkap')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Januari</label>
                  <input type="text" name="januari" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Januari}}">
                  @error('januari')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Febuari</label>
                  <input type="text" name="febuari" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Febuari}}">
                  @error('febuari')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Maret</label>
                  <input type="text" name="maret" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Maret}}">
                  @error('maret')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">April</label>
                  <input type="text" name="april" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->April}}">
                  @error('april')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mei</label>
                  <input type="text" name="mei" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Mei}}">
                  @error('mei')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">juni</label>
                  <input type="text" name="juni" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Juni}}">
                  @error('juni')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Juli</label>
                  <input type="text" name="juli" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Juli}}">
                  @error('juli')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Agustus</label>
                  <input type="text" name="agustus" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Agustus}}">
                  @error('agustus')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">September</label>
                  <input type="text" name="september" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->September}}">
                  @error('september')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Oktober</label>
                  <input type="text" name="oktober" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Oktober}}">
                  @error('oktober')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">November</label>
                  <input type="text" name="november" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->November}}">
                  @error('november')
                  <small>{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Desember</label>
                  <input type="text" name="desember" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal" value="{{$data->Desember}}">
                  @error('desember')
                  <small>{{ $message }}</small>
                  @enderror
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </form>
    </div>
  </section>
     </div>
@endsection
