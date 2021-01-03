<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('student_id');
            $table->string('student_date_of_birth');
            $table->string('student_birth_certificate');
            $table->string('student_photo');
            $table->string('student_father_name');
            $table->string('student_father_occupation')->nullable();
            $table->string('student_father_address');
            $table->string('student_father_office_address')->nullable();
            $table->string('student_mother_name');
            $table->string('student_mother_occupation')->nullable();
            $table->string('student_mother_address');
            $table->string('student_mother_office_address')->nullable();
            $table->string('student_phone_number');
            $table->string('student_religion');
            $table->string('student_caste');
            $table->string('student_guardian_name');
            $table->string('student_guardian_phone_number');
            $table->string('student_guardian_address');
            $table->string('student_class');
            $table->string('student_last_school')->nullable();
            $table->string('payment_document')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->longText('declined_reason')->nullable();
            $table->boolean('payment_status')->default(false);

            $table->timestamps();

            $table->index('student_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
