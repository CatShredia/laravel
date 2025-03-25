@extends('admin.layouts.default')
@section('content')
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        @include('admin.include.navbar')

        @include('admin.include.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                </div>
            </section>
            <!-- /.content -->
        </div>

        @include('admin.include.footer')

        @include('admin.include.control-sidebar')
    </div>
    <!-- ./wrapper -->
@endsection