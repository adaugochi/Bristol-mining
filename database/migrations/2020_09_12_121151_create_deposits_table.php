<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('amount'); // BTC
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('user_id');
            $table->string('start_date'); // Timestamp
            $table->string('due_date'); // Timestamp
            $table->string('due_amount'); // due_amount
            $table->string('status')->default('Pending');  // Active, Ready, Completed
            $table->timestamps();

            $table->foreign('package_id')
                ->references('id')->on('packages');

            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
