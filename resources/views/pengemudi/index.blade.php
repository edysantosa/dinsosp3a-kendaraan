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
                                  <h5 class="mb-0">Daftar Pengemudi</h5>
                              </div>
                          </div>
                          <div class="col-6 col-md-6 col-lg-6 text-right">
                            <a type="button" href="pengemudi/new" class="btn btn-success trigger"><i class="mdi mdi mdi-library-plus"></i></a>
                          </div>
                      </div>

                      <div class="row mb-3">
                          <div class="col-md-12 col-lg-12">
                            <div class="table-responsive m-b-30">
                              <table class="table table-striped table-bordered yajra-datatable">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>NIK</th>
                                          <th>Nama Pengemudi</th>
                                          <th>No. HP</th>
                                          <th>&nbsp;</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>
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
    <script src="{{ asset('dist/js/pengemudi.js') }}"></script>
@stop