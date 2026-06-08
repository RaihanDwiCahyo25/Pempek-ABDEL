<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('homepage_settings', function (Blueprint $table) {
            $table->string('kemitraan_online_image_path')->nullable();
            $table->string('kemitraan_offline_image_path')->nullable();
            $table->string('kemitraan_reseller_map_image_path')->nullable();
            $table->string('kemitraan_banner_image_path')->nullable();
            $table->text('kemitraan_online_description')->nullable();
            $table->text('kemitraan_offline_description')->nullable();
            $table->text('kemitraan_reseller_description')->nullable();
            $table->string('kemitraan_banner_title')->nullable();
            $table->text('kemitraan_banner_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('homepage_settings', function (Blueprint $table) {
            $table->dropColumn([
                'kemitraan_online_image_path',
                'kemitraan_offline_image_path',
                'kemitraan_reseller_map_image_path',
                'kemitraan_banner_image_path',
                'kemitraan_online_description',
                'kemitraan_offline_description',
                'kemitraan_reseller_description',
                'kemitraan_banner_title',
                'kemitraan_banner_description',
            ]);
        });
    }
};
