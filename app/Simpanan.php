<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $fillable = [
        'anggota_id','jenis_transaksi','jenis_simpanan', 'jumlah_yangdisetor','jumlah_yangditarik'
    ];

    protected $table = "simpanan";

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }

    

}
