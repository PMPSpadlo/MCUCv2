<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('symbol')->unique();
            $table->double('price');
            $table->double('volume_24h')->nullable();
            $table->double('volume_change_24h')->nullable();
            $table->double('percent_change_1h')->nullable();
            $table->double('percent_change_24h')->nullable();
            $table->double('percent_change_7d')->nullable();
            $table->double('percent_change_30d')->nullable();
            $table->double('market_cap')->nullable();
            $table->double('max_supply')->nullable();
            $table->double('circulating_supply')->nullable();
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('currencies');
    }
}
