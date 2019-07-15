@extends('templates.default')
@section('content')

 <div class="content-wrapper">
  <div class="content-body">
<section id="hover-effects" class="card">
          <div class="card-header">
            <h4 class="card-title"></h4>
            <button onclick="window.location='{{route("gallery.create")}}'" type="button" class="btn btn-primary">Tambah</button>
          </div>    
        </h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            </div>
          <div class="card-content">
            <div class="card-body my-gallery">
              <div class="grid-hover row">
                 @foreach($gallery as $gallery)
                <div class="col-md-6">
                  
                  <figure class="effect-lily">
                    <img width="350px" height="300px" src="{{asset('public/images/'.$gallery->gambar)}}" alt="img12" />
                    <figcaption>
                      <div>
                        <h2>
                          <span>{{$gallery->nama}}</span>
                        </h2>
                        <p>{{$gallery->description}}</p>
                      </div>

                      <tbody>
                            <td>
                              <a href="{{route('gallery.edit', $gallery)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                              <a href="{{route('gallery.destroy', $gallery->id)}}" onclick="return confirm('delete data ini ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>                    
                          </tr> 
                          </tbody>  
                    </figcaption>
                  </figure>
                  
                </div>
                @endforeach
              </div>
              
            </div>
          </div>

          <!--/ Image grid -->
        </section>
      </div>
    </div>
</div>
@endsection




