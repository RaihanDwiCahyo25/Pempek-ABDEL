<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('homepage_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_path')->nullable();
            $table->string('banner_path')->nullable();
            $table->string('slogan')->nullable();
            $table->text('description')->nullable();
            $table->string('telepon')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->text('alamat')->nullable();
            $table->string('url_sosmed')->nullable();
            $table->string('username_sosmed')->nullable();
            $table->string('foto_sosmed_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('homepage_settings');
    }
};
