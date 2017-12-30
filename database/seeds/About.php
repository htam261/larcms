<?php

use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\About();
        $user->description = 'mo ta';
        $user->content = 'chi tiet';

        $user->save();
    }
}
