<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deposit_id');
            $table->unsignedBiginteger('user_id');
            $table->string('amount')->default('0.00');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('deposit_id')
                ->references('id')->on('deposits');
            $table->foreign('user_id')
                ->references('id')->on('deposits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_incomes');
    }
}
