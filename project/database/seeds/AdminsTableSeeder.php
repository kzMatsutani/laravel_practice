<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name'  => 'admin',
            'email'  => 'admin@example.com',
            'password'  => Hash::make('admin4649'),
            'remember_token'  => Str::random(10),
        ]);
    }
}
