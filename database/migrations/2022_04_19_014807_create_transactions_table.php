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
            $table->BigInteger('or_number');
            $table->BigInteger('id_number');
            $table->string('first_name');
            $table->string('miidle_name');
            $table->string('last_name');
            $table->string('blood_type');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('mobile_Number');
            $table->text('address');
            $table->string('course');
            $table->string('college');  
            $table->string('emergency_contact');
            $table->string('emergency_mobileNo');
            $table->string('emergency_address');

            $table->string('file_path_picture');
            $table->string('file_path_singature');

            $table->date('date_issued')->nullable();
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
