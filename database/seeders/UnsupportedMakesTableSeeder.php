<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnsupportedMakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unsupported_vehicle_makes')->delete();
        $makes = [
          ['id' =>1 , 'name' => 'BMW'],
          ['id' =>2 , 'name' => 'Mercedes'],
          ['id' =>3 , 'name' => 'Audi']
        ];
        DB::table('unsupported_vehicle_makes')->insert($makes);
    }
}
