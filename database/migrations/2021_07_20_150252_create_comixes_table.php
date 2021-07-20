<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comixes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->Text('description');
            $table->string('thumb', 255);
            $table->float('price', 5, 2);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 25);
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
        Schema::dropIfExists('comixes');
    }
}
