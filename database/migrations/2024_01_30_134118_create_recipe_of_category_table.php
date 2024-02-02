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
        Schema::create('recipesOfCategory', function (Blueprint $table) {
            $table->foreignId('recipe_id')->constrained('recipe');
            $table->foreignId('category_id')->constrained('category');
            $table->primary(['recipe_id','category_id']);   
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
        Schema::dropIfExists('recipesOfCategory');
    }
};
