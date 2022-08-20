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
                            <th scope="col">Surat Tugas</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($today as $x)
                            <tr>
                              <th scope="row">{{ $x->waktu->format('H:i') }}</th>
                              <td>{{ $x->pengemudi->nama }}</td>
                              <td>{{ $x->kendaraan->merek }} {{ $x->kendaraan->pelat }}</td>
                              <td>{{ $x->user->name }}</td>
                              <td>{{ $x->kegiatan }}</td>
                              <td>
                                @if($x->getFirstMedia('surat_tugas'))
                                <a type="button" href="{{ $x->getFirstMedia('surat_tugas')->getFullUrl() }}" target="_blank" class="btn btn-primary"><i class="mdi mdi-file-pdf"></i></a>
                                @endif
                              </td>
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
                    <h5 class="card-title text-black">Jadwal Minggu Ini</h5>
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
                            <th scope="col">Surat Tugas</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($nextday as $x)
                            <tr>
                              <th scope="row">{{ $x->waktu->format('d/m/Y') }}<br>{{ $x->waktu->format('H:i') }}</th>
                              <td>{{ $x->pengemudi->nama }}</td>
                              <td>{{ $x->kendaraan->merek }} {{ $x->kendaraan->pelat }}</td>
                              <td>{{ $x->user->name }}</td>
                              <td>{{ $x->kegiatan }}</td>
                              <td>
                                @if($x->getFirstMedia('surat_tugas'))
                                <a type="button" href="{{ $x->getFirstMedia('surat_tugas')->getFullUrl() }}" target="_blank" class="btn btn-primary"><i class="mdi mdi-file-pdf"></i></a>
                                @endif
                              </td>
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
    <script src="{{ mix('/js/home.js', 'dist') }}"></script>
@stop