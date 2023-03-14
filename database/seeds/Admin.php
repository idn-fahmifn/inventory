<?php

use Illuminate\Database\Seeder;


class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new\App\User;
        $user->name = "admin";
        $user->username = "admin";
        $user->email = "admin@test.com";
        $user->password = \Hash::make('asdasdasd');
        $user->level = "admin";
        $user->save();
    }
}
