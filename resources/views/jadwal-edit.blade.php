@extends('layouts.main')

@section('content')
    <div class="row m-t-50 p-t-50">
                    <div class="col-lg-12 m-t-15">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">
                                  @isset ($jadwal)
                                    Edit Jadwal                               
                                  @else
                                    Buat Jadwal Baru
                                  @endisset
                                </h5>
                            </div>

                            <div class="card-body">
                                <form class="xp-form-validate" action="{{ route('jadwal') }}" method="post">
                                    @isset ($jadwal)
                                      <input type="hidden" name="id" value="{{ $jadwal->id }}">                               
                                    @endisset
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="waktu">Tanggal dan Jam</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">                                  
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-calendar"></i></span>
                                              </div>
                                              <input type="text" class="datepicker-here form-control @error('waktu') is-invalid @enderror" data-timepicker="true" data-time-format='hh:ii' id="waktu" name="waktu" placeholder="Pilih tanggal dan waktu jadwal" data-date="@isset($jadwal){{$jadwal->waktu->format("d/m/Y H:i")}}@else{{old('waktu') ?? 'today'}}@endisset" aria-describedby="basic-addon3"/> @error('waktu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                              @enderror                                                 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="kegiatan">Kegiatan</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan" value="@isset ($jadwal){{ $jadwal->kegiatan }}@else{{ old('kegiatan') }}@endisset">
                                            @error('kegiatan')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="pengemudi">Pengemudi</label>
                                        <div class="col-lg-6">
                                            <select class="xp-select2-single form-control" name="pengemudi">
                                              @foreach($pengemudi as $p)
                                                <option value="{{ $p->id }}" {{ (old("pengemudi") == $p->id ? "selected":"") }}>{{ $p->nama }}</option>
                                                <option value="{{ $p->id }}" 
                                                    @isset($jadwal)
                                                        {{($jadwal->pengemudi_id == $p->id ? "selected":"")}}
                                                    @else
                                                        {{(old("pengemudi") == $p->id ? "selected":"")}}
                                                    @endisset
                                                >{{ $p->nama }}</option>
                                              @endforeach
                                            </select>                                         
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="kendaraan">Kendaraan</label>
                                        <div class="col-lg-6">
                                            <select class="xp-select2-single form-control" name="kendaraan">
                                              @foreach($kendaraan as $k)
                                                <option value="{{ $k->id }}"
                                                    @isset($jadwal)
                                                        {{($jadwal->kendaraan_id == $k->id ? "selected":"")}}
                                                    @else
                                                        {{(old("kendaraan") == $k->id ? "selected":"")}}
                                                    @endisset
                                                >{{ $k->merek }} - {{ $k->pelat }}</option>
                                              @endforeach
                                            </select>                                         
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