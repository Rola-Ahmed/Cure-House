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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            // $table->string('patientBill');
            $table->string('first_name');
            $table->string('Last_name');
            $table->string('phone_number');
            // $table->string('nationalID');

            $table->unsignedBigInteger("doctor_id")->nullable();
            ;
            $table->foreign("doctor_id")->references("id")->on("users");


            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("users");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};