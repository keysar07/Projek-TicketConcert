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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('metodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('alamat');
            $table->string('quantity');
            $table->string('harga_total');
            $table->string('no_telp');
            $table->foreignId('ticket_id')->constrained('tickets')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('metode_id')->constrained('metodes')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('checkin_status')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('metodes');
        Schema::dropIfExists('pesans');
    }
};
