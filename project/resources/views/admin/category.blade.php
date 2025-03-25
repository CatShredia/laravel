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
                <div class="container-fluid" style="padding: 10px">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12">
                        @foreach ($category as $categories)
                            <div class="card category" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $category->title }}</h5>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        @endforeach
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