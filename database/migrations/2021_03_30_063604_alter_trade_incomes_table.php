<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTradeIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('trade_incomes', function(Blueprint $table) { 
        //     $table->integer('user_id')->unsigned()->index()->change(); 
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}