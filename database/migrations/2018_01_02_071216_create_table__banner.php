<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banner_id');
            $table->string('group_id', 250);
            $table->string('type', 50);
            $table->string('title', 250);
            $table->string('link_type', 20);
            $table->string('target', 20);
            $table->text('content');
            $table->text('show_mod');
            $table->text('show_act');
            $table->float('show_order');
            $table->tinyInteger('is_show')->unsigned();
            $table->integer('date_begin')->unsigned();
            $table->integer('date_end')->unsigned();
            $table->integer('date_create')->unsigned();
            $table->integer('date_update')->unsigned();
            $table->string('lang', 20);
            // $table->timestamps();

            //$table->primary('group_id');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner');
    }
}
