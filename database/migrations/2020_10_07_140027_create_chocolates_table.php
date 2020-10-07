<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChocolatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chocolates', function (Blueprint $table) {
            $table -> id();

            $table -> string('name');
            $table -> string('types');
            $table -> text('description');
            $table -> integer('calory');
            $table -> decimal('price', 4,2);

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
        Schema::dropIfExists('chocolates');
    }
}
