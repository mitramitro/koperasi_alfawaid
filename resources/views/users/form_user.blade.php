@extends('layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Akun User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah akun user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nomor">Nama Anggota</label>
                    <input type="nomor" name="nomor" autocomplete="off" class="form-control" id="nomor" placeholder="nomor">
                  </div>
                  <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="nama" name="nama" autocomplete="off" class="form-control" id="nama" placeholder="nama">
                  </div>
                  <div class="form-group">
                    <label for="Jenis">Email</label>
                    <input type="Jenis" name="jenis" autocomplete="off" class="form-control" id="Jenis" placeholder="Jenis">
                  </div>
                  <div class="form-group">
                    <label for="Jumlah">Password</label>
                    <input type="Jumlah" name="jumlah" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">
                  </div>
                  <div class="form-group">
                    <label for="Jumlah">ulangi password</label>
                    <input type="Jumlah" name="jumlah" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">
                  </div>
                  <div class="form-group">
                    <label for="Jumlah">level akun</label>
                    <input type="Jumlah" name="jumlah" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

           

           

                

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
                
            
  </div>
  <!-- /.content-wrapper -->

@endsection