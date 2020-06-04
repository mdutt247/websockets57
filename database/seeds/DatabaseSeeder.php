<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'user 1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'user 2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}