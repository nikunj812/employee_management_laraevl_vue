<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('address');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments'); 
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries'); 
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states'); 
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities'); 
            $table->char('zip_code');
            $table->date('birth_date')->nullable();
            $table->date('hired_date')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
