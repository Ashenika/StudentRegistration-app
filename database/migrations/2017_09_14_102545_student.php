<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registerstudent',function(Blueprint $table){
            $table -> string('stuName',100);
            $table -> string('username', 100);
            $table -> string('stuIndex', 50);
            $table -> string('stuAddress',100);
            $table -> string('password',100);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('registerstudent');
    }
}
