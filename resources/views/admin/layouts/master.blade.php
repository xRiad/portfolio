<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.includes.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <x-header/>

    <!-- Main Sidebar Container -->
    <x-side-bar/>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{--                        <h1 class="m-0">Dashboardfgfh</h1>--}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-footer/>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layouts.includes.foot')
</body>
</html>