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
            

            $table->unsignedBigInteger('student_id')->unique();
            $table->string('student_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->foreignId('family_id')->onUpdate('cascade')->onDelete('cascade')->unsigned()->index();
            $table->foreignId('class_id')->onUpdate('cascade')->onDelete('cascade')->unsigned()->index();
            $table->string('home_address')->nullable();
            $table->string('medical_notes')->nullable();
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
