<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('medium')->nullable();
            $table->string('name')->nullable();
            $table->string('name_eng')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_name_eng')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_name_eng')->nullable();
            $table->string('present_address')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('school_name')->nullable();
            $table->string('shift')->nullable();
            $table->string('school_name_eng')->nullable();
            $table->string('class_name')->nullable();
            $table->string('section_name')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('division')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
