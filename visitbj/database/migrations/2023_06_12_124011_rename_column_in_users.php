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
        if(!Schema::hasColumn('users','gender'))
        Schema::table('users', function (Blueprint $table) {
            $table->enum("gender",['Feminin','Masculin',"Autre"])->nullable();
        });
        if(!Schema::hasColumn('users','birthdate'))
        Schema::table('users', function (Blueprint $table) {
            $table->dateTime("birthdate")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
