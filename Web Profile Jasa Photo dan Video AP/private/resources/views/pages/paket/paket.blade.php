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
      <div class="content-body">
        <!-- Auto Fill table -->
        <section id="autofill">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Auto Fill
                    <a href="{{route('paket.create')}}" class="btn btn-primary btn-md float-right"><i class="fa fa-plus">Tambah</i></a>
                  </h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered auto-fill">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>nama paket</th>
                          <th>Gambar</th>
                          <th>status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1 ?>
                        @foreach($paket as $paket)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$paket->nama_paket}}</td>
                          <td><img src="{{asset('public/images/'. $paket->gambar)}}" width="50px" height="50px"></td>
                          @if($paket->status == '1')
                            <td><span class="badge badge success">Aktif</span></td>
                            @endif
                            <td>
                              <a href="{{route('paket.edit', $paket)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                              <a href="{{route('paket.destroy', $paket->id)}}" onclick="return confirm('delete data ini ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>                    
                          </tr>
                        @endforeach
                        <?php $no++ ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Scrolling DataTable table -->
      </div>
    </div>


@endsection