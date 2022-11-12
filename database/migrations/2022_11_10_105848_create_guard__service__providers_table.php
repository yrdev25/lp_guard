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
        Schema::create('guard__service__providers', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('guard_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('driver');
            $table->string('provider');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guard__service__providers');
    }
};
