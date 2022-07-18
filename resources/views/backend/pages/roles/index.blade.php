@extends('backend.layouts.master')

@section('title')
Role Page - Admin Panel
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Roles </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Roles </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Roles List</h3>
              <a class="btn btn-success btn-sm" style="float: right;"
                    onclick="Show('New Role','{{ route('roles.create') }}')"><i
                        class=" fa fa-plus"></i>&nbsp;New Role</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>


                @foreach ($roles as $role)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $role->name }}</td>
                  <td>-</td>
                </tr>
                @endforeach

                </tbody>

                <tfoot>
                {{-- <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr> --}}
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->




@endsection
