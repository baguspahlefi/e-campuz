@extends('layouts.app-pages')
@section('title')
    Dashboard - Instansi
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
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Success</h4>
              {{session('pesan')}}.
            </div>
          @endif
          <div class="container">
            <div class="box-header my-4">
              <a href="{{route('tambah-kampus.create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah </a>            
            <!-- /.box-header -->
            <div class="card-body" style="overflow-x: auto;">
              <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Instansi</th>
                      <th scope="col">Deskripsi</th>
                      @if (!Auth::guest())
                      <th scope="col">Aksi</th>
                      @else
                      @endif
                    </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                  <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $item->instansi }} </td>
                    <td> {{ $item->deskripsi }} </td>
                    @if (!Auth::guest())
                    <td> 
                      <a class="btn btn btn-warning" href="{{route('tambah-kampus.edit',$item->id)}}" role="button" ><i class="fa fa-edit"></i></a>
                     
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$item->id}}">
                        <i class="fa fa-trash"></i>
                      </button>
                    
                    </td> 
                    @else
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
                <div class="modal fade" id="delete{{ $item->id }}">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin ingin menghapus {{$item->instansi}} ? </p>
                      </div>
                      <div class="modal-footer">
                        <form action="{{route('tambah-kampus.destroy',$item->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
    
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
