<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{

    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('description');
            $table->string('city');
            $table->string('county');
            $table->string('image');
            $table->string('console_type');
            $table->string('advert_type');
            $table->string('price');
            $table->string('package');
            $table->string('condition');
            $table->boolean('shelfed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
