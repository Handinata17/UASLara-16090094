@extends('templates.default')

@section('content')

<section id="basic">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Tabel Pesan</h4>
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
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard ">
                    <p>Tabel untuk memunculkan costumer yang sudah memilih paket dan sudah booking</p>
                    <div id="basicScenario"></div>

                    <div class="card-content collapse show">
                  <div class="card-body card-dashboard ">
                  
                    <div class="sort-panel">
                      <label>Sorting Field:
                        <select id="sortingField">
                          <option>No</option>
                          <option>Nama</option>
                          <option>Tanggal</option>
                          <option>Paket</option>
                          <option>Pembayaran</option>
                          
                        </select>
                      </label>
                      <button class="btn btn-primary mr-1" type="button" id="sort">Sort</button>
                    </div>
                    <div id="sorting-table" class="js-shorting"></div>
                  </div>

<span class="text-bold-600"></span>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Paket</th>
                          <th>Pembayaran</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Tika</td>
                          <td>17-12-2019</td>
                          <td>Komplit</td>
                          <td>Sudah Membayar</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Dian</td>
                          <td>20-10-2019</td>
                          <td>Standart</td>
                          <td>Sudah Membayar</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Yayu</td>
                          <td>27-11-2019</td>
                          <td>Sedang</td>
                          <td>Belum Membayar</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


@endsection