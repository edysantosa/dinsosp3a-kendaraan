@extends('layouts.main')

@section('content')
    <div class="row m-t-50 p-t-50">
                    <div class="col-lg-12 m-t-15">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">
                                  @isset ($pengemudi)
                                    Edit Jadwal                               
                                  @else
                                    Buat Jadwal Baru
                                  @endisset
                                </h5>
                            </div>

                            <div class="card-body">
                                <form class="xp-form-validate" action="{{ route('pengemudi') }}" method="post">
                                    @isset ($pengemudi)
                                      <input type="hidden" name="id" value="{{ $pengemudi->id }}">                               
                                    @endisset
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="waktu">Tanggal dan Jam</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">                                  
                                            {{-- <input type="text" class="datepicker-here form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" placeholder="dd/mm/yyyy"  value="@isset ($kendaraan){{ $kendaraan->waktu->format("d/m/Y") }}@else{{ old('waktu') }}@endisset" aria-describedby="basic-addon3"/> --}}
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-calendar"></i></span>
                                              </div>
                                              <input type="text" class="datepicker-here form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" placeholder="Pilih tanggal dan waktu jadwal" data-date="@isset($kendaraan){{$kendaraan->waktu->format("d/m/Y")}}@else{{old('waktu') ?? 'today'}}@endisset" aria-describedby="basic-addon3"/> @error('waktu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                              @enderror                                                 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
    </div>
@endsection

@section('pagescript')
    <script src="{{ asset('dist/js/jadwal-edit.js') }}"></script>
@stop