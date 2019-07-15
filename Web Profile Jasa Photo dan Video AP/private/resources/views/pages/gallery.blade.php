@extends('templates.default')

@section('content')
 <div class="content-wrapper">
  <div class="content-body">
<section id="hover-effects" class="card">
          <div class="card-header">
            <h4 class="card-title">Hover Effects</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body pb-0">
              <div class="card-text">
                <p>Image gallery grid with 30 subtle hover effect. Try to hover below
                  demo images to show each hover effect.</p>
              </div>
            </div>
            <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
              <div class="grid-hover row">
                <h5 class="col-12">Lily</h5>
                <div class="col-md-6 col-12">
                  <figure class="effect-lily">
                    <img src="../tugas/public/assets/images/gallery/wedding.jpg" alt="img12" />
                    <figcaption>
                      <div>
                        <h2>Nice
                          <span>Lily</span>
                        </h2>
                        <p>Lily likes to play with crayons and pencils</p>
                      </div>
                      <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-12">
                  <figure class="effect-lily">
                    <img src="../tugas/public/assets/images/gallery/wedding1.jpg" alt="img1" />
                    <figcaption>
                      <div>
                        <h2>Nice
                          <span>Lily</span>
                        </h2>
                        <p>Lily likes to play with crayons and pencils</p>
                      </div>
                      <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="grid-hover row">
                <h5 class="col-12 mt-3">Sadie</h5>
                <div class="col-md-6 col-12">
                  <figure class="effect-sadie">
                    <img src="../tugas/public/assets/images/gallery/wedding3.jpg" alt="img02" />
                    <figcaption>
                      <h2>Holy
                        <span>Sadie</span>
                      </h2>
                      <p>Sadie never took her eyes off me.
                        <br>She had a dark soul.</p>
                      <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6 col-12">
                  <figure class="effect-sadie">
                    <img src="../tugas/public/assets/images/gallery/wedding2.jpg" alt="img14" />
                    <figcaption>
                      <h2>Holy
                        <span>Sadie</span>
                      </h2>
                      <p>Sadie never took her eyes off me.
                        <br>She had a dark soul.</p>
                      <a href="#">View more</a>
                    </figcaption>
                  </figure>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Image grid -->
        </section>
      </div>
    </div>


@endsection