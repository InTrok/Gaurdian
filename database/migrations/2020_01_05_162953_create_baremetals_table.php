<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaremetalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baremetals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('ram');
            $table->integer('core');
            $table->integer('space');
            $table->integer('thread');
            $table->ipAddress('ipaddress');

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
        Schema::dropIfExists('baremetals');
    }
}
