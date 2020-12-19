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
            <h1>Tabungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabungan</li>
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
          <!-- <a href="{{url('/simpanan/form_simpanan')}}" class="btn btn-primary mb-1"> <i class="fas fa fa-plus"></i>
            Input Tabungan</a> -->
        </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table_simpanan" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Jumlah Saldo</th>
                    <th>Aksi</th>

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
    $("#table_simpanan").DataTable({
        processing:true,
        serverside:true,
        responsive: true,
        autoWidth: false,
        stateSave:true,
        ajax:"{{url('simpanan/data_anggota')}}",
        columns: [
                {data: 'id',name:'id'},
                {data: 'nama_lengkap',name: 'nama_lengkap'},
                {data: 'alamat',name:'alamat'},
                {data: 'nohp',name: 'nohp'},
                {data: 'saldo',name: 'saldo'},
                {data: 'aksi',name: 'aksi'}  
                ],
        columnDefs: [
                {width: '3%', targets: 0},
            ]
                
    });
   
  });
</script>

  @endsection