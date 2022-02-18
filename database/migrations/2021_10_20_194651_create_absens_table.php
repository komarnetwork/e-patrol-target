<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('absens', function (Blueprint $table) {
         $table->id();
         $table->foreignId('user_id');
         $table->string('name');
         $table->timestamp('datang');
         $table->timestamp('pulang')->nullable();
         $table->string('image')->nullable();
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
      Schema::dropIfExists('absens');
   }
}
