@extends('templates.default')
@section('content')


      <div class="card">
    <div class="card-header">
      <h4 class="card-title">
        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen Dasar</font></font>
      </h4>
    </div>
    
    <div class="card-content">
      <div class="card-body">
        <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class=" form-group row">
          <label class="col-md-4">Nama Wedding</label>
          <div class="col-md-8">
            <input type="text" name="nama" class="form-control" required>
          </div>
        </div>

        <div class=" form-group row">
          <label class="col-md-4">Description</label>
          <div class="col-md-8">
            <input type="text" name="description" class="form-control" required>
          </div>
        </div>

        <div class=" form-group row">
          <label class="col-md-4">Gambar Wedding</label>
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