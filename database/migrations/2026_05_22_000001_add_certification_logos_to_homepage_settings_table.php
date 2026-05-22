<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('homepage_settings', function (Blueprint $table) {
            $table->string('halal_logo_path')->nullable()->after('banner_path');
            $table->string('bpom_logo_path')->nullable()->after('halal_logo_path');
        });
    }

    public function down()
    {
        Schema::table('homepage_settings', function (Blueprint $table) {
            $table->dropColumn(['halal_logo_path', 'bpom_logo_path']);
        });
    }
};
