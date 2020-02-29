<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Roy Ayoola',
        	'email' => 'roylayindeay0@gmail.com',
        	'password' => 'lol-lol'
        ]);
    }
}
