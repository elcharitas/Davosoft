<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Irhodia David',
            'username' => 'Davori',
            'password' => bcrypt('password'),
            'email' => 'info@shimidah.org'
        ]);
    }
}
