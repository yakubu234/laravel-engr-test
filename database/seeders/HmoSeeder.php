<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HmoSeeder extends Seeder
{
    private $hmos = [
        ['name'=>'HMO A', 'code'=> 'HMO-A'],
        ['name'=>'HMO B', 'code'=> 'HMO-B'],
        ['name'=>'HMO C', 'code'=> 'HMO-C'],
        ['name'=>'HMO D', 'code'=> 'HMO-D'],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hmos')->insert($this->hmos);
    }
}
