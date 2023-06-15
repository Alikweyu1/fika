<?php

use Illuminate\Database\Seeder;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fleets')->truncate();
        DB::table('fleets')->insert([
            'name' => 'fikapoa',
            'email' => 'fleet@fikapoa.com',
            'company' => 'My Company',
            'password' => bcrypt('1234567'),
        ]);
    }
}
