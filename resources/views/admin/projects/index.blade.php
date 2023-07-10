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
                          <a class="btn btn-success ml-3 mt-2" href="{{ route('admin.projects.creation') }}">Create</a>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>SLUG</th>
                                    <th>STATUS</th>
                                    <th>EDIT</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($projects as $project)
                                    <tr>

                                        <td>{{$project->id}}</td>
                                        <td>{{$project->title}}</td>
                                        <td>{{$project->slug}}</td>
                                        <td> {{$project->status}}</td>

                                        <td>
                                          <a class="btn btn-primary" href="{{ route('admin.projects.edit', ['id' => $project->id]) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach






                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

