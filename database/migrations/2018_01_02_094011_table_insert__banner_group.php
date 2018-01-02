<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableInsertBannerGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('banner_group')->insert(array(
            'group_id' => 'banner-main'
            , 'arr_title' => serialize(array('en' => 'Banner main', 'vi' => 'Banner chính'))
            , 'width' => 0
            , 'height' => 0
            , 'description' => ''
            , 'show_order' => 0
            , 'is_show' => 1
            , 'date_create' => time()
            , 'date_update' => time()
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('banner_group')->where('group_id', '=', 'banner-main')->delete();
    }
}
