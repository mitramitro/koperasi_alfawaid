@extends('layouts.main')

@section('content')

<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data user</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          


            <div class="card">
            <div class="ml-3 py-3 d-flex flex-row align-items-center justify-content-between">
          <a href="{{url('/users/form_users')}}" class="btn btn-primary mb-1"> <i class="fas fa fa-plus"></i>
            User</a>
        </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table_users" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                 
                  </tbody>
                  
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
  </div>
  <!-- /.content-wrapper -->
  


</div>
<!-- ./wrapper -->


<script>
  $(function () {
    $("#table_users").DataTable({
        processing:true,
        serverside:true,
        responsive: true,
        autoWidth: false,
        ajax:"{{url('users/datausers')}}",
        columns: [
                {data: 'name',name: 'name'},
                {data: 'email',name:'email'},
                {data: 'level',name: 'level'}]
    });
   
  });
</script>

  @endsection