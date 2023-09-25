@extends('layout.main')
@section('content')
@section('title')
<title>AdminLTE 3 | RKAP</title>
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
                <h1>Laporan Rencana Kerja Dan Anggaran Perusahaan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Table</a></li>
                <li class="breadcrumb-item active">Laporan Rencana Kerja Dan Anggaran Perusahaan</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

    <section class="content">
      <div class="container-fluid">
        <div class="col">
            <div class="col-18">
              <a href="{{ route('createrkap')}}" class="btn btn-success mb-2">Tambah Data</a>
               <a href="/exportpdf" class="btn btn-success mb-2">Export PDF</a>
               <a href="/exportexcel" class="btn btn-success mb-2">Export EXCEL</a>
               <a href="" class="btn btn-success mb-2" data-target="#modal-import" data-toggle="modal">Import EXCEL</a>
              <div class="row-18">
                @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                {{$message}}
                </div>
@endif
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                  <div class="card-tools">
                    <form action="{{route('rkap')}}" method="GET">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="search" name="search" class="form-control float-right" placeholder="Search" value="{{$request->get('search')}}">
                      <div class="input-group-append">
                        <a href="/rkap" button type="submit" class="btn btn-default" method="GET">
                          <i class="fas fa-search"></i>
                        </a>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Uraian</th>
                        <th>Rkap</th>
                        <th>Januari</th>
                        <th>Febuari</th>
                        <th>Maret</th>
                        <th>April</th>
                        <th>Mei</th>
                        <th>Juni</th>
                        <th>Juli</th>
                        <th>Agustus</th>
                        <th>September</th>
                        <th>Oktober</th>
                        <th>November</th>
                        <th>Desember</th>
                        <th>Dibuat</th>
                        <th>Button</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $d)
                       <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->Kegiatan}}</td>
                        <td>{{$d->Uraian}}</td>
                        <td>{{$d->RKAP}}</td>
                        <td>{{$d->Januari}}</td>
                        <td>{{$d->Febuari}}</td>
                        <td>{{$d->Maret}}</td>
                        <td>{{$d->April}}</td>
                        <td>{{$d->Mei}}</td>
                        <td>{{$d->Juni}}</td>
                        <td>{{$d->Juli}}</td>
                        <td>{{$d->Agustus}}</td>
                        <td>{{$d->September}}</td>
                        <td>{{$d->Oktober}}</td>
                        <td>{{$d->November}}</td>
                        <td>{{$d->Desember}}</td>
                        <td>{{$d->created_at->format('D M Y')}}</td>
                        {{-- <td>
                          <a href="{{ route('user.edit',['id' => $d->id])}}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                          <a  data-toggle="modal" data-target="#modal-hapus{{ $d->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
                        </td> --}}
                        <td>
                          <a href="/tampilkandata/{{$d->id}}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                           <a  data-toggle="modal" data-target="#modal-hapus{{ $d->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
                        </td>
                      </tr>

                      <div class="modal fade" id="modal-hapus{{ $d->id}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah Kamu Yakin Akan Menghapus Data <b> {{ $d->Kegiatan}}</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('deletedata',['id'  =>$d->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Ya,Hapus Data</button>
                            </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->

                      <div class="modal fade" id="modal-import">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Input FILE</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="/importexcel" method="POST" enctype="multipart/form-data" >
        @csrf
                            <div class="modal-body">
                             <div class="form-group">
            <input type="file" name="file" required>
        </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->


                      @endforeach
                    </tbody>
                  </table>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
               </div>
          </div>
        </div>
        </section>
          <!-- /.row -->





    </div>
    <!-- ./wrapper -->
@endsection
