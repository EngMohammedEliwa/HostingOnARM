<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobcontacts extends Migration
{

    public function up()
    {

        Schema::create('scrapcars', function (Blueprint $table) {

            $table->id()->unique();
            $table->string('typeOfScrap');
            $table->string('mark');
            $table->string('model');
            $table->integer('quantity');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('scrapcars');
    }
}

