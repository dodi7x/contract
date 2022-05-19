<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('civis', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('user_id');
          //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->date('date');
            $table->string('id_number')->unique;
            $table->string('address');
            $table->string('Profession');
            $table->integer('law_number');
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
        Schema::dropIfExists('civis');
    }
}
