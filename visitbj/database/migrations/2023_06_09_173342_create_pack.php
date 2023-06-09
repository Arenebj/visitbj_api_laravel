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
        Schema::create('pack', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('limit_person')->nullable();
            $table->string('duration');
            $table->integer('price');
            $table->enum('type', ['standard', 'personalized']);
            $table->bigInteger('theme_id')->unsigned();
            $table->foreign('theme_id')->references('id')->on('theme');
            $table->integer('ratings')->nullable();
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
        Schema::dropIfExists('pack');
    }
};
