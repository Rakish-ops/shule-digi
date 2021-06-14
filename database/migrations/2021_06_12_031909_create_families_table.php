<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            
            $table->unsignedBigInteger('family_id')->unique();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_phone')->unique();
            $table->string('mother_phone')->unique();
            $table->string('guardian_name');
            $table->string('guardian_phone')->unique();
            $table->string('home_address');
            //$table->foreign('family_id')->references('id')->on(table:'students');
           // $table->foreign('student_id')->references('id')->on(table:'fees');
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
        Schema::dropIfExists('families');
    }
}
