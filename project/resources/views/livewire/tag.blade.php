<div class="wrapper">

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
                            <h3 class="card-title">Create Tag</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{-- ! форма получения категории --}}
                        <form method="POST" wire:submit='CreateTag'>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Enter title"
                                        wire:model='title'>
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
                        @foreach ($categories as $Tag)
                            <div class="col-md-4">
                                <div class="card Tag" style="width: 100%;">
                                    <div class="card-body"
                                        style="display: flex; flex-direction: column;gap:10px; text-align: center">
                                        <h5 class="card-title">{{ $Tag->title }}</h5>

                                        @if ($editingId == $Tag->id)
                                            <form id="form" wire:key='Tag->id'
                                                style="display: flex; flex-direction: column; gap: 10px;">
                                                <input name="title" id="title" type="text" wire:model="editingTitle"
                                                    style="height: 50px; text-align: center;"></input>

                                                <button type="button" href="#" class="btn btn-primary"
                                                    style="background-color: rgb(0, 255, 0); border:  1px solid rgb(0, 255, 0); color: black;"
                                                    wire:click='UpdateTag({{ $Tag->id }})'>OK</button>
                                                <button type="button" href="#" class="btn btn-primary"
                                                    wire:click='SetNullEditingId'>Cancel</button>
                                            </form>


                                        @else
                                            <button type="button" href="#" class="btn btn-primary"
                                                wire:click='SetEditingId({{ $Tag->id }})'>Edit</button>
                                        @endif


                                        <form method="POST" wire:submit='DeleteTag({{ $Tag->id }})'>
                                            @csrf
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