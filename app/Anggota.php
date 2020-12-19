<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'tgl_daftar', 'nama_lengkap', 'jk','pekerjaan','status_kawin','tempat_lahir','tgl_lahir','alamat','kartu_identifikasi','nohp','status_anggota'
    ];

    protected $table = "anggota";

    public function user(){
        return $this->hasMany(User::class);
    }

    public function simpanan(){
        return $this->hasMany(Simpanan::class);
    }
    
}
