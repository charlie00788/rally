<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
    }

    public function createAdmin()
    {
        factory(\App\Entities\User::class)->create([
            'nickname'  => 'admin',
            'email'     => 'admin@hotmail.com',
            'password'  => bcrypt('escuelamilitar'),
            'remember_token' => str_random(10)
        ]);
    }
}
