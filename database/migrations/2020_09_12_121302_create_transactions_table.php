<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('deposit_id')->nullable();
            $table->unsignedBigInteger('withdrawal_id')->nullable();
            $table->string('type');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');
            
            $table->foreign('deposit_id')
                ->references('id')->on('deposits');
            
            $table->foreign('withdrawal_id')
                ->references('id')->on('withdrawals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
