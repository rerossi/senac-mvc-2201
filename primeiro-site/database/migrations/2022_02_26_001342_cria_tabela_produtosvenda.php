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
        Schema::create('produtosvenda', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('venda_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->integer('quantidade');
            $table->double('valor', 12, 2);
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
        Schema::dropIfExists('produtosvenda');
    }
};
