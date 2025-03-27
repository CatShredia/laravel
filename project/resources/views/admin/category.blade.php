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
                            {{-- ! форма получения категории --}}
                            <form method="POST" action="{{ route('admin.category.store') }}">
                                @csrf
                                @method('post')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input name="title" type="text" class="form-control" placeholder="Enter title">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row" style="justify-content: center">
                            @foreach ($categories as $category)
                                <div class="col-md-4">
                                    <div class="card category" style="width: 100%;">
                                        <div class="card-body"
                                            style="display: flex; flex-direction: column;gap:10px; text-align: center">
                                            <h5 class="card-title">{{ $category->title }}</h5>
                                            <button type="button" href="#" class="btn btn-primary">Edit</button>
                                            <form method="POST" action="{{ route('admin.category.delete', $category->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" href="" class="btn btn-primary"
                                                    style="background-color: red; border:  1px solid red;">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
