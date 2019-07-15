@extends('templates.default')
@section('content')


<div class="content-wrapper">
  <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">AutoFill Datatable</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">AutoFill Datatable
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>


      <div class="card">
    <div class="card-header">
      <h4 class="card-title">
        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen Dasar</font></font>
      </h4>
    </div>
    
    <div class="card-content">
      <div class="card-body">
        <form action="{{route('paket.update', $paket)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class=" form-group row">
          <label class="col-md-4">Nama Paket</label>
          <div class="col-md-8">
            <input type="text" value="{{$paket->nama_paket}}" name="nama_paket" class="form-control" required>
          </div>
        </div>

        <div class=" form-group row">
          <label class="col-md-4">Gambar Paket</label>
          <div class="col-md-8">
            <input type="file" name="gambar" class="form-control" required>
          </div>
        </div>

        <div class=" form-group">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
        </form>
      </div>
    </div>

</div>
@stop