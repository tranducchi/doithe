<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyCardGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_card_games', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('suppiler');
            $table->mediumInteger('price');
            $table->mediumInteger('quantity');
            $table->mediumText('email');
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
        Schema::dropIfExists('buy_card_games');
    }
}
