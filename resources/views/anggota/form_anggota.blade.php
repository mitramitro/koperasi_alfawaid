@extends('layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Anggota</li>
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
                <h3 class="card-title">Input Anggota Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{ url('/anggota/store') }}">
              @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="tgl_daftar">Tanggal Daftar</label>
                    <input type="date" name="tgl_daftar" autocomplete="off" class="form-control @error('tgl_daftar') is-invalid @enderror"  id="tgl_daftar" placeholder="tgl_daftar" value="{{old('tgl_daftar')}}">
                  </div>
                  @error('tgl_daftar') 
                  <div id="tgl_daftar" class="text-danger">{{$message}}</div> 
                  @enderror
                  <div class="form-group">
                    <label for="nama_lengkap">Nama Calon Anggota</label>
                    <input type="text" name="nama_lengkap" autocomplete="off" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="nama_lengkap" value="{{old('nama_lengkap')}}">
                  </div>
                  @error('nama_lengkap') 
                  <div id="nama_lengkap" class="text-danger">{{$message}}</div> 
                  @enderror

                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="jk1" name="jk" value="Laki-Laki" checked>
                          <label for="jk1" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="jk2" name="jk" value="Perempuan" >
                          <label for="jk2" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" autocomplete="off" class="form-control @error('pekerjaan') is-invalid @enderror"" id="pekerjaan" placeholder="pekerjaan">
                  </div>
                 
                  <div class="form-group">
                    <label for="jk">Status Kawin</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="kawin" name="status_kawin" value="Kawin" checked>
                          <label for="customRadio1" class="custom-control-label">Kawin</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="belum_kawin" name="status_kawin" value="Belum Kawin">
                          <label for="customRadio2" class="custom-control-label">Belum Kawin</label>
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" autocomplete="off" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="tempat_lahir" value="{{old('tempat_lahir')}}">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" autocomplete="off" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="tgl_lahir" value="{{old('tgl_lahir')}}">
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" autocomplete="off" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{old('alamat')}}">
                  </div>

                  <div class="form-group">
                    <label for="kartu_identifikasi">Kartu Identifikasi</label>
                    <input type="text" name="kartu_identifikasi" autocomplete="off" class="form-control @error('kartu_identifikasi') is-invalid @enderror" id="kartu_identifikasi" placeholder="Kartu Identifikasi" value="{{old('kartu_identifikasi')}}">
                  </div>

                  <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" name="nohp" autocomplete="off" class="form-control @error('nohp') is-invalid @enderror" id="nohp" placeholder="No HP" value="{{old('nohp')}}">
                  </div>

                  <div class="form-group">
                        <label>Status Anggota</label>
                        <select class="form-control" name="status_anggota" >
                          <option value="Anggota">Anggota</option>
                          <option value="Anggota Istimewa">Anggota Istimewa</option>
                        </select>
                 </div>

                 <div class="form-group">
                 <label>Rincian untuk pendaftaran anggota </label>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox24" value="option1" checked disabled>
                          <label for="customCheckbox1" class="custom-control-label">Menanam Modal Pokok ( Rp. 500.000) - dibayar sekali saat mendaftar</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox25" checked disabled>
                          <label for="customCheckbox2" class="custom-control-label">Menanam Modal Wajib (Rp. 50.000 ) - Dibayar setiap bulan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox26" checked disabled>
                          <label for="customCheckbox2" class="custom-control-label">Hibah untuk Qordul Hasan (Rp. 100.000) - dibayar sekali saat mendaftar </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox27" checked disabled>
                          <label for="customCheckbox2" class="custom-control-label">Dana RAT (Rp. 100.000) - dibayar sekali saat mendaftar</label>
                        </div>
                        <label>--- Total Transfer ---</label>
                        <input type="text" autocomplete="off" class="form-control"value=" Rp. 750.000" readonly disabled>
                      </div>

                    <div class="form-group">
                    <label for="exampleInputFile">Upload Identitas diri (KTP/SIM/KK)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" disabled>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload Bukti Transfer</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" disabled>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
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