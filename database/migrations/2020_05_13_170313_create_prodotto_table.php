<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('prodotto', function (Blueprint $table) {
            $table->bigIncrements('prodId');
            $table->string('name',50);
            $table->bigInteger('catId')->unsigned()->index();
            $table->foreign('catId')->references('catId')->on('categoria');
            $table->string('marca',50);
            $table->string('descShort',500);
            $table->string('descLong',1000);
            $table->float('price');
            $table->integer('discountPerc');
            $table->tinyInteger('discounted');
            $table->text('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodotto');
    }
}

