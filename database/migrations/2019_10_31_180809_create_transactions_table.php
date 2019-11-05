<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('receiver_id');
            $table->unsignedBigInteger('sender_id');
            $table->double('amount', 16, 6);            
            $table->tinyInteger('transaction_status')->default(0)->comment('0=own,1=others');
            $table->string('remarks', 120)->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
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
