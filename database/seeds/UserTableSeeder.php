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
//        $this->createUser();
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

    public function createUser()
    {
        factory(\App\Entities\User::class)->create([
            'nickname'  => 'a',
            'email'     => 'a@hotmai.com',
            'password'  => bcrypt('a'),
            'remember_token' => str_random(10)
        ]);

        factory(\App\Entities\Data::class)->create([
            'user_id'   => 2
        ]);
    }
}
