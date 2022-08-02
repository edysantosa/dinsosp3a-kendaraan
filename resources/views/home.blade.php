@extends('layouts.notauthenticated-main')

@section('content')
    <div class="row p-t-50">
        <div class="col-md-3 col-lg-3 offset-md-9 text-right">
            <div class="xp-countdown-block"><span class="text-info font-40" id="clock">12:00:00</span></div>
        </div>
    </div>
@endsection

@section('pagescript')
    <script src="{{ asset('dist/js/home.js') }}"></script>
@stop