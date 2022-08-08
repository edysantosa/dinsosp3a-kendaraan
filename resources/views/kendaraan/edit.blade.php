@extends('layouts.main')

@section('content')
    <div class="row m-t-50 p-t-50">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">
                                  @isset ($kendaraan)
                                    Edit data kendaraan                               
                                  @else
                                    Tambah data kendaraan
                                  @endisset
                                </h5>
                            </div>

                            <div class="card-body">
                                <form class="xp-form-validate" action="{{ route('kendaraan') }}" method="post">
                                    @isset ($kendaraan)
                                      <input type="hidden" name="id" value="{{ $kendaraan->id }}">                               
                                    @endisset
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="jenis">Jenis Kendaraan</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" placeholder="Jenis kendaraan.." value="@isset ($kendaraan){{ $kendaraan->jenis }}@else{{ old('jenis') }}@endisset">
                                            @error('jenis')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="merek">Merek Kendaraan</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek" placeholder="Merek kendaraan.." value="@isset ($kendaraan){{ $kendaraan->merek }}@else{{ old('merek') }}@endisset">
                                            @error('merek')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="kapasitas">Kapasitas Kendaraan</label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas" name="kapasitas" placeholder="Kapasitas kendaraan.." value="@isset ($kendaraan){{ $kendaraan->kapasitas }}@else{{ old('kapasitas') }}@endisset">
                                            @error('kapasitas')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="pelat">No. Pelat Kendaraan</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('pelat') is-invalid @enderror" id="pelat" name="pelat" placeholder="No. Pelat kendaraan.." value="@isset ($kendaraan){{ $kendaraan->pelat }}@else{{ old('pelat') }}@endisset">
                                            @error('pelat')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="pajak">Tgl. Pajak Kendaraan</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">                                  
                                            {{-- <input type="text" class="datepicker-here form-control @error('pajak') is-invalid @enderror" id="pajak" name="pajak" placeholder="dd/mm/yyyy"  value="@isset ($kendaraan){{ $kendaraan->pajak->format("d/m/Y") }}@else{{ old('pajak') }}@endisset" aria-describedby="basic-addon3"/> --}}
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-calendar"></i></span>
                                              </div>
                                              <input type="text" class="datepicker-here form-control @error('pajak') is-invalid @enderror" id="pajak" name="pajak" placeholder="dd/mm/yyyy" data-date="@isset($kendaraan){{$kendaraan->pajak->format("d/m/Y")}}@else{{old('pajak') ?? 'today'}}@endisset" aria-describedby="basic-addon3"/> @error('pajak')
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
    <script src="{{ asset('dist/js/kendaraan-edit.js') }}"></script>
@stop