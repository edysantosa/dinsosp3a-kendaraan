@extends('layouts.main')

@section('content')
    <div class="row m-t-50 p-t-20">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">

                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Jadwal Hari Ini</h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive m-b-30">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Jam</th>
                            <th scope="col">Pengemudi</th>
                            <th scope="col">Kendaraan</th>
                            <th scope="col">Bidang</th>
                            <th scope="col">Kegiatan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($today as $x)
                            <tr>
                              <th scope="row">{{ $x->waktu->format('H:i') }}</th>
                              <td>{{ $x->pengemudi->nama }}</td>
                              <td>Avanza DK 1234 AZ</td>
                              <td>Rehabilitasi Sosial</td>
                              <td>Monitoring Disabilitas</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->


        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">

                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Jadwal Besok dan Selanjutnya</h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive m-b-30">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Tgl dan Jam</th>
                            <th scope="col">Pengemudi</th>
                            <th scope="col">Kendaraan</th>
                            <th scope="col">Bidang</th>
                            <th scope="col">Kegiatan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($nextday as $x)
                            <tr>
                              <th scope="row">{{ $x->waktu->format('d/m/Y') }}<br>{{ $x->waktu->format('H:i') }}</th>
                              <td>{{ $x->pengemudi->nama }}</td>
                              <td>Avanza DK 1234 AZ</td>
                              <td>Rehabilitasi Sosial</td>
                              <td>Monitoring Disabilitas</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
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