<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisTransaksiToSimpananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('simpanan', function (Blueprint $table) {
            $table->string('jenis_transaksi')->after('anggota_id');
            $table->integer('jumlah_yangditarik')->after('jumlah_yangdisetor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('simpanan', function (Blueprint $table) {
            $table->dropColomn('jenis_transaksi');
            $table->dropColomn('jumlah_yangditarik');
        });
    }
}
