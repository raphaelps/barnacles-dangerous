<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'raphael Pinheiro',
            'email'=>'raphaelps@gmail.com',
            'password'=> bcrypt('r1234')
        ]);
    }
}
