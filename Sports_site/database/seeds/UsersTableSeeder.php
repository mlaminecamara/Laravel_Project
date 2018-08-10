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
            'name' => 'admintest',
            'email' => 'admin@test.com',
            'password' => password_hash('admintest', PASSWORD_DEFAULT),
            'is_admin' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'moh',
            'email' => 'moh@test.com',
            'password' => password_hash('mohtest', PASSWORD_DEFAULT),
            'is_admin' => '0'
        ]);
    }
}
