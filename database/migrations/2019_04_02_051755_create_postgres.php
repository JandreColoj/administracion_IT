<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostgres extends Migration{
    public function up(){
        Schema::connection('pgsql')->create('prueba', function (Blueprint $table) {
            $table->string('nombre');
        });
     }
  
     public function down(){
        Schema::connection('pgsql')->dropIfExists('prueba');
     }

}
