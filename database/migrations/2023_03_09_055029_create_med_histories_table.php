<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('med_histories', function (Blueprint $table) {
            // $table->id();




            $table->enum('pregnant', ['yes', 'no'])->default('no');
            $table->string('images')->nullable();


            $table->string('allergies')->nullable();
            $table->string('diseases')->nullable();


            $table->string('medications')->nullable(); //list  medications you are currently taking
            // $table->string('currentHealth')->nullable();


            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("users");

            $table->unsignedBigInteger("patient_id");
            $table->foreign("patient_id")->references("id")->on("patients");

            // // $table->string('startDate');
            // // $table->string('endDate');
            // // $table->timestamp('created_at')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('med_histories');
    }
};