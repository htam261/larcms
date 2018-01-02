<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBannerGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('banner_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_id', 250);
            $table->text('arr_title')->nullable();
            $table->integer('width')->unsigned();
            $table->integer('height')->unsigned();
            $table->string('description', 50);
            $table->float('show_order');
            $table->tinyInteger('is_show')->unsigned();
            $table->integer('date_create')->unsigned();
            $table->integer('date_update')->unsigned();
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
        //
        Schema::dropIfExists('banner_group');
    }
}
