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
        Schema::create('hanghoa', function (Blueprint $table) {
            $table->integer('mahh')->autoIncrement();
            $table->string('tenhh',60);
            $table->float('dongia',13,2);
            $table->text('mota')->nullable();
            $table->string('anh',100);
            $table->integer('maloai');
            $table->foreign('maloai')->references('maloai')->on('loai');
            $table->date('ngaylap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hanghoa');
    }
};
