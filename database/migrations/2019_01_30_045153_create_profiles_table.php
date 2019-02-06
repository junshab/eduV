<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('image')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('nationality');
            $table->string('birth_place')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('education_id')->nullable();
            $table->string('location_id')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('profiles');
    }
}
