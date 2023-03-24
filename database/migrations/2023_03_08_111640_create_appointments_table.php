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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->string('prepnurse_name'); //nurse
            $table->string('examination_room');
            $table->decimal('patient_bill')->nullable();

            $table->enum('status', ['pending', 'cancelled', 'examinating', 'ended'])->default('pending');



            $table->dateTime('expected_started_date');
            // $table->dateTime('expected_started_date');

            $table->dateTime('actual_started_date')->nullable(); //date time ==>Time calculate kmyt el wa2t
            $table->dateTime('actual_ended_date')->nullable();

            $table->unsignedBigInteger("doctor_id");
            $table->foreign("doctor_id")->references("id")->on("users");

            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("users");

            $table->unsignedBigInteger("patient_id");
            $table->foreign("patient_id")->references("id")->on("patients");


            // $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};