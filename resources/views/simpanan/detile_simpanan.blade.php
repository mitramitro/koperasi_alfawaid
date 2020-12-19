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
          <a href="{{url('/simpanan/form_simpanan/'.Request::segment(3))}}" class="btn btn-primary mb-1"> <i class="fas fa fa-plus"></i>
            Input Tabungan</a>
        </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table_simpanan" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                    <th>Nama Anggota</th>
                    <th>Alamat</th>
                    <th>Jenis transaksi </th>
                    <th>Jenis Simpanan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>


                   
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
        ajax:"{{url('simpanan/datasimpanan/'.Request::segment(3) )}}",
        columns: [
                {data: 'namae',name: 'namae'},
                {data: 'alamat',name:'alamat'},
                {data: 'jenis_transaksi',name: 'jenis_transaksi'},
                {data: 'jenis_simpanan',name: 'jenis_simpanan'},
                {data: 'jumlah_yangdisetor',name: 'jumlah_yangdisetor'},
                {data: 'jumlah_yangditarik',name: 'jumlah_yangditarik'},
                {data: 'jumlah_saldo',name: 'jumlah_Saldo'}
                
                
                ]
    });
   
  });
</script>

  @endsection