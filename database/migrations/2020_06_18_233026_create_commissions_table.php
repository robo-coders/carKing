<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('car_id')->nullable();
            $table->integer('csp')->nullable();
            $table->integer('total_profit')->nullable();
            $table->integer('admin_account')->nullable();
            $table->integer('tp')->nullable();
            $table->integer('new_tp')->nullable();
            $table->integer('pa')->nullable();
            $table->integer('agent_1')->nullable();
            $table->integer('agent_2')->nullable();
            $table->integer('agent_3')->nullable();
            $table->integer('broker')->nullable();
            $table->integer('broker_1')->nullable();
            $table->integer('broker_2')->nullable();
            $table->integer('broker_3')->nullable();
            $table->integer('complete_agent_3')->nullable();
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
        Schema::dropIfExists('commissions');
    }
}
