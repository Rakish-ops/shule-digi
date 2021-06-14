<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darasas', function (Blueprint $table) {
            
            $table->unsignedBigInteger('class_id')->unique();
            $table->string('student_name');
            $table->string('subjects');
            $table->string('year');
           $table->string('teacher_name');
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
        Schema::dropIfExists('darasas');
    }
}
