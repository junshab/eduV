<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institution_name');
            $table->string('institution_type');
            $table->string('address_id');
            $table->string('email');
            $table->string('phone');
            $table->string('logo')->nullable();
            $table->boolean('phone_verified')->default(false);
            $table->boolean('email_verified')->default(false);
            $table->string('phone_otp')->nullable();
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
        Schema::dropIfExists('institutions');
    }
}
