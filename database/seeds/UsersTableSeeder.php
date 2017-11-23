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
            'name' => 'akshaya',
            'first_name' => 'Akshaya',
            'last_name' => 'Swaroop',
            'email' => 'akshaya@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'activated' => true
        ]);
    }
}
