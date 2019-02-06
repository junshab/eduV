<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('admission_number')->nullable();
            $table->date('admission_date')->nullable();
            $table->string('course_batch_id');
            $table->string('student_category')->nullable();
            $table->string('student_type')->nullable();
            $table->string('student_lives_with')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('user_id');
            $table->string('profile_id');
            $table->string('client_id');
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
        Schema::dropIfExists('students');
    }
}
