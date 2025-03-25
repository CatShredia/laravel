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
                    <div class="col-md-12" style="padding: 10px">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-bullhorn"></i>
                                    Information
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="callout callout-danger">
                                    <h5>Red</h5>
                                </div>
                                <div class="callout callout-info">
                                    <h5>Blue</h5>
                                </div>
                                <div class="callout callout-warning">
                                    <h5>Yellow</h5>
                                </div>
                                <div class="callout callout-success">
                                    <h5>Green</h5>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

        @include('admin.include.footer')

        @include('admin.include.control-sidebar')
    </div>
    <!-- ./wrapper -->
@endsection