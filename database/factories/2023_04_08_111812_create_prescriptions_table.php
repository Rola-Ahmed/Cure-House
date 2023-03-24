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
        Schema::create('prescriptions', function (Blueprint $table) {
            // $table->id();
            // $table->string("medicine");
            // $table->string("describtion"); //hy5do 1 time a day 


            // $table->unsignedBigInteger("appointment_id");
            // $table->foreign("appointment_id")->references("id")->on("appointments");

            // $table->unsignedBigInteger("user_id");
            // $table->foreign("user_id")->references("id")->on("users");

            // $table->unsignedBigInteger("patient_id");
            // $table->foreign("patient_id")->references("id")->on("patients");
            // $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};