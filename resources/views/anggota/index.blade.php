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
            <h1>Daftar Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Anggota</li>
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
          <a href="{{url('/anggota/form_anggota')}}" class="btn btn-primary mb-1"> <i class="fas fa fa-plus"></i>
            Anggota</a>


            
        </div>

        @if (session('status'))
              <div class="alert alert-success">
               {{ session('status') }}
              </div>
            @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabel_anggota" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                    <th>Tanggal Daftar</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Status Kawin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Kartu Identifikasi</th>
                    <th>No HP</th>
                    <th>Status Anggota</th>
                    <!-- <th>Jenis Simpanan</th>
                    <th>Jumlah Setor</th> -->
                   
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
    $("#tabel_anggota").DataTable({
        processing:true,
        serverside:true,
        scrollX: true,
        responsive: true,
        autoWidth: false,
        stateSave: true,
        order: [[ 0, "desc" ]],
        ajax:"{{url('anggota/dataanggota')}}",
        columns: [
                {data: 'tgl_daftar',name: 'tgl_daftar'},
                {data: 'nama_lengkap',name:'nama_lengkap'},
                {data: 'jk',name: 'jk'},
                {data: 'pekerjaan',name: 'pekerjaan'},
                {data: 'status_kawin',name:'status_kawin'},
                {data: 'tempat_lahir',name: 'tempat_lahir'},
                {data: 'tgl_lahir',name: 'tgl_lahir'},
                {data: 'alamat',name:'alamat'},
                {data: 'kartu_identifikasi',name: 'kartu_identifikasi'},
                {data: 'nohp',name: 'nohp'},
                {data: 'status_anggota',name:'status_anggota'}
                // {data: 'jenis_simpanan',name: 'jenis_simpanan'},
                // {data: 'jumlah_setor',name: 'jumlah_setor'}
                
                
                ],


        //         "rowCallback": function( row, data ) {
        //           $(row).click(function() {
        //     let id = $(this).attr('data')
        //     window.location.href = '{{ url("/admin/item") }}/'+id+'/edit';
        // })
        // }


    });

   
   
  });
</script>

  @endsection