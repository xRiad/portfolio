@extends('admin.layouts.master')


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                        </div>


                        <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="email" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div id="summernote">Hello Summernote</div>
                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">Upload</span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" name="togle" value="1" class="custom-control-input" id="customSwitch1">
                                  <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                                </div>
                            </div>
                          </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
