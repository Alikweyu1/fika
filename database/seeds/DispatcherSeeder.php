<?php

use Illuminate\Database\Seeder;

class DispatcherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispatchers')->truncate();
        DB::table('dispatchers')->insert([
            'name' => 'fikapoa',
            'email' => 'dispatcher@fikapoa.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
