<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('recipe_id');
            $table->integer('day_of_week_id');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
