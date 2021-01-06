<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_bars', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('linkOne1')->nullable();
            $table->string('linkTwo2')->nullable();
            $table->string('linkTree3')->nullable();
            $table->string('linkFour4')->nullable();
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
        Schema::dropIfExists('nav_bars');
    }
}
