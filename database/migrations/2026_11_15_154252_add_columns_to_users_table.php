<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', length: 45)->after('email')->unique()->nullable();
            $table->string('google_id', length: 45)->after('phone')->nullable();
            $table->string('facebook_id', length: 45)->after('google_id')->nullable();
        });
    }


    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIfExists('phone');
            $table->dropIfExists('google_id');
            $table->dropIfExists('facebook_id');
        });
    }
};
