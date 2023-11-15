<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->uuid('id');

            $table->string('start_coordinates');
            $table->string('start_address')->nullable();
            $table->string('end_coordinates');
            $table->string('end_address')->nullable();
            $table->integer('seats');
            $table->dateTime('datetime');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rides');
    }
};
