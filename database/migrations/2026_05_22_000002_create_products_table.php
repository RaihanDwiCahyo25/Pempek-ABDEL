<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('slug')->unique();
            $table->string('deskripsi_singkat', 255);
            $table->text('deskripsi_lengkap');
            $table->decimal('harga', 12, 2);
            $table->string('gambar_path')->nullable();
            $table->string('link_whatsapp', 500);
            $table->boolean('status_active')->default(true);
            $table->integer('urutan_produk')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
