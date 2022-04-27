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
        Schema::create('binhluan', function (Blueprint $table) {
            $table->integer('mabl')->autoIncrement();
            $table->integer('mahh');
            $table->integer('makh');
            $table->date('ngaybl');
            $table->text('noidung');
            $table->foreign('mahh')->references('mahh')->on('hanghoa');
            $table->foreign('makh')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binhluan');
    }
};
