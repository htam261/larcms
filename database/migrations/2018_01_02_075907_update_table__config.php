<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableConfig extends Migration
{
    protected $table_name = 'config';
    protected $arr_fields = array(
        'lang' => 'string'
    );
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $arr_data = array(
            'table_name' => $this->table_name
            , 'arr_fields' => $this->arr_fields
        );
        if (Schema::hasTable($this->table_name)) {
            Schema::table($this->table_name, function($table) use ($arr_data) {
                if(count($arr_data['arr_fields'])) {
                    foreach($arr_data['arr_fields'] as $k => $v) {
                        if(!Schema::hasColumn($arr_data['table_name'], $k)) {
                            $table->$v($k);
                        }
                    }
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $arr_data = array(
            'table_name' => $this->table_name
            , 'arr_fields' => $this->arr_fields
        );
        if (Schema::hasTable($this->table_name)) {
            Schema::table($this->table_name, function($table) use ($arr_data) {
                if(count($arr_data['arr_fields'])) {
                    foreach($arr_data['arr_fields'] as $k => $v) {
                        if(Schema::hasColumn($arr_data['table_name'], $k)) {
                            $table->dropColumn($k);
                        }
                    }
                }
            });
        }
    }
}
