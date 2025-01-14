<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'kasir1',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('12345'),
                'level' => '0'
            ]
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
