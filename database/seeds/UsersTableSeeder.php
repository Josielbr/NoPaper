<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Josiel',
            'email' => 'josielbrodrigues@outlook.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
