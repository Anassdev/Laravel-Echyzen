<?php

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        User::create(array('username' => 'echyzen', 'email' => 'guillaume.unice@gmail.com', 'password' => Hash::make('azerty')));

    }
}
