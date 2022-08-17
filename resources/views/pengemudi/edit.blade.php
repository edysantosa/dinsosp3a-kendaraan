@extends('layouts.main')

@section('content')
    <div class="row m-t-50 p-t-50">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">
                                  @isset ($pengemudi)
                                    Edit data pengemudi                               
                                  @else
                                    Tambah data pengemudi
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
                                        <label class="col-lg-3 col-form-label" for="nik">NIK</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="NIK.." value="@isset ($pengemudi){{ $pengemudi->nik }}@else{{ old('nik') }}@endisset">
                                            @error('nik')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="nama">Nama</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama.." value="@isset ($pengemudi){{ $pengemudi->nama }}@else{{ old('nama') }}@endisset">
                                            @error('nama')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="hp">No. HP</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control @error('hp') is-invalid @enderror" id="hp" name="hp" placeholder="No. HP.." value="@isset ($pengemudi){{ $pengemudi->hp }}@else{{ old('hp') }}@endisset">
                                            @error('hp')
                                              <div class="invalid-feedback">
                                                  {{ $message }}
                                              </div>
                                            @enderror                                                 
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
    <script src="{{ mix('/js/pengemudi-edit.js', 'dist') }}"></script>
@stop