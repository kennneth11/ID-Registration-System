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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('or_number');
            $table->string('id_number');
            $table->string('name');
            $table->string('course');
            $table->string('college');
            $table->string('blood_type');
            $table->date('date_of_birth');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('contact_person_name');
            $table->string('contact_person_number');
            $table->string('file_path')->nullable();
            $table->date('date_issued');
            $table->string('status');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
