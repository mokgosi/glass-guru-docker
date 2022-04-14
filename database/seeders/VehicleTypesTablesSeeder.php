<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_vehicle_types')->delete();
        $types = array(
          array('id' => 1,'name' => 'Hatchback'),
          array('id' => 2,'name' => 'Sedan'),
          array('id' => 3,'name' => 'MPV'),
          array('id' => 4,'name' => 'SUV'),
          array('id' => 5,'name' => 'Crossover'),
          array('id' => 6,'name' => 'Coupe'),
          array('id' => 7,'name' => 'Convertible'),
        );
        DB::table('tbl_vehicle_types')->insert($types);
    }
}
