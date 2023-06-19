@extends('layouts.app-pages')
@section('title')
    Tambah Barang - Inventory-app
@endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah INstansi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="{{route('tambah-kampus.update',$items->id)}}">
                  @method('PUT')
                    @csrf
                
                    <div class="form-group">
                        <label for="intansi">Instansi</label>
                        <input type="text" class="form-control @error('intansi') is-invalid @enderror" id="instansi" name="intansi" placeholder="Input Intansi" value="{{ $items->intansi }}">
                        @error('intansi')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Deksripsi</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Inputdeskripsi" value="{{ $items->deskripsi }}">
                        @error('deskripsi')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
            <!-- /.box-body -->
        </div>
      
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
    
@endsection
