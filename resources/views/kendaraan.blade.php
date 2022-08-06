@extends('layouts.main')

@section('content')
    <div class="row m-t-50 p-t-50">

      <!-- Start XP Col -->
      <div class="col-md-12 col-lg-12 col-xl-12 m-t-15">
          <div class="card">
              <div class="card-body">
                  <div class="xp-invoice">

                      <div class="row mb-3">
                          <div class="col-6 col-md-6 col-lg-6">
                              <div class="xp-invoice-name">
                                  <h5 class="mb-0">Daftar Kendaraan</h5>
                              </div>
                          </div>
                          <div class="col-6 col-md-6 col-lg-6">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <div class="col-md-12 col-lg-12">
                              <div class="xp-invoice-summary">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-borderless">
                                          <thead>
                                              <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Jenis Kendaraan</th>
                                              <th scope="col">Merek</th>
                                              <th scope="col">Kapasitas</th>
                                              <th scope="col">No Pelat</th>
                                              <th scope="col">Tanggal Pajak</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">1</th>
                                                  <td>Minibus</td>
                                                  <td>Avanza</td>
                                                  <td>6 Orang</td>
                                                  <td>DK 1234 AA</td>
                                                  <td>16 Juli 2023</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">2</th>
                                                  <td>Minibus</td>
                                                  <td>Avanza</td>
                                                  <td>6 Orang</td>
                                                  <td>DK 1234 AA</td>
                                                  <td>16 Juli 2023</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">3</th>
                                                  <td>Minibus</td>
                                                  <td>Avanza</td>
                                                  <td>6 Orang</td>
                                                  <td>DK 1234 AA</td>
                                                  <td>16 Juli 2023</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">4</th>
                                                  <td>Minibus</td>
                                                  <td>Avanza</td>
                                                  <td>6 Orang</td>
                                                  <td>DK 1234 AA</td>
                                                  <td>16 Juli 2023</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">5</th>
                                                  <td>Minibus</td>
                                                  <td>Avanza</td>
                                                  <td>6 Orang</td>
                                                  <td>DK 1234 AA</td>
                                                  <td>16 Juli 2023</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">6</th>
                                                  <td>Minibus</td>
                                                  <td>Avanza</td>
                                                  <td>6 Orang</td>
                                                  <td>DK 1234 AA</td>
                                                  <td>16 Juli 2023</td>
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
      </div>
      <!-- End XP Col -->


    </div>
@endsection

@section('pagescript')
    <script src="{{ asset('dist/js/home.js') }}"></script>
@stop