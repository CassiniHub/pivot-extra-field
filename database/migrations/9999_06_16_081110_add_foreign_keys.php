<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dish_order', function (Blueprint $table) {
            $table->foreign('dish_id', 'dishorder')
                  ->references('id')
                  ->on('dishes');
            $table->foreign('order_id', 'orderdish')
                  ->references('id')
                  ->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dish_order', function (Blueprint $table) {
            $table->dropForeign('dishorder');
            $table->dropForeign('orderdish');
        });
    }
}
