<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('logo')->nullable();
            $table->unsignedInteger('superbowl_titles')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}

