@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.css')}}">


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
        <!-- Right column -->
        <div class="col-sm-6">
        <!-- general form elements -->
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Simpanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{ url('/simpanan/store') }}">
              @csrf
                <div class="card-body">
                  
                <div class="form-group">
                    <label for="nomor">Nama Anggota</label>
                    <input type="text" autocomplete="off" class="form-control" id="nomor" name="nama_lengkap" value="{{ $data_anggota->nama_lengkap}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nomor">Nomor</label>
                    <input type="text" autocomplete="off" class="form-control" id="nomor" name="anggota_id" value="{{ $data_anggota->id }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text"  autocomplete="off" class="form-control" id="alamat" value="{{ $data_anggota->alamat }}" disabled>
                  </div>
                  <div class="form-group">
                        <label>Jenis Simpanan</label>
                        <select class="form-control" name="jenis_simpanan" >
                          <option value="Modal Pokok">Modal Pokok</option>
                          <option value="Modal Wajib">Modal Wajib</option>
                          <option value="Simpanan Sukarela (akad Qord)">Simpanan Sukarela (akad Qord)</option>
                        </select>
                 </div>
                  <div class="form-group">
                    <label for="Jumlah">Jumlah Simpanan</label>
                    <input type="Jumlah" name="jumlah_yangdisetor" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">
                  </div>
                  <input type="hidden" name="jenis_transaksi" value="Simpanan" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              
            </div>
            <!-- /.card -->

        </div>



          <!-- Right column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Penarikan Tunai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{ url('/simpanan/store') }}">
              @csrf
                <div class="card-body">
                  
               


                <div class="form-group">
                    <label for="nomor">Nama Anggota</label>
                    <input type="text" autocomplete="off" class="form-control" id="nomor" name="nama_lengkap" value="{{ $data_anggota->nama_lengkap}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nomor">Nomor</label>
                    <input type="text" autocomplete="off" class="form-control" id="nomor" name="anggota_id" value="{{ $data_anggota->id }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text"  autocomplete="off" class="form-control" id="alamat" value="{{ $data_anggota->alamat }}" disabled>
                  </div>
                  <!-- <div class="form-group">
                    <label for="nomor">Nomor</label>
                    <input type="nomor" autocomplete="off" class="form-control" id="nomor" name="anggota_id" placeholder="nomor">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="nomor"  autocomplete="off" class="form-control" id="alamat" placeholder="Alamat">
                  </div> -->
                  <div class="form-group">
                        <label>Jenis Penarikan</label>
                        <select class="form-control" name="jenis_simpanan" >
                          <option value=">Modal Pokok">Modal Pokok</option>
                          <option value="Modal Wajib">Modal Wajib</option>
                          <option value="Simpanan Sukarela (akad Qord)">Simpanan Sukarela (akad Qord)</option>
                        </select>
                 </div>
                  <div class="form-group">
                    <label for="Jumlah">Jumlah Penarikan</label>
                    <input type="Jumlah" name="jumlah_yangditarik" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">
                  </div>
                  <input type="hidden" name="jenis_transaksi" value="Penarikan" autocomplete="off" class="form-control" id="Jumlah" placeholder="Jumlah">

                  

                  

                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ambil</button>
                </div>
              </form>
              
            </div>
            <!-- /.card -->
            

           

           

           

                

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
            
  </div>
  <!-- /.content-wrapper -->
  <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>
 
  <script>
      $('.anggota_simpanan').select2({theme: 'bootstrap4'})
  </script>
@endsection