<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->date('ngay_sinh');
            $table->string('gioi_tinh');
            $table->string('dan_toc');
            $table->string('so_dien_thoai')->unique();
            $table->string('que_quan');
            $table->string('dia_chi');
            $table->string('truong');
            $table->string('chuyen_nganh');
            $table->string('trinh_do_hoc_van');
            $table->string('ten_chuc_vu');
            $table->string('he_so_luong');
            $table->string('luong_co_ban');
            $table->string('ten_anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_viens');
    }
};