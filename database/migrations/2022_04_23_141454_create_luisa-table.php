<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create("ejemplo",function (blueprint $table){
         $table->id();
         $table->string("nombre",50)->nullable();
         $table->string("descripcion",100)->unique();
         $table->timestamps();

        });



        
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      schema::dropIfexists("ejemplo");
    }
};
