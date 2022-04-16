<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleMakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_makes')->delete();
        $makes = array(
          array('id' =>1 , 'name' => 'Acura' ,'code' => 'ACURA', 'supported' => 1),
          array('id' =>2 , 'name' => 'Alfa Romeo' ,'code' => 'ALFA', 'supported' => 1),
          array('id' =>3 , 'name' => 'AMC' ,'code' => 'AMC', 'supported' => 1),
          array('id' =>4 , 'name' => 'Aston Martin' ,'code' => 'ASTON', 'supported' => 1),
          array('id' =>5 , 'name' => 'Audi' ,'code' => 'AUDI', 'supported' => 0),
          array('id' =>6 , 'name' => 'Avanti' ,'code' => 'AVANTI', 'supported' => 1),
          array('id' =>7 , 'name' => 'Bentley' ,'code' => 'BENTL', 'supported' => 1),
          array('id' =>8 , 'name' => 'BMW' ,'code' => 'BMW', 'supported' => 0),
          array('id' =>9 , 'name' => 'Buick' ,'code' => 'BUICK', 'supported' => 1),
          array('id' =>10 , 'name' => 'Cadillac' ,'code' => 'CAD', 'supported' => 1),
          array('id' =>11 , 'name' => 'Chevrolet' ,'code' => 'CHEV', 'supported' => 1),
          array('id' =>12 , 'name' => 'Chrysler' ,'code' => 'CHRY', 'supported' => 1),
          array('id' =>13 , 'name' => 'Daewoo' ,'code' => 'DAEW', 'supported' => 1),
          array('id' =>14 , 'name' => 'Daihatsu' ,'code' => 'DAIHAT', 'supported' => 1),
          array('id' =>15 , 'name' => 'Datsun' ,'code' => 'DATSUN', 'supported' => 1),
          array('id' =>16 , 'name' => 'DeLorean' ,'code' => 'DELOREAN', 'supported' => 1),
          array('id' =>17 , 'name' => 'Dodge' ,'code' => 'DODGE', 'supported' => 1),
          array('id' =>18 , 'name' => 'Eagle' ,'code' => 'EAGLE', 'supported' => 1),
          array('id' =>19 , 'name' => 'Ferrari' ,'code' => 'FER', 'supported' => 1),
          array('id' =>20 , 'name' => 'FIAT' ,'code' => 'FIAT', 'supported' => 1),
          array('id' =>21 , 'name' => 'Fisker' ,'code' => 'FISK', 'supported' => 1),
          array('id' =>22 , 'name' => 'Ford' ,'code' => 'FORD', 'supported' => 1),
          array('id' =>23 , 'name' => 'Freightliner' ,'code' => 'FREIGHT', 'supported' => 1),
          array('id' =>24 , 'name' => 'Geo' ,'code' => 'GEO', 'supported' => 1),
          array('id' =>25 , 'name' => 'GMC' ,'code' => 'GMC', 'supported' => 1),
          array('id' =>26 , 'name' => 'Honda' ,'code' => 'HONDA', 'supported' => 1),
          array('id' =>27 , 'name' => 'HUMMER' ,'code' => 'AMGEN', 'supported' => 1),
          array('id' =>28 , 'name' => 'Hyundai' ,'code' => 'HYUND', 'supported' => 1),
          array('id' =>29 , 'name' => 'Infiniti' ,'code' => 'INFIN', 'supported' => 1),
          array('id' =>30 , 'name' => 'Isuzu' ,'code' => 'ISU', 'supported' => 1),
          array('id' =>31 , 'name' => 'Jaguar' ,'code' => 'JAG', 'supported' => 1),
          array('id' =>32 , 'name' => 'Jeep' ,'code' => 'JEEP', 'supported' => 1),
          array('id' =>33 , 'name' => 'Kia' ,'code' => 'KIA', 'supported' => 1),
          array('id' =>34 , 'name' => 'Lamborghini' ,'code' => 'LAM', 'supported' => 1),
          array('id' =>35 , 'name' => 'Lancia' ,'code' => 'LAN', 'supported' => 1),
          array('id' =>36 , 'name' => 'Land Rover' ,'code' => 'ROV', 'supported' => 1),
          array('id' =>37 , 'name' => 'Lexus' ,'code' => 'LEXUS', 'supported' => 1),
          array('id' =>38 , 'name' => 'Lincoln' ,'code' => 'LINC', 'supported' => 1),
          array('id' =>39 , 'name' => 'Lotus' ,'code' => 'LOTUS', 'supported' => 1),
          array('id' =>40 , 'name' => 'Maserati' ,'code' => 'MAS', 'supported' => 1),
          array('id' =>41 , 'name' => 'Maybach' ,'code' => 'MAYBACH', 'supported' => 1),
          array('id' =>42 , 'name' => 'Mazda' ,'code' => 'MAZDA', 'supported' => 1),
          array('id' =>43 , 'name' => 'McLaren' ,'code' => 'MCLAREN', 'supported' => 1),
          array('id' =>44 , 'name' => 'Mercedes' ,'code' => 'MB','supported' => 0),
          array('id' =>45 , 'name' => 'Mercury' ,'code' => 'MERC', 'supported' => 1),
          array('id' =>46 , 'name' => 'Merkur' ,'code' => 'MERKUR', 'supported' => 1),
          array('id' =>47 , 'name' => 'MINI' ,'code' => 'MINI', 'supported' => 1),
          array('id' =>48 , 'name' => 'Mitsubishi' ,'code' => 'MIT', 'supported' => 1),
          array('id' =>49 , 'name' => 'Nissan' ,'code' => 'NISSAN', 'supported' => 1),
          array('id' =>50 , 'name' => 'Oldsmobile' ,'code' => 'OLDS', 'supported' => 1),
          array('id' =>51 , 'name' => 'Peugeot' ,'code' => 'PEUG', 'supported' => 1),
          array('id' =>52 , 'name' => 'Plymouth' ,'code' => 'PLYM', 'supported' => 1),
          array('id' =>53 , 'name' => 'Pontiac' ,'code' => 'PONT', 'supported' => 1),
          array('id' =>54 , 'name' => 'Porsche' ,'code' => 'POR', 'supported' => 1),
          array('id' =>55 , 'name' => 'RAM' ,'code' => 'RAM', 'supported' => 1),
          array('id' =>56 , 'name' => 'Renault' ,'code' => 'REN', 'supported' => 1),
          array('id' =>57 , 'name' => 'Rolls-Royce' ,'code' => 'RR', 'supported' => 1),
          array('id' =>58 , 'name' => 'Saab' ,'code' => 'SAAB', 'supported' => 1),
          array('id' =>59 , 'name' => 'Saturn' ,'code' => 'SATURN', 'supported' => 1),
          array('id' =>60 , 'name' => 'Scion' ,'code' => 'SCION', 'supported' => 1),
          array('id' =>61 , 'name' => 'smart' ,'code' => 'SMART', 'supported' => 1),
          array('id' =>62 , 'name' => 'SRT' ,'code' => 'SRT', 'supported' => 1),
          array('id' =>63 , 'name' => 'Sterling' ,'code' => 'STERL', 'supported' => 1),
          array('id' =>64 , 'name' => 'Subaru' ,'code' => 'SUB', 'supported' => 1),
          array('id' =>65 , 'name' => 'Suzuki' ,'code' => 'SUZUKI', 'supported' => 1),
          array('id' =>66 , 'name' => 'Tesla' ,'code' => 'TESLA', 'supported' => 1),
          array('id' =>67 , 'name' => 'Toyota' ,'code' => 'TOYOTA', 'supported' => 1),
          array('id' =>68 , 'name' => 'Triumph' ,'code' => 'TRI', 'supported' => 1),
          array('id' =>69 , 'name' => 'Volkswagen' ,'code' => 'VOLKS', 'supported' => 1),
          array('id' =>70 , 'name' => 'Volvo' ,'code' => 'VOLVO', 'supported' => 1),
          array('id' =>71 , 'name' => 'Yugo' ,'code' => 'YUGO', 'supported' => 1),
        );
        DB::table('vehicle_makes')->insert($makes);
    }
}
