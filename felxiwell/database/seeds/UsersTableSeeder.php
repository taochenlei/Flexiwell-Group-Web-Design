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
        DB::table('users')->insert([
            'email'=> 'bob@gmail.com',
            'name' => 'Bob',
            'password' => bcrypt('123456'),
            'type' => 'doctor',
        ]);
        
        DB::table('users')->insert([
            'email'=> 'fred@gmail.com',
            'name' => 'Fred',
            'password' => bcrypt('123456'),
            'type' => 'doctor',
        ]);
        
        DB::table('users')->insert([
            'email'=> 'jes@gmail.com',
            'name' => 'Jes',
            'password' => bcrypt('123456'),
            'type' => 'manager',
        ]);        
        
        DB::table('users')->insert([
            'email'=> 'taochenlei@gmail.com',
            'name' => 'tao',
            'password' => bcrypt('123456'),
            'type' => 'manager',
        ]);
    }
}
