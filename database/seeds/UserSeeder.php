<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123qwe123');
        $user->name = 'Admin';

        $user->save();
    }
}
