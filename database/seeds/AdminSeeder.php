<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['name' => 'Jonathan', 'surname' => 'Salamanca', 'email' => 'jsalamanca@puppys.cl', 'password' => bcrypt('123123')],
        ]);
    }
}
