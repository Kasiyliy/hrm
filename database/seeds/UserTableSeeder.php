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
        DB::table('users')->delete();
        User::create(array(
            'first_name' => 'Mr.',
            'last_name' => 'Admin',
            'email' => 'admin@mail.ru',
            'role' => 1,
            "password" => bcrypt("password")
        ));

    }
}
