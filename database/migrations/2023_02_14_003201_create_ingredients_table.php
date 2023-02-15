<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->string('name');
            $table->string('amount');
            $table->string('is_every_time');
            $table->foreignId('recipe_id')->constrained();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
