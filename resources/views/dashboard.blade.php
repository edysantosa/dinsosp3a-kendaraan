@extends('layouts.main')

@section('content')
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            DASHBOARD
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
@endsection

@section('pagescript')
<script src="{{ asset('dist/js/dashboard.js') }}"></script>
@stop