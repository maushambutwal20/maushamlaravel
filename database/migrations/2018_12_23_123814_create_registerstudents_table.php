<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterstudentsTable extends Migration
{

    public function up()
    {
        Schema::create('registerstudents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('roll')->nullable();
            $table->string('grade')->nullable();
            $table->string('email')->nullable();
            $table->string('shift')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->integer('english')->nullable();
            $table->integer('nepali')->nullable();
            $table->integer('economics')->nullable();
            $table->integer('account')->nullable();
            $table->integer('math')->nullable();
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('registerstudents');
    }
}
