<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Brit Care'],
            ['name' => 'Purina'],
            ['name' => 'Royal Canin'],
            ['name' => 'Hills'],
        ]);
    }
}
