<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mail_configs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('value');
            $table->string('type');
//            $table->string('type');
//            $table->string('driver');
//            $table->string('host');
//            $table->string('port');
//            $table->string('username');
//            $table->string('password');
//            $table->string('encryption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_configs');
    }
};
