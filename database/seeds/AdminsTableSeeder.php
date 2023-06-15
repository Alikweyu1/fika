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
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'fikapoa',
            'email' => 'admin@fikapoa.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
