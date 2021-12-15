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
            $table->string('photo', 100)->nullable();
            $table->boolean('gander')->nullable();
            $table->boolean('medium')->nullable();
            $table->boolean('is_school')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('name_eng', 100)->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('father_occupation', 100)->nullable();
            $table->string('father_name_eng', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('mother_occupation', 100)->nullable();
            $table->string('mother_name_eng', 100)->nullable();
            $table->string('present_address', 100)->nullable();
            $table->string('parmanent_address', 100)->nullable();
            $table->string('mobile_number', 100)->nullable();
            $table->string('birth_date', 100)->nullable();
            $table->string('school_name', 100)->nullable();
            $table->string('shift', 100)->nullable();
            $table->string('school_name_eng', 100)->nullable();
            $table->string('class_name', 100)->nullable();
            $table->string('section_name', 100)->nullable();
            $table->string('roll_no', 100)->nullable();
            $table->string('division', 100)->nullable();
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
