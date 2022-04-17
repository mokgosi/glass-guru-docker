<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleModelsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    
    DB::table('vehicle_models')->delete();
    $models1 = array(
      array('id' =>1, 'make_id' =>1, 'code' => 'CL_MODELS', 'name' => 'CL Models (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>2, 'make_id' =>1, 'code' =>'2.2CL', 'name' => ' - 2.2CL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>3, 'make_id' =>1, 'code' =>'2.3CL', 'name' =>' - 2.3CL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>4, 'make_id' =>1, 'code' =>'3.0CL', 'name' =>' - 3.0CL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>5, 'make_id' =>1, 'code' =>'3.2CL', 'name' =>' - 3.2CL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>6, 'make_id' =>1, 'code' =>'ILX', 'name' =>'ILX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>7, 'make_id' =>1, 'code' =>'INTEG', 'name' =>'Integra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>8, 'make_id' =>1, 'code' =>'LEGEND', 'name' =>'Legend','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>9, 'make_id' =>1, 'code' =>'MDX', 'name' =>'MDX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>10, 'make_id' =>1, 'code' =>'NSX', 'name' =>'NSX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>11, 'make_id' =>1, 'code' =>'RDX', 'name' =>'RDX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>12, 'make_id' =>1, 'code' =>'RL_MODELS', 'name' =>'RL Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>13, 'make_id' =>1, 'code' =>'3.5RL', 'name' =>' - 3.5 RL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>14, 'make_id' =>1, 'code' =>'RL', 'name' =>' - RL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>15, 'make_id' =>1, 'code' =>'RSX', 'name' =>'RSX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>16, 'make_id' =>1, 'code' =>'SLX', 'name' =>'SLX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>17, 'make_id' =>1, 'code' =>'TL_MODELS', 'name' =>'TL Models (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>18, 'make_id' =>1, 'code' =>'2.5TL', 'name' =>' - 2.5TL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>19, 'make_id' =>1, 'code' =>'3.2TL', 'name' =>' - 3.2TL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>20, 'make_id' =>1, 'code' =>'TL', 'name' =>' - TL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>21, 'make_id' =>1, 'code' =>'TSX', 'name' =>'TSX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>22, 'make_id' =>1, 'code' =>'VIGOR', 'name' =>'Vigor','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>23, 'make_id' =>1, 'code' =>'ZDX', 'name' =>'ZDX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>24, 'make_id' =>1, 'code' =>'ACUOTH', 'name' =>'Other Acura Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>25, 'make_id' =>2, 'code' =>'ALFA164', 'name' =>'164','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>26, 'make_id' =>2, 'code' =>'ALFA8C', 'name' =>'8C Competizione','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>27, 'make_id' =>2, 'code' =>'ALFAGT', 'name' =>'GTV-6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>28, 'make_id' =>2, 'code' =>'MIL', 'name' =>'Milano','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>29, 'make_id' =>2, 'code' =>'SPID', 'name' =>'Spider','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>30, 'make_id' =>2, 'code' =>'ALFAOTH', 'name' =>'Other Alfa Romeo Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>31, 'make_id' =>3, 'code' =>'AMCALLIAN', 'name' =>'Alliance','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>32, 'make_id' =>3, 'code' =>'CON', 'name' =>'Concord','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>33, 'make_id' =>3, 'code' =>'EAGLE', 'name' =>'Eagle','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>34, 'make_id' =>3, 'code' =>'AMCENC', 'name' =>'Encore','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>35, 'make_id' =>3, 'code' =>'AMCSPIRIT', 'name' =>'Spirit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>36, 'make_id' =>3, 'code' =>'AMCOTH', 'name' =>'Other AMC Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>37, 'make_id' =>4, 'code' =>'DB7', 'name' =>'DB7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>38, 'make_id' =>4, 'code' =>'DB9', 'name' =>'DB9','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>39, 'make_id' =>4, 'code' =>'DBS', 'name' =>'DBS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>40, 'make_id' =>4, 'code' =>'LAGONDA', 'name' =>'Lagonda','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>41, 'make_id' =>4, 'code' =>'RAPIDE', 'name' =>'Rapide','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>42, 'make_id' =>4, 'code' =>'V12VANT', 'name' =>'V12 Vantage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>43, 'make_id' =>4, 'code' =>'VANTAGE', 'name' =>'V8 Vantage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>44, 'make_id' =>4, 'code' =>'VANQUISH', 'name' =>'Vanquish','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>45, 'make_id' =>4, 'code' =>'VIRAGE', 'name' =>'Virage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>46, 'make_id' =>4, 'code' =>'UNAVAILAST', 'name' =>'Other Aston Martin Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>47, 'make_id' =>5, 'code' =>'AUDI100', 'name' =>'100','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>48, 'make_id' =>5, 'code' =>'AUDI200', 'name' =>'200','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>49, 'make_id' =>5, 'code' =>'4000', 'name' =>'4000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>50, 'make_id' =>5, 'code' =>'5000', 'name' =>'5000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>51, 'make_id' =>5, 'code' =>'80', 'name' =>'80','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>52, 'make_id' =>5, 'code' =>'90', 'name' =>'90','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>53, 'make_id' =>5, 'code' =>'A3', 'name' =>'A3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>54, 'make_id' =>5, 'code' =>'A4', 'name' =>'A4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>55, 'make_id' =>5, 'code' =>'A5', 'name' =>'A5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>56, 'make_id' =>5, 'code' =>'A6', 'name' =>'A6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>57, 'make_id' =>5, 'code' =>'A7', 'name' =>'A7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>58, 'make_id' =>5, 'code' =>'A8', 'name' =>'A8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>59, 'make_id' =>5, 'code' =>'ALLRDQUA', 'name' =>'allroad','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>60, 'make_id' =>5, 'code' =>'AUDICABRI', 'name' =>'Cabriolet','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>61, 'make_id' =>5, 'code' =>'AUDICOUPE', 'name' =>'Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>62, 'make_id' =>5, 'code' =>'Q3', 'name' =>'Q3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>63, 'make_id' =>5, 'code' =>'Q5', 'name' =>'Q5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>64, 'make_id' =>5, 'code' =>'Q7', 'name' =>'Q7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>65, 'make_id' =>5, 'code' =>'QUATTR', 'name' =>'Quattro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>66, 'make_id' =>5, 'code' =>'R8', 'name' =>'R8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>67, 'make_id' =>5, 'code' =>'RS4', 'name' =>'RS 4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>68, 'make_id' =>5, 'code' =>'RS5', 'name' =>'RS 5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>69, 'make_id' =>5, 'code' =>'RS6', 'name' =>'RS 6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>70, 'make_id' =>5, 'code' =>'S4', 'name' =>'S4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>71, 'make_id' =>5, 'code' =>'S5', 'name' =>'S5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>72, 'make_id' =>5, 'code' =>'S6', 'name' =>'S6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>73, 'make_id' =>5, 'code' =>'S7', 'name' =>'S7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>74, 'make_id' =>5, 'code' =>'S8', 'name' =>'S8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>75, 'make_id' =>5, 'code' =>'TT', 'name' =>'TT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>76, 'make_id' =>5, 'code' =>'TTRS', 'name' =>'TT RS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>77, 'make_id' =>5, 'code' =>'TTS', 'name' =>'TTS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>78, 'make_id' =>5, 'code' =>'V8', 'name' =>'V8 Quattro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>79, 'make_id' =>5, 'code' =>'AUDOTH', 'name' =>'Other Audi Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>80, 'make_id' =>6, 'code' =>'CONVERT', 'name' =>'Convertible','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>81, 'make_id' =>6, 'code' =>'COUPEAVANT', 'name' =>'Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>82, 'make_id' =>6, 'code' =>'SEDAN', 'name' =>'Sedan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>83, 'make_id' =>6, 'code' =>'UNAVAILAVA', 'name' =>'Other Avanti Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>84, 'make_id' =>7, 'code' =>'ARNAGE', 'name' =>'Arnage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>85, 'make_id' =>7, 'code' =>'AZURE', 'name' =>'Azure','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>86, 'make_id' =>7, 'code' =>'BROOKLANDS', 'name' =>'Brooklands','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>87, 'make_id' =>7, 'code' =>'BENCONT', 'name' =>'Continental','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>88, 'make_id' =>7, 'code' =>'CORNICHE', 'name' =>'Corniche','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>89, 'make_id' =>7, 'code' =>'BENEIGHT', 'name' =>'Eight','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>90, 'make_id' =>7, 'code' =>'BENMUL', 'name' =>'Mulsanne','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>91, 'make_id' =>7, 'code' =>'BENTURBO', 'name' =>'Turbo R','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>92, 'make_id' =>7, 'code' =>'UNAVAILBEN', 'name' =>'Other Bentley Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>93, 'make_id' =>8, 'code' =>'1_SERIES', 'name' =>'1 Series (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>94, 'make_id' =>8, 'code' =>'128I', 'name' =>' - 128i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>95, 'make_id' =>8, 'code' =>'135I', 'name' =>' - 135i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>96, 'make_id' =>8, 'code' =>'135IS','name' => ' - 135is','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>97, 'make_id' =>8, 'code' =>'3_SERIES', 'name' =>'3 Series (29)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>98, 'make_id' =>8, 'code' =>'318I', 'name' =>' - 318i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>99, 'make_id' =>8, 'code' =>'318IC', 'name' =>' - 318iC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>100, 'make_id' =>8, 'code' =>'318IS', 'name' =>' - 318iS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>101, 'make_id' =>8, 'code' =>'318TI', 'name' =>' - 318ti','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>102, 'make_id' =>8, 'code' =>'320I', 'name' =>' - 320i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>103, 'make_id' =>8, 'code' =>'323CI', 'name' =>' - 323ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>104, 'make_id' =>8, 'code' =>'323I', 'name' =>' - 323i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>105, 'make_id' =>8, 'code' =>'323IS', 'name' =>' - 323is','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>106, 'make_id' =>8, 'code' =>'323IT', 'name' =>' - 323iT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>107, 'make_id' =>8, 'code' =>'325CI', 'name' =>' - 325Ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>108, 'make_id' =>8, 'code' =>'325E', 'name' =>' - 325e','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>109, 'make_id' =>8, 'code' =>'325ES', 'name' =>' - 325es','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>110, 'make_id' =>8, 'code' =>'325I', 'name' =>' - 325i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>111, 'make_id' =>8, 'code' =>'325IS', 'name' =>' - 325is','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>112, 'make_id' =>8, 'code' =>'325IX', 'name' =>' - 325iX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>113, 'make_id' =>8, 'code' =>'325XI', 'name' =>' - 325xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>114, 'make_id' =>8, 'code' =>'328CI', 'name' =>' - 328Ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>115, 'make_id' =>8, 'code' =>'328I', 'name' =>' - 328i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>116, 'make_id' =>8, 'code' =>'328IS', 'name' =>' - 328iS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>117, 'make_id' =>8, 'code' =>'328XI', 'name' =>' - 328xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>118, 'make_id' =>8, 'code' =>'330CI', 'name' =>' - 330Ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>119, 'make_id' =>8, 'code' =>'330I', 'name' =>' - 330i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>120, 'make_id' =>8, 'code' =>'330XI', 'name' =>' - 330xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>121, 'make_id' =>8, 'code' =>'335D', 'name' =>' - 335d','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>122, 'make_id' =>8, 'code' =>'335I', 'name' =>' - 335i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>123, 'make_id' =>8, 'code' =>'335IS', 'name' =>' - 335is','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>124, 'make_id' =>8, 'code' =>'335XI', 'name' =>' - 335xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>125, 'make_id' =>8, 'code' =>'ACTIVE3', 'name' =>' - ActiveHybrid 3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>126, 'make_id' =>8, 'code' =>'BMW325', 'name' =>' - 325','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>127, 'make_id' =>8, 'code' =>'5_SERIES', 'name' =>'5 Series (19)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>128, 'make_id' =>8, 'code' =>'524TD', 'name' =>' - 524td','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>129, 'make_id' =>8, 'code' =>'525I', 'name' =>' - 525i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>130, 'make_id' =>8, 'code' =>'525XI', 'name' =>' - 525xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>131, 'make_id' =>8, 'code' =>'528E', 'name' =>' - 528e','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>132, 'make_id' =>8, 'code' =>'528I', 'name' =>' - 528i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>133, 'make_id' =>8, 'code' =>'528IT', 'name' =>' - 528iT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>134, 'make_id' =>8, 'code' =>'528XI', 'name' =>' - 528xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>135, 'make_id' =>8, 'code' =>'530I', 'name' =>' - 530i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>136, 'make_id' =>8, 'code' =>'530IT', 'name' =>' - 530iT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>137, 'make_id' =>8, 'code' =>'530XI', 'name' =>' - 530xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>138, 'make_id' =>8, 'code' =>'533I', 'name' =>' - 533i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>139, 'make_id' =>8, 'code' =>'535I', 'name' =>' - 535i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>140, 'make_id' =>8, 'code' =>'535IGT', 'name' =>' - 535i Gran Turismo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>141, 'make_id' =>8, 'code' =>'535XI', 'name' =>' - 535xi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>142, 'make_id' =>8, 'code' =>'540I', 'name' =>' - 540i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>143, 'make_id' =>8, 'code' =>'545I', 'name' =>' - 545i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>144, 'make_id' =>8, 'code' =>'550I', 'name' =>' - 550i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>145, 'make_id' =>8, 'code' =>'550IGT', 'name' =>' - 550i Gran Turismo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>146, 'make_id' =>8, 'code' =>'ACTIVE5', 'name' =>' - ActiveHybrid 5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>147, 'make_id' =>8, 'code' =>'6_SERIES', 'name' =>'6 Series (8)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>148, 'make_id' =>8, 'code' =>'633CSI', 'name' =>' - 633CSi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>149, 'make_id' =>8, 'code' =>'635CSI', 'name' =>' - 635CSi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>150, 'make_id' =>8, 'code' =>'640I', 'name' =>' - 640i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>151, 'make_id' =>8, 'code' =>'640IGC', 'name' =>' - 640i Gran Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>152, 'make_id' =>8, 'code' =>'645CI', 'name' =>' - 645Ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>153, 'make_id' =>8, 'code' =>'650I', 'name' =>' - 650i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>154, 'make_id' =>8, 'code' =>'650IGC', 'name' =>' - 650i Gran Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>155, 'make_id' =>8, 'code' =>'L6', 'name' =>' - L6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>156, 'make_id' =>8, 'code' =>'7_SERIES', 'name' =>'7 Series (15)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>157, 'make_id' =>8, 'code' =>'733I', 'name' =>' - 733i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>158, 'make_id' =>8, 'code' =>'735I', 'name' =>' - 735i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>159, 'make_id' =>8, 'code' =>'735IL', 'name' =>' - 735iL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>160, 'make_id' =>8, 'code' =>'740I', 'name' =>' - 740i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>161, 'make_id' =>8, 'code' =>'740IL', 'name' =>' - 740iL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>162, 'make_id' =>8, 'code' =>'740LI', 'name' =>' - 740Li','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>163, 'make_id' =>8, 'code' =>'745I', 'name' =>' - 745i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>164, 'make_id' =>8, 'code' =>'745LI', 'name' =>' - 745Li','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>165, 'make_id' =>8, 'code' =>'750I', 'name' =>' - 750i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>166, 'make_id' =>8, 'code' =>'750IL', 'name' =>' - 750iL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>167, 'make_id' =>8, 'code' =>'750LI', 'name' =>' - 750Li','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>168, 'make_id' =>8, 'code' =>'760I', 'name' =>' - 760i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>169, 'make_id' =>8, 'code' =>'760LI', 'name' =>' - 760Li','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>170, 'make_id' =>8, 'code' =>'ACTIVE7', 'name' =>' - ActiveHybrid 7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>171, 'make_id' =>8, 'code' =>'ALPINAB7', 'name' =>' - Alpina B7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>172, 'make_id' =>8, 'code' =>'8_SERIES', 'name' =>'8 Series (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>173, 'make_id' =>8, 'code' =>'840CI', 'name' =>' - 840Ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>174, 'make_id' =>8, 'code' =>'850CI', 'name' =>' - 850Ci','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>175, 'make_id' =>8, 'code' =>'850CSI', 'name' =>' - 850CSi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>176, 'make_id' =>8, 'code' =>'850I', 'name' =>' - 850i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>177, 'make_id' =>8, 'code' =>'L_SERIES', 'name' =>'L Series (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>178, 'make_id' =>8, 'code' =>'L7', 'name' =>' - L7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>179, 'make_id' =>8, 'code' =>'M_SERIES', 'name' =>'M Series (8)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>180, 'make_id' =>8, 'code' =>'1SERIESM', 'name' =>' - 1 Series M','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>181, 'make_id' =>8, 'code' =>'BMWMCOUPE', 'name' =>' - M Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>182, 'make_id' =>8, 'code' =>'BMWROAD', 'name' =>' - M Roadster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>183, 'make_id' =>8, 'code' =>'M3', 'name' =>' - M3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>184, 'make_id' =>8, 'code' =>'M5', 'name' =>' - M5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>185, 'make_id' =>8, 'code' =>'M6', 'name' =>' - M6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>186, 'make_id' =>8, 'code' =>'X5M', 'name' =>' - X5 M','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>187, 'make_id' =>8, 'code' =>'X6M', 'name' =>' - X6 M','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>188, 'make_id' =>8, 'code' =>'X_SERIES', 'name' =>'X Series (5)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>189, 'make_id' =>8, 'code' =>'ACTIVEX6', 'name' =>' - ActiveHybrid X6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>190, 'make_id' =>8, 'code' =>'X1', 'name' =>' - X1','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>191, 'make_id' =>8, 'code' =>'X3', 'name' =>' - X3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>192, 'make_id' =>8, 'code' =>'X5', 'name' =>' - X5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>193, 'make_id' =>8, 'code' =>'X6', 'name' =>' - X6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>194, 'make_id' =>8, 'code' =>'Z_SERIES', 'name' =>'Z Series (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>195, 'make_id' =>8, 'code' =>'Z3', 'name' =>' - Z3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>196, 'make_id' =>8, 'code' =>'Z4', 'name' =>' - Z4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>197, 'make_id' =>8, 'code' =>'Z8', 'name' =>' - Z8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>198, 'make_id' =>8, 'code' =>'BMWOTH', 'name' =>'Other BMW Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>199, 'make_id' =>9, 'code' =>'CENT', 'name' =>'Century','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>200, 'make_id' =>9, 'code' =>'ELEC', 'name' =>'Electra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>201, 'make_id' =>9, 'code' =>'ENCLAVE', 'name' =>'Enclave','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>202, 'make_id' =>9, 'code' =>'BUIENC', 'name' =>'Encore','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>203, 'make_id' =>9, 'code' =>'LACROSSE', 'name' =>'LaCrosse','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>204, 'make_id' =>9, 'code' =>'LESA', 'name' =>'Le Sabre','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>205, 'make_id' =>9, 'code' =>'LUCERNE', 'name' =>'Lucerne','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>206, 'make_id' =>9, 'code' =>'PARK', 'name' =>'Park Avenue','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>207, 'make_id' =>9, 'code' =>'RAINIER', 'name' =>'Rainier','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>208, 'make_id' =>9, 'code' =>'REATTA', 'name' =>'Reatta','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>209, 'make_id' =>9, 'code' =>'REG', 'name' =>'Regal','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>210, 'make_id' =>9, 'code' =>'RENDEZVOUS', 'name' =>'Rendezvous','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>211, 'make_id' =>9, 'code' =>'RIV', 'name' =>'Riviera','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>212, 'make_id' =>9, 'code' =>'BUICKROAD', 'name' =>'Roadmaster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>213, 'make_id' =>9, 'code' =>'SKYH', 'name' =>'Skyhawk','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>214, 'make_id' =>9, 'code' =>'SKYL', 'name' =>'Skylark','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>215, 'make_id' =>9, 'code' =>'SOMER', 'name' =>'Somerset','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>216, 'make_id' =>9, 'code' =>'TERRAZA', 'name' =>'Terraza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>217, 'make_id' =>9, 'code' =>'BUVERANO', 'name' =>'Verano','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>218, 'make_id' =>9, 'code' =>'BUOTH', 'name' =>'Other Buick Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>219, 'make_id' =>10,'code' => 'ALLANT', 'name' =>'Allante','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>220, 'make_id' =>10,'code' => 'ATS', 'name' =>'ATS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>221, 'make_id' =>10,'code' => 'BROUGH', 'name' =>'Brougham','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>222, 'make_id' =>10,'code' => 'CATERA', 'name' =>'Catera','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>223, 'make_id' =>10,'code' => 'CIMA', 'name' =>'Cimarron','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>224, 'make_id' =>10, 'code' =>'CTS', 'name' =>'CTS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>225, 'make_id' =>10, 'code' =>'DEV', 'name' =>'De Ville','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>226, 'make_id' =>10, 'code' =>'DTS', 'name' =>'DTS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>227, 'make_id' =>10, 'code' =>'ELDO', 'name' =>'Eldorado','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>228, 'make_id' =>10, 'code' =>'ESCALA', 'name' =>'Escalade','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>229, 'make_id' =>10, 'code' =>'ESCALAESV', 'name' =>'Escalade ESV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>230, 'make_id' =>10, 'code' =>'EXT', 'name' =>'Escalade EXT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>231, 'make_id' =>10, 'code' =>'FLEE', 'name' =>'Fleetwood','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>232, 'make_id' =>10, 'code' =>'SEV', 'name' =>'Seville','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>233, 'make_id' =>10, 'code' =>'SRX', 'name' =>'SRX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>234, 'make_id' =>10, 'code' =>'STS', 'name' =>'STS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>235, 'make_id' =>10, 'code' =>'XLR', 'name' =>'XLR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>236, 'make_id' =>10, 'code' =>'XTS', 'name' =>'XTS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>237, 'make_id' =>10, 'code' =>'CADOTH', 'name' =>'Other Cadillac Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>238, 'make_id' =>11, 'code' =>'ASTRO', 'name' =>'Astro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>239, 'make_id' =>11, 'code' =>'AVALNCH', 'name' =>'Avalanche','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>240, 'make_id' =>11, 'code' =>'AVEO', 'name' =>'Aveo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>241, 'make_id' =>11, 'code' =>'AVEO5', 'name' =>'Aveo5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>242, 'make_id' =>11, 'code' =>'BERETT', 'name' =>'Beretta','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>243, 'make_id' =>11, 'code' =>'BLAZER', 'name' =>'Blazer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>244, 'make_id' =>11, 'code' =>'CAM', 'name' =>'Camaro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>245, 'make_id' =>11, 'code' =>'CAP', 'name' =>'Caprice','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>246, 'make_id' =>11, 'code' =>'CHECAPS', 'name' =>'Captiva Sport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>247, 'make_id' =>11, 'code' =>'CAV', 'name' =>'Cavalier','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>248, 'make_id' =>11, 'code' =>'CELE', 'name' =>'Celebrity','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>249, 'make_id' =>11, 'code' =>'CHEVETTE', 'name' =>'Chevette','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>250, 'make_id' =>11, 'code' =>'CITATION', 'name' =>'Citation','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>251, 'make_id' =>11, 'code' =>'COBALT', 'name' =>'Cobalt','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>252, 'make_id' =>11, 'code' =>'COLORADO', 'name' =>'Colorado','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>253, 'make_id' =>11, 'code' =>'CORSI', 'name' =>'Corsica','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>254, 'make_id' =>11, 'code' =>'CORV', 'name' =>'Corvette','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>255, 'make_id' =>11, 'code' =>'CRUZE', 'name' =>'Cruze','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>256, 'make_id' =>11, 'code' =>'ELCAM', 'name' =>'El Camino','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>257, 'make_id' =>11, 'code' =>'EQUINOX', 'name' =>'Equinox','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>258, 'make_id' =>11, 'code' =>'G15EXP', 'name' =>'Express Van','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>259, 'make_id' =>11, 'code' =>'G10', 'name' =>'G Van','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>260, 'make_id' =>11, 'code' =>'HHR', 'name' =>'HHR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>261, 'make_id' =>11, 'code' =>'CHEVIMP', 'name' =>'Impala','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>262, 'make_id' =>11, 'code' =>'KODC4500', 'name' =>'Kodiak C4500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>263, 'make_id' =>11, 'code' =>'LUMINA', 'name' =>'Lumina','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>264, 'make_id' =>11, 'code' =>'LAPV', 'name' =>'Lumina APV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>265, 'make_id' =>11, 'code' =>'LUV', 'name' =>'LUV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>266, 'make_id' =>11, 'code' =>'MALI', 'name' =>'Malibu','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>267, 'make_id' =>11, 'code' =>'CHVMETR', 'name' =>'Metro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>268, 'make_id' =>11, 'code' =>'CHEVMONT', 'name' =>'Monte Carlo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>269, 'make_id' =>11, 'code' =>'NOVA', 'name' =>'Nova','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>270, 'make_id' =>11, 'code' =>'CHEVPRIZM', 'name' =>'Prizm','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>271, 'make_id' =>11, 'code' =>'CHVST', 'name' =>'S10 Blazer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>272, 'make_id' =>11, 'code' =>'S10PICKUP', 'name' =>'S10 Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>273, 'make_id' =>11, 'code' =>'CHEV150','name' => 'Silverado and other C/K1500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>274, 'make_id' =>11, 'code' =>'CHEVC25', 'name' =>'Silverado and other C/K2500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>275, 'make_id' =>11, 'code' =>'CH3500PU','name' => 'Silverado and other C/K3500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>276, 'make_id' =>11, 'code' =>'SONIC', 'name' =>'Sonic','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>277, 'make_id' =>11, 'code' =>'SPARK', 'name' =>'Spark','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>278, 'make_id' =>11, 'code' =>'CHEVSPEC','name' =>'Spectrum','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>279, 'make_id' =>11, 'code' =>'CHSPRINT', 'name' =>'Sprint','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>280, 'make_id' =>11, 'code' =>'SSR', 'name' =>'SSR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>281, 'make_id' =>11, 'code' =>'CHEVSUB', 'name' =>'Suburban','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>282, 'make_id' =>11, 'code' =>'TAHOE', 'name' =>'Tahoe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>283, 'make_id' =>11, 'code' =>'TRACKE', 'name' =>'Tracker','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>284, 'make_id' =>11, 'code' =>'TRAILBLZ','name' => 'TrailBlazer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>285, 'make_id' =>11, 'code' =>'TRAILBZEXT','name' => 'TrailBlazer EXT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>286, 'make_id' =>11, 'code' =>'TRAVERSE','name' => 'Traverse','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>287, 'make_id' =>11, 'code' =>'UPLANDER', 'name' =>'Uplander','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>288, 'make_id' =>11, 'code' =>'VENTUR','name' => 'Venture','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>289, 'make_id' =>11, 'code' =>'VOLT', 'name' =>'Volt','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>290, 'make_id' =>11, 'code' =>'CHEOTH','name' => 'Other Chevrolet Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>291, 'make_id' =>12, 'code' =>'CHRYS200','name' => '200','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>292, 'make_id' =>12, 'code' =>'300', 'name' =>'300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>293, 'make_id' =>12, 'code' =>'CHRY300','name' => '300M','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>294, 'make_id' =>12, 'code' =>'ASPEN', 'name' =>'Aspen','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>295, 'make_id' =>12, 'code' =>'CARAVAN','name' => 'Caravan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>296, 'make_id' =>12, 'code' =>'CIRRUS','name' => 'Cirrus','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>297, 'make_id' =>12, 'code' =>'CONC', 'name' =>'Concorde','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>298, 'make_id' =>12, 'code' =>'CHRYCONQ', 'name' =>'Conquest','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>299, 'make_id' =>12, 'code' =>'CORDOBA', 'name' =>'Cordoba','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>300, 'make_id' =>12, 'code' =>'CROSSFIRE', 'name' =>'Crossfire','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>301, 'make_id' =>12, 'code' =>'ECLASS', 'name' =>'E Class','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>302, 'make_id' =>12, 'code' =>'FIFTH', 'name' =>'Fifth Avenue','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>303, 'make_id' =>12, 'code' =>'CHRYGRANDV','name' => 'Grand Voyager','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>304, 'make_id' =>12, 'code' =>'IMPE', 'name' =>'Imperial','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>305, 'make_id' =>12, 'code' =>'INTREPID','name' => 'Intrepid','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>306, 'make_id' =>12, 'code' =>'CHRYLAS','name' => 'Laser','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>307, 'make_id' =>12, 'code' =>'LEBA', 'name' =>'LeBaron','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>308, 'make_id' =>12, 'code' =>'LHS', 'name' =>'LHS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>309, 'make_id' =>12, 'code' =>'CHRYNEON','name' => 'Neon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>310, 'make_id' =>12, 'code' =>'NY', 'name' =>'New Yorker','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>311, 'make_id' =>12, 'code' =>'NEWPORT', 'name' =>'Newport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>312, 'make_id' =>12, 'code' =>'PACIFICA','name' => 'Pacifica','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>313, 'make_id' =>12, 'code' =>'CHPROWLE','name' => 'Prowler','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>314, 'make_id' =>12, 'code' =>'PTCRUIS', 'name' =>'PT Cruiser','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>315, 'make_id' =>12, 'code' =>'CHRYSEB','name' => 'Sebring','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>316, 'make_id' =>12, 'code' =>'CHRYTC', 'name' =>'TC by Maserati','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>317, 'make_id' =>12, 'code' =>'TANDC', 'name' =>'Town & Country','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>318, 'make_id' =>12, 'code' =>'VOYAGER', 'name' =>'Voyager','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>319, 'make_id' =>12, 'code' =>'CHOTH','name' => 'Other Chrysler Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>320, 'make_id' =>13, 'code' =>'LANOS', 'name' =>'Lanos','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>321, 'make_id' =>13, 'code' =>'LEGANZA', 'name' =>'Leganza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>322, 'make_id' =>13, 'code' =>'NUBIRA', 'name' =>'Nubira','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>323, 'make_id' =>13, 'code' =>'DAEOTH', 'name' =>'Other Daewoo Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>324, 'make_id' =>14, 'code' =>'CHAR', 'name' =>'Charade','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>325, 'make_id' =>14, 'code' =>'ROCKY','name' => 'Rocky','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>326, 'make_id' =>14, 'code' =>'DAIHOTH','name' => 'Other Daihatsu Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>327, 'make_id' =>15, 'code' =>'DAT200SX','name' => '200SX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>328, 'make_id' =>15, 'code' =>'DAT210','name' => '210','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>329, 'make_id' =>15, 'code' =>'280Z','name' => '280ZX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>330, 'make_id' =>15, 'code' =>'300ZX', 'name' =>'300ZX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>331, 'make_id' =>15, 'code' =>'310','name' => '310','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>332, 'make_id' =>15, 'code' =>'510', 'name' =>'510','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>333, 'make_id' =>15, 'code' =>'720', 'name' =>'720','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>334, 'make_id' =>15, 'code' =>'810', 'name' =>'810','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>335, 'make_id' =>15, 'code' =>'DATMAX','name' => 'Maxima','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>336, 'make_id' =>15, 'code' =>'DATPU', 'name' =>'Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>337, 'make_id' =>15, 'code' =>'PUL', 'name' =>'Pulsar','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>338, 'make_id' =>15, 'code' =>'DATSENT', 'name' =>'Sentra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>339, 'make_id' =>15, 'code' =>'STAN', 'name' =>'Stanza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>340, 'make_id' =>15, 'code' =>'DATOTH', 'name' =>'Other Datsun Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>341, 'make_id' =>16, 'code' =>'DMC12', 'name' =>'DMC-12','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>342, 'make_id' =>17, 'code' =>'400', 'name' =>'400','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>343, 'make_id' =>17, 'code' =>'DOD600','name' => '600','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>344, 'make_id' =>17, 'code' =>'ARI', 'name' =>'Aries','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>345, 'make_id' =>17, 'code' =>'AVENGR','name' => 'Avenger','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>346, 'make_id' =>17, 'code' =>'CALIBER','name' => 'Caliber','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>347, 'make_id' =>17, 'code' =>'DODCARA','name' => 'Caravan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>348, 'make_id' =>17, 'code' =>'CHALLENGER','name' => 'Challenger','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>349, 'make_id' =>17, 'code' =>'DODCHAR', 'name' =>'Charger','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>350, 'make_id' =>17, 'code' =>'DODCOLT', 'name' =>'Colt','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>351, 'make_id' =>17, 'code' =>'DODCONQ', 'name' =>'Conquest','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>352, 'make_id' =>17, 'code' =>'DODDW', 'name' =>'D/W Truck','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>353, 'make_id' =>17, 'code' =>'DAKOTA', 'name' =>'Dakota','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>354, 'make_id' =>17, 'code' =>'DODDART', 'name' =>'Dart','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>355, 'make_id' =>17, 'code' =>'DAY', 'name' =>'Daytona','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>356, 'make_id' =>17, 'code' =>'DIPLOMA', 'name' =>'Diplomat','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>357, 'make_id' =>17, 'code' =>'DURANG','name' => 'Durango','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>358, 'make_id' =>17, 'code' =>'DODDYNA', 'name' =>'Dynasty','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>359, 'make_id' =>17, 'code' =>'GRANDCARAV','name' => 'Grand Caravan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>360, 'make_id' =>17, 'code' =>'INTRE','name' => 'Intrepid','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>361, 'make_id' =>17, 'code' =>'JOURNEY','name' => 'Journey','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>362, 'make_id' =>17, 'code' =>'LANCERDODG','name' => 'Lancer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>363, 'make_id' =>17, 'code' =>'MAGNUM','name' => 'Magnum','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>364, 'make_id' =>17, 'code' =>'MIRADA', 'name' =>'Mirada','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>365, 'make_id' =>17, 'code' =>'MONACO', 'name' =>'Monaco','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>366, 'make_id' =>17, 'code' =>'DODNEON','name' => 'Neon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>367, 'make_id' =>17, 'code' =>'NITRO','name' => 'Nitro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>368, 'make_id' =>17, 'code' =>'OMNI', 'name' =>'Omni','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>369, 'make_id' =>17, 'code' =>'RAIDER', 'name' =>'Raider','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>370, 'make_id' =>17, 'code' =>'RAM1504WD','name' => 'Ram 1500 Truck','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>371, 'make_id' =>17, 'code' =>'RAM25002WD','name' => 'Ram 2500 Truck','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>372, 'make_id' =>17, 'code' =>'RAM3502WD', 'name' =>'Ram 3500 Truck','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>373, 'make_id' =>17, 'code' =>'RAM4500','name' => 'Ram 4500 Truck','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>374, 'make_id' =>17, 'code' =>'DODD50', 'name' =>'Ram 50 Truck','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>375, 'make_id' =>17, 'code' =>'CV','name' => 'RAM C/V','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>376, 'make_id' =>17, 'code' =>'RAMSRT10','name' => 'Ram SRT-10','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>377, 'make_id' =>17, 'code' =>'RAMVANV8','name' => 'Ram Van','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>378, 'make_id' =>17, 'code' =>'RAMWAGON', 'name' =>'Ram Wagon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>379, 'make_id' =>17, 'code' =>'RAMCGR', 'name' =>'Ramcharger','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>380, 'make_id' =>17, 'code' =>'RAMPAGE','name' => 'Rampage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>381, 'make_id' =>17, 'code' =>'DODSHAD','name' => 'Shadow','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>382, 'make_id' =>17, 'code' =>'DODSPIR','name' => 'Spirit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>383, 'make_id' =>17, 'code' =>'SPRINTER','name' => 'Sprinter','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>384, 'make_id' =>17, 'code' =>'SRT4','name' => 'SRT-4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>385, 'make_id' =>17, 'code' =>'STREGIS', 'name' =>'St. Regis','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>386, 'make_id' =>17, 'code' =>'STEAL','name' => 'Stealth','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>387, 'make_id' =>17, 'code' =>'STRATU','name' => 'Stratus','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>388, 'make_id' =>17, 'code' =>'VIPER','name' => 'Viper','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>389, 'make_id' =>17, 'code' =>'DOOTH', 'name' =>'Other Dodge Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>390, 'make_id' =>18, 'code' =>'EAGLEMED', 'name' =>'Medallion','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>391, 'make_id' =>18, 'code' =>'EAGLEPREM', 'name' =>'Premier','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>392, 'make_id' =>18, 'code' =>'SUMMIT','name' => 'Summit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>393, 'make_id' =>18, 'code' =>'TALON', 'name' =>'Talon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>394, 'make_id' =>18, 'code' =>'VISION','name' => 'Vision','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>395, 'make_id' =>18, 'code' =>'EAGOTH', 'name' =>'Other Eagle Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>396, 'make_id' =>19, 'code' =>'308GTB', 'name' =>'308 GTB Quattrovalvole','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>397, 'make_id' =>19, 'code' =>'308TBI', 'name' =>'308 GTBI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>398, 'make_id' =>19, 'code' =>'308GTS', 'name' =>'308 GTS Quattrovalvole','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>399, 'make_id' =>19, 'code' =>'308TSI','name' => '308 GTSI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>400, 'make_id' =>19, 'code' =>'328GTB', 'name' =>'328 GTB','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>401, 'make_id' =>19, 'code' =>'328GTS', 'name' =>'328 GTS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>402, 'make_id' =>19, 'code' =>'348GTB', 'name' =>'348 GTB','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>403, 'make_id' =>19, 'code' =>'348GTS', 'name' =>'348 GTS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>404, 'make_id' =>19, 'code' =>'348SPI', 'name' =>'348 Spider','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>405, 'make_id' =>19, 'code' =>'348TB','name' => '348 TB','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>406, 'make_id' =>19, 'code' =>'348TS', 'name' =>'348 TS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>407, 'make_id' =>19, 'code' =>'360','name' => '360','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>408, 'make_id' =>19, 'code' =>'456GT','name' => '456 GT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>409, 'make_id' =>19, 'code' =>'456MGT', 'name' =>'456M GT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>410, 'make_id' =>19, 'code' =>'458ITALIA','name' => '458 Italia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>411, 'make_id' =>19, 'code' =>'512BBI', 'name' =>'512 BBi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>412, 'make_id' =>19, 'code' =>'512M', 'name' =>'512M','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>413, 'make_id' =>19, 'code' =>'512TR','name' => '512TR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>414, 'make_id' =>19, 'code' =>'550M', 'name' =>'550 Maranello','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>415, 'make_id' =>19, 'code' =>'575M','name' => '575M Maranello','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>416, 'make_id' =>19, 'code' =>'599GTB', 'name' =>'599 GTB Fiorano','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>417, 'make_id' =>19, 'code' =>'599GTO','name' => '599 GTO','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>418, 'make_id' =>19, 'code' =>'612SCAGLIE','name' => '612 Scaglietti','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>419, 'make_id' =>19, 'code' =>'FERCALIF', 'name' =>'California','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>420, 'make_id' =>19, 'code' =>'ENZO', 'name' =>'Enzo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>421, 'make_id' =>19, 'code' =>'F355','name' => 'F355','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>422, 'make_id' =>19, 'code' =>'F40', 'name' =>'F40','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>423, 'make_id' =>19, 'code' =>'F430','name' => 'F430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>424, 'make_id' =>19, 'code' =>'F50', 'name' =>'F50','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>425, 'make_id' =>19, 'code' =>'FERFF','name' => 'FF','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>426, 'make_id' =>19, 'code' =>'MOND','name' => 'Mondial','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>427, 'make_id' =>19, 'code' =>'TEST', 'name' =>'Testarossa','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>428, 'make_id' =>19, 'code' =>'UNAVAILFER','name' => 'Other Ferrari Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>429, 'make_id' =>20, 'code' =>'2000', 'name' =>'2000 Spider','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>430, 'make_id' =>20, 'code' =>'FIAT500','name' => '500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>431, 'make_id' =>20, 'code' =>'BERTON', 'name' =>'Bertone X1/9','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>432, 'make_id' =>20, 'code' =>'BRAVA', 'name' =>'Brava','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>433, 'make_id' =>20, 'code' =>'PININ', 'name' =>'Pininfarina Spider','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>434, 'make_id' =>20, 'code' =>'STRADA', 'name' =>'Strada','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>435, 'make_id' =>20, 'code' =>'FIATX19','name' => 'X1/9','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>436, 'make_id' =>20, 'code' =>'UNAVAILFIA', 'name' =>'Other Fiat Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>437, 'make_id' =>21, 'code' =>'KARMA', 'name' =>'Karma','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>438, 'make_id' =>22, 'code' =>'AERO', 'name' =>'Aerostar','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>439, 'make_id' =>22, 'code' =>'ASPIRE','name' => 'Aspire','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>440, 'make_id' =>22, 'code' =>'BRON','name' => 'Bronco','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>441, 'make_id' =>22, 'code' =>'B2', 'name' =>'Bronco II','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>442, 'make_id' =>22, 'code' =>'FOCMAX','name' => 'C-MAX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>443, 'make_id' =>22, 'code' =>'FORDCLUB', 'name' =>'Club Wagon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>444, 'make_id' =>22, 'code' =>'CONTOUR', 'name' =>'Contour','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>445, 'make_id' =>22, 'code' =>'COURIER','name' => 'Courier','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>446, 'make_id' =>22, 'code' =>'CROWNVIC', 'name' =>'Crown Victoria','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>447, 'make_id' =>22, 'code' =>'E150ECON','name' => 'E-150 and Econoline 150','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>448, 'make_id' =>22, 'code' =>'E250ECON','name' => 'E-250 and Econoline 250','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>449, 'make_id' =>22, 'code' =>'E350ECON','name' => 'E-350 and Econoline 350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>450, 'make_id' =>22, 'code' =>'EDGE', 'name' =>'Edge','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>451, 'make_id' =>22, 'code' =>'ESCAPE', 'name' =>'Escape','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>452, 'make_id' =>22, 'code' =>'ESCO', 'name' =>'Escort','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>453, 'make_id' =>22, 'code' =>'EXCURSION', 'name' =>'Excursion','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>454, 'make_id' =>22, 'code' =>'EXP', 'name' =>'EXP','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>455, 'make_id' =>22, 'code' =>'EXPEDI','name' => 'Expedition','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>456, 'make_id' =>22, 'code' =>'EXPEDIEL','name' => 'Expedition EL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>457, 'make_id' =>22, 'code' =>'EXPLOR', 'name' =>'Explorer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>458, 'make_id' =>22, 'code' =>'SPORTTRAC','name' => 'Explorer Sport Trac','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>459, 'make_id' =>22, 'code' =>'F100', 'name' =>'F100','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>460, 'make_id' =>22, 'code' =>'F150PICKUP', 'name' =>'F150','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>461, 'make_id' =>22, 'code' =>'F250', 'name' =>'F250','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>462, 'make_id' =>22, 'code' =>'F350', 'name' =>'F350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>463, 'make_id' =>22, 'code' =>'F450', 'name' =>'F450','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>464, 'make_id' =>22, 'code' =>'FAIRM', 'name' =>'Fairmont','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>465, 'make_id' =>22, 'code' =>'FESTIV','name' => 'Festiva','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>466, 'make_id' =>22, 'code' =>'FIESTA', 'name' =>'Fiesta','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>467, 'make_id' =>22, 'code' =>'FIVEHUNDRE','name' => 'Five Hundred','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>468, 'make_id' =>22, 'code' =>'FLEX','name' => 'Flex','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>469, 'make_id' =>22, 'code' =>'FOCUS', 'name' =>'Focus','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>470, 'make_id' =>22, 'code' =>'FREESTAR', 'name' =>'Freestar','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>471, 'make_id' =>22, 'code' =>'FREESTYLE','name' => 'Freestyle','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>472, 'make_id' =>22, 'code' =>'FUSION','name' => 'Fusion','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>473, 'make_id' =>22, 'code' =>'GRANADA', 'name' =>'Granada','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>474, 'make_id' =>22, 'code' =>'GT','name' => 'GT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>475, 'make_id' =>22, 'code' =>'LTD','name' => 'LTD','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>476, 'make_id' =>22, 'code' =>'MUST','name' => 'Mustang','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>477, 'make_id' =>22, 'code' =>'PROBE', 'name' =>'Probe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>478, 'make_id' =>22, 'code' =>'RANGER', 'name' =>'Ranger','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>479, 'make_id' =>22, 'code' =>'TAURUS', 'name' =>'Taurus','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>480, 'make_id' =>22, 'code' =>'TAURUSX','name' => 'Taurus X','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>481, 'make_id' =>22, 'code' =>'TEMPO','name' => 'Tempo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>482, 'make_id' =>22, 'code' =>'TBIRD','name' => 'Thunderbird','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>483, 'make_id' =>22, 'code' =>'TRANSCONN', 'name' =>'Transit Connect','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>484, 'make_id' =>22, 'code' =>'WINDST', 'name' =>'Windstar','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>485, 'make_id' =>22, 'code' =>'FORDZX2', 'name' =>'ZX2 Escort','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>486, 'make_id' =>22, 'code' =>'FOOTH','name' => 'Other Ford Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>487, 'make_id' =>23, 'code' =>'FRESPRINT','name' => 'Sprinter','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>488, 'make_id' =>24, 'code' =>'GEOMETRO', 'name' =>'Metro','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>489, 'make_id' =>24, 'code' =>'GEOPRIZM','name' => 'Prizm','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>490, 'make_id' =>24, 'code' =>'SPECT','name' => 'Spectrum','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>491, 'make_id' =>24, 'code' =>'STORM', 'name' =>'Storm','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>492, 'make_id' =>24, 'code' =>'GEOTRACK','name' => 'Tracker','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>493, 'make_id' =>24, 'code' =>'GEOOTH', 'name' =>'Other Geo Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>494, 'make_id' =>25, 'code' =>'ACADIA','name' => 'Acadia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>495, 'make_id' =>25, 'code' =>'CABALLERO','name' => 'Caballero','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>496, 'make_id' =>25, 'code' =>'CANYON', 'name' =>'Canyon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>497, 'make_id' =>25, 'code' =>'ENVOY', 'name' =>'Envoy','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>498, 'make_id' =>25, 'code' =>'ENVOYXL', 'name' =>'Envoy XL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>499, 'make_id' =>25, 'code' =>'ENVOYXUV', 'name' =>'Envoy XUV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>500, 'make_id' =>25, 'code' =>'JIM', 'name' =>'Jimmy','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>501, 'make_id' =>25, 'code' =>'RALLYWAG','name' => 'Rally Wagon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>502, 'make_id' =>25, 'code' =>'GMCS15', 'name' =>'S15 Jimmy','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>503, 'make_id' =>25, 'code' =>'S15', 'name' =>'S15 Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>504, 'make_id' =>25, 'code' =>'SAFARIGMC','name' => 'Safari','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>505, 'make_id' =>25, 'code' =>'GMCSAVANA','name' => 'Savana','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>506, 'make_id' =>25, 'code' =>'15SIPU4WD', 'name' =>'Sierra C/K1500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>507, 'make_id' =>25, 'code' =>'GMCC25PU', 'name' =>'Sierra C/K2500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>508, 'make_id' =>25, 'code' =>'GMC3500PU', 'name' =>'Sierra C/K3500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>509, 'make_id' =>25, 'code' =>'SONOMA', 'name' =>'Sonoma','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>510, 'make_id' =>25, 'code' =>'SUB', 'name' =>'Suburban','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>511, 'make_id' =>25, 'code' =>'GMCSYCLON','name' => 'Syclone','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>512, 'make_id' =>25, 'code' =>'TERRAIN', 'name' =>'Terrain','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>513, 'make_id' =>25, 'code' =>'TOPC4500', 'name' =>'TopKick C4500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>514, 'make_id' =>25, 'code' =>'TYPH', 'name' =>'Typhoon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>515, 'make_id' =>25, 'code' =>'GMCVANDUR','name' => 'Vandura','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>516, 'make_id' =>25, 'code' =>'YUKON', 'name' =>'Yukon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>517, 'make_id' =>25, 'code' =>'YUKONXL', 'name' =>'Yukon XL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>518, 'make_id' =>25, 'code' =>'GMCOTH','name' => 'Other GMC Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>519, 'make_id' =>26, 'code' =>'ACCORD', 'name' =>'Accord','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>520, 'make_id' =>26, 'code' =>'CIVIC', 'name' =>'Civic','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>521, 'make_id' =>26, 'code' =>'CRV', 'name' =>'CR-V','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>522, 'make_id' =>26, 'code' =>'CRZ', 'name' =>'CR-Z','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>523, 'make_id' =>26, 'code' =>'CRX','name' => 'CRX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>524, 'make_id' =>26, 'code' =>'CROSSTOUR_MODELS', 'name' =>'Crosstour and Accord Crosstour Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>525, 'make_id' =>26, 'code' =>'CROSSTOUR','name' => ' - Accord Crosstour','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>526, 'make_id' =>26, 'code' =>'HONCROSS', 'name' =>' - Crosstour','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>527, 'make_id' =>26, 'code' =>'HONDELSOL','name' => 'Del Sol','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>528, 'make_id' =>26, 'code' =>'ELEMENT','name' => 'Element','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>529, 'make_id' =>26, 'code' =>'FIT','name' => 'Fit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>530, 'make_id' =>26, 'code' =>'INSIGHT', 'name' =>'Insight','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>531, 'make_id' =>26, 'code' =>'ODYSSEY','name' => 'Odyssey','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>532, 'make_id' =>26, 'code' =>'PASSPO', 'name' =>'Passport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>533, 'make_id' =>26, 'code' =>'PILOT','name' => 'Pilot','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>534, 'make_id' =>26, 'code' =>'PRE','name' => 'Prelude','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>535, 'make_id' =>26, 'code' =>'RIDGELINE','name' => 'Ridgeline','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>536, 'make_id' =>26, 'code' =>'S2000', 'name' =>'S2000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>537, 'make_id' =>26, 'code' =>'HONOTH','name' => 'Other Honda Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>538, 'make_id' =>27, 'code' =>'HUMMER', 'name' =>'H1','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>539, 'make_id' =>27, 'code' =>'H2','name' => 'H2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>540, 'make_id' =>27, 'code' =>'H3','name' => 'H3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>541, 'make_id' =>27, 'code' =>'H3T','name' => 'H3T','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>542, 'make_id' =>27, 'code' =>'AMGOTH', 'name' =>'Other Hummer Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>543, 'make_id' =>28, 'code' =>'ACCENT','name' => 'Accent','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>544, 'make_id' =>28, 'code' =>'AZERA', 'name' =>'Azera','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>545, 'make_id' =>28, 'code' =>'ELANTR', 'name' =>'Elantra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>546, 'make_id' =>28, 'code' =>'HYUELANCPE','name' => 'Elantra Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>547, 'make_id' =>28, 'code' =>'ELANTOUR', 'name' =>'Elantra Touring','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>548, 'make_id' =>28, 'code' =>'ENTOURAGE', 'name' =>'Entourage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>549, 'make_id' =>28, 'code' =>'EQUUS','name' => 'Equus','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>550, 'make_id' =>28, 'code' =>'HYUEXCEL', 'name' =>'Excel','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>551, 'make_id' =>28, 'code' =>'GENESIS', 'name' =>'Genesis','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>552, 'make_id' =>28, 'code' =>'GENESISCPE','name' => 'Genesis Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>553, 'make_id' =>28, 'code' =>'SANTAFE', 'name' =>'Santa Fe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>554, 'make_id' =>28, 'code' =>'SCOUPE','name' => 'Scoupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>555, 'make_id' =>28, 'code' =>'SONATA', 'name' =>'Sonata','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>556, 'make_id' =>28, 'code' =>'TIBURO','name' => 'Tiburon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>557, 'make_id' =>28, 'code' =>'TUCSON','name' => 'Tucson','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>558, 'make_id' =>28, 'code' =>'VELOSTER','name' => 'Veloster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>559, 'make_id' =>28, 'code' =>'VERACRUZ','name' => 'Veracruz','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>560, 'make_id' =>28, 'code' =>'XG300', 'name' =>'XG300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>561, 'make_id' =>28, 'code' =>'XG350','name' => 'XG350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>562, 'make_id' =>28, 'code' =>'HYUOTH','name' => 'Other Hyundai Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>563, 'make_id' =>29, 'code' =>'EX_MODELS', 'name' =>'EX Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>564, 'make_id' =>29, 'code' =>'EX35', 'name' =>' - EX35','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>565, 'make_id' =>29, 'code' =>'EX37','name' => ' - EX37','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>566, 'make_id' =>29, 'code' =>'FX_MODELS', 'name' =>'FX Models (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>567, 'make_id' =>29, 'code' =>'FX35', 'name' =>' - FX35','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>568, 'make_id' =>29, 'code' =>'FX37', 'name' =>' - FX37','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>569, 'make_id' =>29, 'code' =>'FX45', 'name' =>' - FX45','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>570, 'make_id' =>29, 'code' =>'FX50', 'name' =>' - FX50','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>571, 'make_id' =>29, 'code' =>'G_MODELS','name' => 'G Models (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>572, 'make_id' =>29, 'code' =>'G20', 'name' =>' - G20','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>573, 'make_id' =>29, 'code' =>'G25','name' => ' - G25','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>574, 'make_id' =>29, 'code' =>'G35', 'name' =>' - G35','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>575, 'make_id' =>29, 'code' =>'G37', 'name' =>' - G37','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>576, 'make_id' =>29, 'code' =>'I_MODELS','name' => 'I Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>577, 'make_id' =>29, 'code' =>'I30', 'name' =>' - I30','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>578, 'make_id' =>29, 'code' =>'I35', 'name' =>' - I35','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>579, 'make_id' =>29, 'code' =>'J_MODELS', 'name' =>'J Models (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>580, 'make_id' =>29, 'code' =>'J30','name' => ' - J30','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>581, 'make_id' =>29, 'code' =>'JX_MODELS','name' => 'JX Models (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>582, 'make_id' =>29, 'code' =>'JX35', 'name' =>' - JX35','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>583, 'make_id' =>29, 'code' =>'M_MODELS', 'name' =>'M Models (6)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>584, 'make_id' =>29, 'code' =>'M30','name' => ' - M30','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>585, 'make_id' =>29, 'code' =>'M35','name' => ' - M35','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>586, 'make_id' =>29, 'code' =>'M35HYBRID', 'name' =>' - M35h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>587, 'make_id' =>29, 'code' =>'M37','name' => ' - M37','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>588, 'make_id' =>29, 'code' =>'M45', 'name' =>' - M45','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>589, 'make_id' =>29, 'code' =>'M56','name' => ' - M56','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>590, 'make_id' =>29, 'code' =>'Q_MODELS','name' => 'Q Models (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>591, 'make_id' =>29, 'code' =>'Q45', 'name' =>' - Q45','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>592, 'make_id' =>29, 'code' =>'QX_MODELS','name' => 'QX Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>593, 'make_id' =>29, 'code' =>'QX4','name' => ' - QX4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>594, 'make_id' =>29, 'code' =>'QX56','name' => ' - QX56','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>595, 'make_id' =>29, 'code' =>'INFOTH','name' => 'Other Infiniti Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>596, 'make_id' =>30, 'code' =>'AMIGO', 'name' =>'Amigo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>597, 'make_id' =>30, 'code' =>'ASCENDER','name' => 'Ascender','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>598, 'make_id' =>30, 'code' =>'AXIOM','name' => 'Axiom','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>599, 'make_id' =>30, 'code' =>'HOMBRE','name' => 'Hombre','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>600, 'make_id' =>30, 'code' =>'I280', 'name' =>'i-280','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>601, 'make_id' =>30, 'code' =>'I290', 'name' =>'i-290','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>602, 'make_id' =>30, 'code' =>'I350', 'name' =>'i-350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>603, 'make_id' =>30, 'code' =>'I370', 'name' =>'i-370','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>604, 'make_id' =>30, 'code' =>'ISUMARK', 'name' =>'I-Mark','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>605, 'make_id' =>30, 'code' =>'ISUIMP','name' => 'Impulse','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>606, 'make_id' =>30, 'code' =>'OASIS', 'name' =>'Oasis','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>607, 'make_id' =>30, 'code' =>'ISUPU', 'name' =>'Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>608, 'make_id' =>30, 'code' =>'RODEO','name' => 'Rodeo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>609, 'make_id' =>30, 'code' =>'STYLUS','name' => 'Stylus','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>610, 'make_id' =>30, 'code' =>'TROOP','name' => 'Trooper','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>611, 'make_id' =>30, 'code' =>'TRP2','name' => 'Trooper II','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>612, 'make_id' =>30, 'code' =>'VEHICROSS','name' => 'VehiCROSS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>613, 'make_id' =>30, 'code' =>'ISUOTH', 'name' =>'Other Isuzu Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>614, 'make_id' =>31, 'code' =>'STYPE', 'name' =>'S-Type','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>615, 'make_id' =>31, 'code' =>'XTYPE','name' => 'X-Type','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>616, 'make_id' =>31, 'code' =>'XF', 'name' =>'XF','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>617, 'make_id' =>31, 'code' =>'XJ_SERIES', 'name' =>'XJ Series (10)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>618, 'make_id' =>31, 'code' =>'JAGXJ12','name' => ' - XJ12','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>619, 'make_id' =>31, 'code' =>'JAGXJ6', 'name' =>' - XJ6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>620, 'make_id' =>31, 'code' =>'JAGXJR','name' => ' - XJR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>621, 'make_id' =>31, 'code' =>'JAGXJRS', 'name' =>' - XJR-S','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>622, 'make_id' =>31, 'code' =>'JAGXJS', 'name' =>' - XJS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>623, 'make_id' =>31, 'code' =>'VANDEN', 'name' =>' - XJ Vanden Plas','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>624, 'make_id' =>31, 'code' =>'XJ', 'name' =>' - XJ','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>625, 'make_id' =>31, 'code' =>'XJ8','name' => ' - XJ8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>626, 'make_id' =>31, 'code' =>'XJ8L','name' => ' - XJ8 L','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>627, 'make_id' =>31, 'code' =>'XJSPORT', 'name' =>' - XJ Sport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>628, 'make_id' =>31, 'code' =>'XK_SERIES', 'name' =>'XK Series (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>629, 'make_id' =>31, 'code' =>'JAGXK8', 'name' =>' - XK8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>630, 'make_id' =>31, 'code' =>'XK', 'name' =>' - XK','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>631, 'make_id' =>31, 'code' =>'XKR','name' => ' - XKR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>632, 'make_id' =>31, 'code' =>'JAGOTH', 'name' =>'Other Jaguar Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>633, 'make_id' =>32, 'code' =>'CHER','name' =>'Cherokee','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>634, 'make_id' =>32, 'code' =>'JEEPCJ','name' => 'CJ','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>635, 'make_id' =>32, 'code' =>'COMANC','name' => 'Comanche','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>636, 'make_id' =>32, 'code' =>'COMMANDER','name' => 'Commander','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>637, 'make_id' =>32, 'code' =>'COMPASS', 'name' =>'Compass','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>638, 'make_id' =>32, 'code' =>'JEEPGRAND', 'name' =>'Grand Cherokee','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>639, 'make_id' =>32, 'code' =>'GRWAG', 'name' =>'Grand Wagoneer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>640, 'make_id' =>32, 'code' =>'LIBERTY', 'name' =>'Liberty','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>641, 'make_id' =>32, 'code' =>'PATRIOT', 'name' =>'Patriot','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>642, 'make_id' =>32, 'code' =>'JEEPPU', 'name' =>'Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>643, 'make_id' =>32, 'code' =>'SCRAMBLE','name' => 'Scrambler','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>644, 'make_id' =>32, 'code' =>'WAGONE', 'name' =>'Wagoneer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>645, 'make_id' =>32, 'code' =>'WRANGLER','name' => 'Wrangler','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>646, 'make_id' =>32, 'code' =>'JEOTH','name' => 'Other Jeep Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>647, 'make_id' =>33, 'code' =>'AMANTI', 'name' =>'Amanti','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>648, 'make_id' =>33, 'code' =>'BORREGO','name' => 'Borrego','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>649, 'make_id' =>33, 'code' =>'FORTE','name' => 'Forte','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>650, 'make_id' =>33, 'code' =>'FORTEKOUP','name' => 'Forte Koup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>651, 'make_id' =>33, 'code' =>'OPTIMA','name' => 'Optima','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>652, 'make_id' =>33, 'code' =>'RIO', 'name' =>'Rio','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>653, 'make_id' =>33, 'code' =>'RIO5','name' => 'Rio5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>654, 'make_id' =>33, 'code' =>'RONDO','name' => 'Rondo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>655, 'make_id' =>33, 'code' =>'SEDONA','name' => 'Sedona','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>656, 'make_id' =>33, 'code' =>'SEPHIA', 'name' =>'Sephia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>657, 'make_id' =>33, 'code' =>'SORENTO', 'name' =>'Sorento','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),
      array('id' =>658, 'make_id' =>33, 'code' =>'SOUL','name' => 'Soul','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>659, 'make_id' =>33, 'code' =>'SPECTRA', 'name' =>'Spectra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>660, 'make_id' =>33, 'code' =>'SPECTRA5', 'name' =>'Spectra5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>661, 'make_id' =>33, 'code' =>'SPORTA', 'name' =>'Sportage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>662, 'make_id' =>33, 'code' =>'KIAOTH', 'name' =>'Other Kia Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>663, 'make_id' =>34, 'code' =>'AVENT', 'name' =>'Aventador','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>664, 'make_id' =>34, 'code' =>'COUNT', 'name' =>'Countach','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>665, 'make_id' =>34, 'code' =>'DIABLO', 'name' =>'Diablo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>666, 'make_id' =>34, 'code' =>'GALLARDO','name' => 'Gallardo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>667, 'make_id' =>34, 'code' =>'JALPA', 'name' =>'Jalpa','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>668, 'make_id' =>34, 'code' =>'LM002', 'name' =>'LM002','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>669, 'make_id' =>34, 'code' =>'MURCIELAGO','name' => 'Murcielago','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>670, 'make_id' =>34, 'code' =>'UNAVAILLAM', 'name' =>'Other Lamborghini Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>671, 'make_id' =>35, 'code' =>'BETA','name' => 'Beta','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>672, 'make_id' =>35, 'code' =>'ZAGATO','name' => 'Zagato','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>673, 'make_id' =>35, 'code' =>'UNAVAILLAN', 'name' =>'Other Lancia Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>674, 'make_id' =>36, 'code' =>'DEFEND', 'name' =>'Defender','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>675, 'make_id' =>36, 'code' =>'DISCOV', 'name' =>'Discovery','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>676, 'make_id' =>36, 'code' =>'FRELNDR','name' => 'Freelander','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>677, 'make_id' =>36, 'code' =>'LR2', 'name' =>'LR2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>678, 'make_id' =>36, 'code' =>'LR3','name' => 'LR3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>679, 'make_id' =>36, 'code' =>'LR4','name' => 'LR4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>680, 'make_id' =>36, 'code' =>'RANGE','name' => 'Range Rover','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>681, 'make_id' =>36, 'code' =>'EVOQUE', 'name' =>'Range Rover Evoque','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>682, 'make_id' =>36, 'code' =>'RANGESPORT', 'name' =>'Range Rover Sport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>683, 'make_id' =>36, 'code' =>'ROVOTH', 'name' =>'Other Land Rover Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>684, 'make_id' =>37, 'code' =>'CT_MODELS','name' => 'CT Models (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>685, 'make_id' =>37, 'code' =>'CT200H','name' => ' - CT 200h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>686, 'make_id' =>37, 'code' =>'ES_MODELS', 'name' =>'ES Models (5)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>687, 'make_id' =>37, 'code' =>'ES250', 'name' =>' - ES 250','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>688, 'make_id' =>37, 'code' =>'ES300', 'name' =>' - ES 300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>689, 'make_id' =>37, 'code' =>'ES300H','name' => ' - ES 300h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>690, 'make_id' =>37, 'code' =>'ES330','name' => ' - ES 330','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>691, 'make_id' =>37, 'code' =>'ES350','name' => ' - ES 350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>692, 'make_id' =>37, 'code' =>'GS_MODELS','name' => 'GS Models (6)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>693, 'make_id' =>37, 'code' =>'GS300','name' => ' - GS 300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>694, 'make_id' =>37, 'code' =>'GS350', 'name' =>' - GS 350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>695, 'make_id' =>37, 'code' =>'GS400','name' => ' - GS 400','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>696, 'make_id' =>37, 'code' =>'GS430', 'name' =>' - GS 430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>697, 'make_id' =>37, 'code' =>'GS450H','name' => ' - GS 450h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>698, 'make_id' =>37, 'code' =>'GS460', 'name' =>' - GS 460','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>699, 'make_id' =>37, 'code' =>'GX_MODELS', 'name' =>'GX Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>700, 'make_id' =>37, 'code' =>'GX460','name' => ' - GX 460','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>701, 'make_id' =>37, 'code' =>'GX470', 'name' =>' - GX 470','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>702, 'make_id' =>37, 'code' =>'HS_MODELS', 'name' =>'HS Models (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>703, 'make_id' =>37, 'code' =>'HS250H','name' => ' - HS 250h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>704, 'make_id' =>37, 'code' =>'IS_MODELS','name' => 'IS Models (6)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>705, 'make_id' =>37, 'code' =>'IS250', 'name' =>' - IS 250','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>706, 'make_id' =>37, 'code' =>'IS250C', 'name' =>' - IS 250C','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>707, 'make_id' =>37, 'code' =>'IS300', 'name' =>' - IS 300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>708, 'make_id' =>37, 'code' =>'IS350','name' => ' - IS 350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>709, 'make_id' =>37, 'code' =>'IS350C', 'name' =>' - IS 350C','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>710, 'make_id' =>37, 'code' =>'ISF', 'name' =>' - IS F','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>711, 'make_id' =>37, 'code' =>'LEXLFA', 'name' =>'LFA','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>712, 'make_id' =>37, 'code' =>'LS_MODELS','name' => 'LS Models (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>713, 'make_id' =>37, 'code' =>'LS400', 'name' =>' - LS 400','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>714, 'make_id' =>37, 'code' =>'LS430', 'name' =>' - LS 430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>715, 'make_id' =>37, 'code' =>'LS460', 'name' =>' - LS 460','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>716, 'make_id' =>37, 'code' =>'LS600H', 'name' =>' - LS 600h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>717, 'make_id' =>37, 'code' =>'LX_MODELS','name' => 'LX Models (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>718, 'make_id' =>37, 'code' =>'LX450', 'name' =>' - LX 450','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>719, 'make_id' =>37, 'code' =>'LX470', 'name' =>' - LX 470','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>720, 'make_id' =>37, 'code' =>'LX570', 'name' =>' - LX 570','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>721, 'make_id' =>37, 'code' =>'RX_MODELS', 'name' =>'RX Models (5)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>722, 'make_id' =>37, 'code' =>'RX300', 'name' =>' - RX 300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>723, 'make_id' =>37, 'code' =>'RX330', 'name' =>' - RX 330','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>724, 'make_id' =>37, 'code' =>'RX350', 'name' =>' - RX 350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>725, 'make_id' =>37, 'code' =>'RX400H','name' => ' - RX 400h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>726, 'make_id' =>37, 'code' =>'RX450H', 'name' =>' - RX 450h','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>727, 'make_id' =>37, 'code' =>'SC_MODELS','name' => 'SC Models (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>728, 'make_id' =>37, 'code' =>'SC300','name' => ' - SC 300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>729, 'make_id' =>37, 'code' =>'SC400', 'name' =>' - SC 400','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>730, 'make_id' =>37, 'code' =>'SC430', 'name' =>' - SC 430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>731, 'make_id' =>37, 'code' =>'LEXOTH', 'name' =>'Other Lexus Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>732, 'make_id' =>38, 'code' =>'AVIATOR','name' => 'Aviator','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>733, 'make_id' =>38, 'code' =>'BLKWOOD','name' => 'Blackwood','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>734, 'make_id' =>38, 'code' =>'CONT','name' => 'Continental','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>735, 'make_id' =>38, 'code' =>'LSLINCOLN', 'name' =>'LS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>736, 'make_id' =>38, 'code' =>'MARKLT','name' => 'Mark LT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>737, 'make_id' =>38, 'code' =>'MARK6', 'name' =>'Mark VI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>738, 'make_id' =>38, 'code' =>'MARK7','name' => 'Mark VII','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>739, 'make_id' =>38, 'code' =>'MARK8', 'name' =>'Mark VIII','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>740, 'make_id' =>38, 'code' =>'MKS', 'name' =>'MKS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>741, 'make_id' =>38, 'code' =>'MKT', 'name' =>'MKT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>742, 'make_id' =>38, 'code' =>'MKX', 'name' =>'MKX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>743, 'make_id' =>38, 'code' =>'MKZ', 'name' =>'MKZ','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>744, 'make_id' =>38, 'code' =>'NAVIGA','name' => 'Navigator','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>745, 'make_id' =>38, 'code' =>'NAVIGAL', 'name' =>'Navigator L','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>746, 'make_id' =>38, 'code' =>'LINCTC', 'name' =>'Town Car','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>747, 'make_id' =>38, 'code' =>'ZEPHYR','name' => 'Zephyr','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>748, 'make_id' =>38, 'code' =>'LINOTH','name' => 'Other Lincoln Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>749, 'make_id' =>39, 'code' =>'ELAN','name' => 'Elan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>750, 'make_id' =>39, 'code' =>'LOTELISE','name' => 'Elise','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>751, 'make_id' =>39, 'code' =>'ESPRIT', 'name' =>'Esprit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>752, 'make_id' =>39, 'code' =>'EVORA', 'name' =>'Evora','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>753, 'make_id' =>39, 'code' =>'EXIGE', 'name' =>'Exige','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>754, 'make_id' =>39, 'code' =>'UNAVAILLOT', 'name' =>'Other Lotus Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>755, 'make_id' =>40, 'code' =>'430','name' => '430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>756, 'make_id' =>40, 'code' =>'BITRBO','name' => 'Biturbo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>757, 'make_id' =>40, 'code' =>'COUPEMAS','name' => 'Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>758, 'make_id' =>40, 'code' =>'GRANSPORT', 'name' =>'GranSport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>759, 'make_id' =>40, 'code' =>'GRANTURISM', 'name' =>'GranTurismo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>760, 'make_id' =>40, 'code' =>'QP','name' => 'Quattroporte','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>761, 'make_id' =>40, 'code' =>'SPYDER','name' => 'Spyder','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>762, 'make_id' =>40, 'code' =>'UNAVAILMAS','name' => 'Other Maserati Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>763, 'make_id' =>41, 'code' =>'57MAYBACH', 'name' =>'57','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>764, 'make_id' =>41, 'code' =>'62MAYBACH', 'name' =>'62','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>765, 'make_id' =>41, 'code' =>'UNAVAILMAY','name' => 'Other Maybach Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>766, 'make_id' =>42, 'code' =>'MAZDA323','name' => '323','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>767, 'make_id' =>42, 'code' =>'MAZDA626', 'name' =>'626','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>768, 'make_id' =>42, 'code' =>'929','name' => '929','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>769, 'make_id' =>42, 'code' =>'B-SERIES','name' => 'B-Series Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>770, 'make_id' =>42, 'code' =>'CX-5', 'name' =>'CX-5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>771, 'make_id' =>42, 'code' =>'CX-7', 'name' =>'CX-7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>772, 'make_id' =>42, 'code' =>'CX-9', 'name' =>'CX-9','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>773, 'make_id' =>42, 'code' =>'GLC','name' => 'GLC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>774, 'make_id' =>42, 'code' =>'MAZDA2', 'name' =>'MAZDA2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>775, 'make_id' =>42, 'code' =>'MAZDA3', 'name' =>'MAZDA3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>776, 'make_id' =>42, 'code' =>'MAZDA5', 'name' =>'MAZDA5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>777, 'make_id' =>42, 'code' =>'MAZDA6', 'name' =>'MAZDA6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>778, 'make_id' =>42, 'code' =>'MAZDASPD3', 'name' =>'MAZDASPEED3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>779, 'make_id' =>42, 'code' =>'MAZDASPD6', 'name' =>'MAZDASPEED6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>780, 'make_id' =>42, 'code' =>'MIATA', 'name' =>'Miata MX5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>781, 'make_id' =>42, 'code' =>'MILL','name' => 'Millenia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>782, 'make_id' =>42, 'code' =>'MPV', 'name' =>'MPV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>783, 'make_id' =>42, 'code' =>'MX3', 'name' =>'MX3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>784, 'make_id' =>42, 'code' =>'MX6','name' => 'MX6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>785, 'make_id' =>42, 'code' =>'NAVAJO','name' => 'Navajo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>786, 'make_id' =>42, 'code' =>'PROTE', 'name' =>'Protege','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>787, 'make_id' =>42, 'code' =>'PROTE5', 'name' =>'Protege5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>788, 'make_id' =>42, 'code' =>'RX7','name' => 'RX-7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>789, 'make_id' =>42, 'code' =>'RX8','name' => 'RX-8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>790, 'make_id' =>42, 'code' =>'TRIBUTE', 'name' =>'Tribute','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>791, 'make_id' =>42, 'code' =>'MAZOTH','name' => 'Other Mazda Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>792, 'make_id' =>43, 'code' =>'MP4', 'name' =>'MP4-12C','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>793, 'make_id' =>44, 'code' =>'190_CLASS', 'name' =>'190 Class (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>794, 'make_id' =>44, 'code' =>'190D', 'name' =>'190D','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>795, 'make_id' =>44, 'code' =>'190E', 'name' =>'190E','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>796, 'make_id' =>44, 'code' =>'240_CLASS','name' => '240 Class (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>797, 'make_id' =>44, 'code' =>'240D', 'name' =>'240D','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>798, 'make_id' =>44, 'code' =>'300_CLASS_E_CLASS', 'name' =>'300 Class / E Class (6)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>799, 'make_id' =>44, 'code' =>'300CD', 'name' =>'300CD','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>800, 'make_id' =>44, 'code' =>'300CE','name' => '300CE','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>801, 'make_id' =>44, 'code' =>'300D','name' => '300D','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>802, 'make_id' =>44, 'code' =>'300E', 'name' =>'300E','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>803, 'make_id' =>44, 'code' =>'300TD', 'name' =>'300TD','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>804, 'make_id' =>44, 'code' =>'300TE','name' => '300TE','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>805, 'make_id' =>44, 'code' =>'C_CLASS', 'name' =>'C Class (13)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>806, 'make_id' =>44, 'code' =>'C220', 'name' =>'C220','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>807, 'make_id' =>44, 'code' =>'C230', 'name' =>'C230','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>808, 'make_id' =>44, 'code' =>'C240', 'name' =>'C240','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>809, 'make_id' =>44, 'code' =>'C250','name' => 'C250','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>810, 'make_id' =>44, 'code' =>'C280','name' => 'C280','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>811, 'make_id' =>44, 'code' =>'C300','name' => 'C300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>812, 'make_id' =>44, 'code' =>'C320', 'name' =>'C320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>813, 'make_id' =>44, 'code' =>'C32AMG', 'name' =>'C32 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>814, 'make_id' =>44, 'code' =>'C350', 'name' =>'C350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>815, 'make_id' =>44, 'code' =>'C36AMG', 'name' =>'C36 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>816, 'make_id' =>44, 'code' =>'C43AMG', 'name' =>'C43 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>817, 'make_id' =>44, 'code' =>'C55AMG', 'name' =>'C55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>818, 'make_id' =>44, 'code' =>'C63AMG', 'name' =>'C63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>819, 'make_id' =>44, 'code' =>'CL_CLASS', 'name' =>'CL Class (6)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>820, 'make_id' =>44, 'code' =>'CL500', 'name' =>'CL500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>821, 'make_id' =>44, 'code' =>'CL550', 'name' =>'CL550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>822, 'make_id' =>44, 'code' =>'CL55AMG', 'name' =>'CL55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>823, 'make_id' =>44, 'code' =>'CL600', 'name' =>'CL600','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>824, 'make_id' =>44, 'code' =>'CL63AMG','name' => 'CL63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>825, 'make_id' =>44, 'code' =>'CL65AMG', 'name' =>'CL65 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>826, 'make_id' =>44, 'code' =>'CLK_CLASS','name' => 'CLK Class (7)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>827, 'make_id' =>44, 'code' =>'CLK320', 'name' =>'CLK320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>828, 'make_id' =>44, 'code' =>'CLK350', 'name' =>'CLK350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>829, 'make_id' =>44, 'code' =>'CLK430', 'name' =>'CLK430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>830, 'make_id' =>44, 'code' =>'CLK500', 'name' =>'CLK500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>831, 'make_id' =>44, 'code' =>'CLK550', 'name' =>'CLK550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>832, 'make_id' =>44, 'code' =>'CLK55AMG', 'name' =>'CLK55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>833, 'make_id' =>44, 'code' =>'CLK63AMG', 'name' =>'CLK63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>834, 'make_id' =>44, 'code' =>'CLS_CLASS','name' => 'CLS Class (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>835, 'make_id' =>44, 'code' =>'CLS500', 'name' =>'CLS500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>836, 'make_id' =>44, 'code' =>'CLS550','name' => 'CLS550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>837, 'make_id' =>44, 'code' =>'CLS55AMG','name' => 'CLS55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>838, 'make_id' =>44, 'code' =>'CLS63AMG','name' => 'CLS63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>839, 'make_id' =>44, 'code' =>'E_CLASS','name' => 'E Class (18)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>840, 'make_id' =>44, 'code' =>'260E','name' => '260E','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>841, 'make_id' =>44, 'code' =>'280CE', 'name' =>'280CE','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>842, 'make_id' =>44, 'code' =>'280E', 'name' =>'280E','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>843, 'make_id' =>44, 'code' =>'400E','name' => '400E','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>844, 'make_id' =>44, 'code' =>'500E', 'name' =>'500E','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>845, 'make_id' =>44, 'code' =>'E300','name' => 'E300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>846, 'make_id' =>44, 'code' =>'E320', 'name' =>'E320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>847, 'make_id' =>44, 'code' =>'E320BLUE','name' => 'E320 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>848, 'make_id' =>44, 'code' =>'E320CDI', 'name' =>'E320 CDI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>849, 'make_id' =>44, 'code' =>'E350', 'name' =>'E350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>850, 'make_id' =>44, 'code' =>'E350BLUE', 'name' =>'E350 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>851, 'make_id' =>44, 'code' =>'E400', 'name' =>'E400 Hybrid','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>852, 'make_id' =>44, 'code' =>'E420', 'name' =>'E420','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>853, 'make_id' =>44, 'code' =>'E430', 'name' =>'E430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>854, 'make_id' =>44, 'code' =>'E500', 'name' =>'E500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>855, 'make_id' =>44, 'code' =>'E550', 'name' =>'E550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>856, 'make_id' =>44, 'code' =>'E55AMG', 'name' =>'E55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>857, 'make_id' =>44, 'code' =>'E63AMG','name' => 'E63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>858, 'make_id' =>44, 'code' =>'G_CLASS','name' => 'G Class (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>859, 'make_id' =>44, 'code' =>'G500', 'name' =>'G500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>860, 'make_id' =>44, 'code' =>'G550', 'name' =>'G550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>861, 'make_id' =>44, 'code' =>'G55AMG', 'name' =>'G55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>862, 'make_id' =>44, 'code' =>'G63AMG', 'name' =>'G63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>863, 'make_id' =>44, 'code' =>'GL_CLASS','name' => 'GL Class (5)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>864, 'make_id' =>44, 'code' =>'GL320BLUE', 'name' =>'GL320 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>865, 'make_id' =>44, 'code' =>'GL320CDI', 'name' =>'GL320 CDI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>866, 'make_id' =>44, 'code' =>'GL350BLUE','name' => 'GL350 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>867, 'make_id' =>44, 'code' =>'GL450', 'name' =>'GL450','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>868, 'make_id' =>44, 'code' =>'GL550','name' => 'GL550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>869, 'make_id' =>44, 'code' =>'GLK_CLASS', 'name' =>'GLK Class (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>870, 'make_id' =>44, 'code' =>'GLK350', 'name' =>'GLK350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>871, 'make_id' =>44, 'code' =>'M_CLASS','name' => 'M Class (11)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>872, 'make_id' =>44, 'code' =>'ML320', 'name' =>'ML320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>873, 'make_id' =>44, 'code' =>'ML320BLUE', 'name' =>'ML320 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>874, 'make_id' =>44, 'code' =>'ML320CDI', 'name' =>'ML320 CDI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>875, 'make_id' =>44, 'code' =>'ML350','name' => 'ML350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>876, 'make_id' =>44, 'code' =>'ML350BLUE','name' => 'ML350 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>877, 'make_id' =>44, 'code' =>'ML430', 'name' =>'ML430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>878, 'make_id' =>44, 'code' =>'ML450HY', 'name' =>'ML450 Hybrid','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>879, 'make_id' =>44, 'code' =>'ML500', 'name' =>'ML500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>880, 'make_id' =>44, 'code' =>'ML550', 'name' =>'ML550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>881, 'make_id' =>44, 'code' =>'ML55AMG', 'name' =>'ML55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>882, 'make_id' =>44, 'code' =>'ML63AMG', 'name' =>'ML63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>883, 'make_id' =>44, 'code' =>'R_CLASS', 'name' =>'R Class (6)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>884, 'make_id' =>44, 'code' =>'R320BLUE','name' => 'R320 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>885, 'make_id' =>44, 'code' =>'R320CDI', 'name' =>'R320 CDI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>886, 'make_id' =>44, 'code' =>'R350', 'name' =>'R350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>887, 'make_id' =>44, 'code' =>'R350BLUE', 'name' =>'R350 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>888, 'make_id' =>44, 'code' =>'R500', 'name' =>'R500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>889, 'make_id' =>44, 'code' =>'R63AMG', 'name' =>'R63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>890, 'make_id' =>44, 'code' =>'S_CLASS', 'name' =>'S Class (30)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>891, 'make_id' =>44, 'code' =>'300SD', 'name' =>'300SD','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>892, 'make_id' =>44, 'code' =>'300SDL', 'name' =>'300SDL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>893, 'make_id' =>44, 'code' =>'300SE', 'name' =>'300SE','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>894, 'make_id' =>44, 'code' =>'300SEL','name' => '300SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>895, 'make_id' =>44, 'code' =>'350SD', 'name' =>'350SD','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>896, 'make_id' =>44, 'code' =>'350SDL','name' => '350SDL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>897, 'make_id' =>44, 'code' =>'380SE', 'name' =>'380SE','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>898, 'make_id' =>44, 'code' =>'380SEC','name' => '380SEC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>899, 'make_id' =>44, 'code' =>'380SEL', 'name' =>'380SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>900, 'make_id' =>44, 'code' =>'400SE', 'name' =>'400SE','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>901, 'make_id' =>44, 'code' =>'400SEL', 'name' =>'400SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>902, 'make_id' =>44, 'code' =>'420SEL', 'name' =>'420SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>903, 'make_id' =>44, 'code' =>'500SEC', 'name' =>'500SEC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>904, 'make_id' =>44, 'code' =>'500SEL', 'name' =>'500SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>905, 'make_id' =>44, 'code' =>'560SEC', 'name' =>'560SEC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>906, 'make_id' =>44, 'code' =>'560SEL', 'name' =>'560SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>907, 'make_id' =>44, 'code' =>'600SEC','name' => '600SEC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>908, 'make_id' =>44, 'code' =>'600SEL', 'name' =>'600SEL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>909, 'make_id' =>44, 'code' =>'S320', 'name' =>'S320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>910, 'make_id' =>44, 'code' =>'S350', 'name' =>'S350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>911, 'make_id' =>44, 'code' =>'S350BLUE', 'name' =>'S350 Bluetec','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>912, 'make_id' =>44, 'code' =>'S400HY', 'name' =>'S400 Hybrid','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>913, 'make_id' =>44, 'code' =>'S420', 'name' =>'S420','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>914, 'make_id' =>44, 'code' =>'S430', 'name' =>'S430','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>915, 'make_id' =>44, 'code' =>'S500', 'name' =>'S500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>916, 'make_id' =>44, 'code' =>'S550', 'name' =>'S550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>917, 'make_id' =>44, 'code' =>'S55AMG','name' => 'S55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>918, 'make_id' =>44, 'code' =>'S600', 'name' =>'S600','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>919, 'make_id' =>44, 'code' =>'S63AMG', 'name' =>'S63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>920, 'make_id' =>44, 'code' =>'S65AMG', 'name' =>'S65 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>921, 'make_id' =>44, 'code' =>'SL_CLASS', 'name' =>'SL Class (13)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>922, 'make_id' =>44, 'code' =>'300SL','name' => '300SL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>923, 'make_id' =>44, 'code' =>'380SL', 'name' =>'380SL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>924, 'make_id' =>44, 'code' =>'380SLC', 'name' =>'380SLC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>925, 'make_id' =>44, 'code' =>'500SL', 'name' =>'500SL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>926, 'make_id' =>44, 'code' =>'560SL', 'name' =>'560SL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>927, 'make_id' =>44, 'code' =>'600SL', 'name' =>'600SL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>928, 'make_id' =>44, 'code' =>'SL320','name' => 'SL320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>929, 'make_id' =>44, 'code' =>'SL500','name' => 'SL500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>930, 'make_id' =>44, 'code' =>'SL550','name' => 'SL550','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>931, 'make_id' =>44, 'code' =>'SL55AMG','name' => 'SL55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>932, 'make_id' =>44, 'code' =>'SL600', 'name' =>'SL600','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>933, 'make_id' =>44, 'code' =>'SL63AMG', 'name' =>'SL63 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>934, 'make_id' =>44, 'code' =>'SL65AMG', 'name' =>'SL65 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>935, 'make_id' =>44, 'code' =>'SLK_CLASS','name' => 'SLK Class (8)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>936, 'make_id' =>44, 'code' =>'SLK230', 'name' =>'SLK230','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>937, 'make_id' =>44, 'code' =>'SLK250', 'name' =>'SLK250','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>938, 'make_id' =>44, 'code' =>'SLK280', 'name' =>'SLK280','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>939, 'make_id' =>44, 'code' =>'SLK300', 'name' =>'SLK300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>940, 'make_id' =>44, 'code' =>'SLK320', 'name' =>'SLK320','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>941, 'make_id' =>44, 'code' =>'SLK32AMG','name' => 'SLK32 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>942, 'make_id' =>44, 'code' =>'SLK350','name' => 'SLK350','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>943, 'make_id' =>44, 'code' =>'SLK55AMG', 'name' =>'SLK55 AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>944, 'make_id' =>44, 'code' =>'SLR_CLASS','name' => 'SLR Class (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>945, 'make_id' =>44, 'code' =>'SLR','name' => 'SLR','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>946, 'make_id' =>44, 'code' =>'SLS_CLASS', 'name' =>'SLS Class (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>947, 'make_id' =>44, 'code' =>'SLSAMG', 'name' =>'SLS AMG','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>948, 'make_id' =>44, 'code' =>'SPRINTER_CLASS', 'name' =>'Sprinter Class (1)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>949, 'make_id' =>44, 'code' =>'MBSPRINTER', 'name' =>'Sprinter','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>950, 'make_id' =>44, 'code' =>'MBOTH','name' => 'Other Mercedes-Benz Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>951, 'make_id' =>45, 'code' =>'CAPRI', 'name' =>'Capri','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>952, 'make_id' =>45, 'code' =>'COUGAR', 'name' =>'Cougar','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>953, 'make_id' =>45, 'code' =>'MERCGRAND','name' => 'Grand Marquis','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>954, 'make_id' =>45, 'code' =>'LYNX', 'name' =>'Lynx','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>955, 'make_id' =>45, 'code' =>'MARAUDER', 'name' =>'Marauder','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>956, 'make_id' =>45, 'code' =>'MARINER', 'name' =>'Mariner','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>957, 'make_id' =>45, 'code' =>'MARQ', 'name' =>'Marquis','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>958, 'make_id' =>45, 'code' =>'MILAN', 'name' =>'Milan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>959, 'make_id' =>45, 'code' =>'MONTEGO','name' => 'Montego','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>960, 'make_id' =>45, 'code' =>'MONTEREY','name' => 'Monterey','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>961, 'make_id' =>45, 'code' =>'MOUNTA', 'name' =>'Mountaineer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>962, 'make_id' =>45, 'code' =>'MYSTIQ','name' => 'Mystique','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>963, 'make_id' =>45, 'code' =>'SABLE', 'name' =>'Sable','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>964, 'make_id' =>45, 'code' =>'TOPAZ','name' => 'Topaz','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>965, 'make_id' =>45, 'code' =>'TRACER','name' => 'Tracer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>966, 'make_id' =>45, 'code' =>'VILLA', 'name' =>'Villager','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>967, 'make_id' =>45, 'code' =>'MERCZEP','name' => 'Zephyr','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>968, 'make_id' =>45, 'code' =>'MEOTH','name' => 'Other Mercury Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>969, 'make_id' =>46, 'code' =>'SCORP', 'name' =>'Scorpio','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>970, 'make_id' =>46, 'code' =>'XR4TI', 'name' =>'XR4Ti','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>971, 'make_id' =>46, 'code' =>'MEROTH', 'name' =>'Other Merkur Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>972, 'make_id' =>47, 'code' =>'COOPRCLUB_MODELS', 'name' =>'Cooper Clubman Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>973, 'make_id' =>47, 'code' =>'COOPERCLUB', 'name' =>' - Cooper Clubman','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>974, 'make_id' =>47, 'code' =>'COOPRCLUBS','name' => ' - Cooper S Clubman','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>975, 'make_id' =>47, 'code' =>'COOPCOUNTRY_MODELS', 'name' =>'Cooper Countryman Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>976, 'make_id' =>47, 'code' =>'COUNTRYMAN', 'name' =>' - Cooper Countryman','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>977, 'make_id' =>47, 'code' =>'COUNTRYMNS', 'name' =>' - Cooper S Countryman','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>978, 'make_id' =>47, 'code' =>'COOPCOUP_MODELS', 'name' =>'Cooper Coupe Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>979, 'make_id' =>47, 'code' =>'MINICOUPE','name' => ' - Cooper Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>980, 'make_id' =>47, 'code' =>'MINISCOUPE','name' => ' - Cooper S Coupe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>981, 'make_id' =>47, 'code' =>'COOPER_MODELS','name' => 'Cooper Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>982, 'make_id' =>47, 'code' =>'COOPER', 'name' =>' - Cooper','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>983, 'make_id' =>47, 'code' =>'COOPERS','name' => ' - Cooper S','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>984, 'make_id' =>47, 'code' =>'COOPRROAD_MODELS', 'name' =>'Cooper Roadster Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>985, 'make_id' =>47, 'code' =>'COOPERROAD', 'name' =>' - Cooper Roadster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>986, 'make_id' =>47, 'code' =>'COOPERSRD', 'name' =>' - Cooper S Roadster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>987, 'make_id' =>48, 'code' =>'3000GT','name' => '3000GT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>988, 'make_id' =>48, 'code' =>'CORD','name' => 'Cordia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>989, 'make_id' =>48, 'code' =>'DIAMAN', 'name' =>'Diamante','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>990, 'make_id' =>48, 'code' =>'ECLIP','name' => 'Eclipse','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>991, 'make_id' =>48, 'code' =>'ENDEAVOR', 'name' =>'Endeavor','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>992, 'make_id' =>48, 'code' =>'MITEXP','name' => 'Expo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>993, 'make_id' =>48, 'code' =>'GALANT','name' => 'Galant','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>994, 'make_id' =>48, 'code' =>'MITI', 'name' =>'i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>995, 'make_id' =>48, 'code' =>'LANCERMITS', 'name' =>'Lancer','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>996, 'make_id' =>48, 'code' =>'LANCEREVO', 'name' =>'Lancer Evolution','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>997, 'make_id' =>48, 'code' =>'MITPU', 'name' =>'Mighty Max','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>998, 'make_id' =>48, 'code' =>'MIRAGE', 'name' =>'Mirage','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>999, 'make_id' =>48, 'code' =>'MONT','name' => 'Montero','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1000, 'make_id' =>48,'code' => 'MONTSPORT','name' => 'Montero Sport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1001, 'make_id' =>48,'code' => 'OUTLANDER', 'name' =>'Outlander','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1002, 'make_id' =>48,'code' => 'OUTLANDSPT', 'name' =>'Outlander Sport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1003, 'make_id' =>48,'code' => 'PRECIS','name' => 'Precis','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1004, 'make_id' =>48,'code' => 'RAIDERMITS', 'name' =>'Raider','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1005, 'make_id' =>48,'code' => 'SIGMA', 'name' =>'Sigma','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1006, 'make_id' =>48,'code' => 'MITSTAR', 'name' =>'Starion','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1007, 'make_id' =>48,'code' => 'TRED', 'name' =>'Tredia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1008, 'make_id' =>48,'code' => 'MITVAN','name' => 'Van','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1009, 'make_id' =>48,'code' => 'MITOTH', 'name' =>'Other Mitsubishi Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1010, 'make_id' =>49,'code' => 'NIS200SX','name' => '200SX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1011, 'make_id' =>49,'code' => '240SX', 'name' =>'240SX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1012, 'make_id' =>49,'code' => '300ZXTURBO','name' => '300ZX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1013, 'make_id' =>49,'code' => '350Z', 'name' =>'350Z','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1014, 'make_id' =>49,'code' => '370Z', 'name' =>'370Z','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1015, 'make_id' =>49,'code' => 'ALTIMA', 'name' =>'Altima','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1016, 'make_id' =>49,'code' => 'PATHARMADA','name' => 'Armada','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1017, 'make_id' =>49,'code' => 'AXXESS', 'name' =>'Axxess','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1018, 'make_id' =>49,'code' => 'CUBE', 'name' =>'Cube','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1019, 'make_id' =>49,'code' => 'FRONTI', 'name' =>'Frontier','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1020, 'make_id' =>49,'code' => 'GT-R','name' => 'GT-R','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1021, 'make_id' =>49, 'code' =>'JUKE','name' =>'Juke','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1022, 'make_id' =>49, 'code' =>'LEAF','name' => 'Leaf','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1023, 'make_id' =>49, 'code' =>'MAX', 'name' =>'Maxima','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1024, 'make_id' =>49, 'code' =>'MURANO','name' => 'Murano','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1025, 'make_id' =>49, 'code' =>'MURANOCROS','name' => 'Murano CrossCabriolet','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1026, 'make_id' =>49, 'code' =>'NV', 'name' =>'NV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1027, 'make_id' =>49, 'code' =>'NX', 'name' =>'NX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1028, 'make_id' =>49, 'code' =>'PATH', 'name' =>'Pathfinder','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1029, 'make_id' =>49, 'code' =>'NISPU', 'name' =>'Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1030, 'make_id' =>49, 'code' =>'PULSAR','name' => 'Pulsar','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1031, 'make_id' =>49, 'code' =>'QUEST', 'name' =>'Quest','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1032, 'make_id' =>49, 'code' =>'ROGUE', 'name' =>'Rogue','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1033, 'make_id' =>49, 'code' =>'SENTRA','name' => 'Sentra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1034, 'make_id' =>49, 'code' =>'STANZA','name' => 'Stanza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1035, 'make_id' =>49, 'code' =>'TITAN', 'name' =>'Titan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1036, 'make_id' =>49, 'code' =>'NISVAN','name' => 'Van','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1037, 'make_id' =>49, 'code' =>'VERSA', 'name' =>'Versa','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1038, 'make_id' =>49, 'code' =>'XTERRA','name' => 'Xterra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1039, 'make_id' =>49, 'code' =>'NISSOTH','name' => 'Other Nissan Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1040, 'make_id' =>50, 'code' =>'88','name' => '88','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1041, 'make_id' =>50, 'code' =>'ACHIEV', 'name' =>'Achieva','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1042, 'make_id' =>50, 'code' =>'ALERO','name' => 'Alero','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1043, 'make_id' =>50, 'code' =>'AURORA', 'name' =>'Aurora','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1044, 'make_id' =>50, 'code' =>'BRAV', 'name' =>'Bravada','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1045, 'make_id' =>50, 'code' =>'CUCR', 'name' =>'Custom Cruiser','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1046, 'make_id' =>50, 'code' =>'OLDCUS', 'name' =>'Cutlass','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1047, 'make_id' =>50, 'code' =>'OLDCALAIS','name' => 'Cutlass Calais','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1048, 'make_id' =>50, 'code' =>'CIERA','name' => 'Cutlass Ciera','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1049, 'make_id' =>50, 'code' =>'CSUPR', 'name' =>'Cutlass Supreme','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1050, 'make_id' =>50, 'code' =>'OLDSFIR','name' => 'Firenza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1051, 'make_id' =>50, 'code' =>'INTRIG', 'name' =>'Intrigue','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1052, 'make_id' =>50, 'code' =>'98', 'name' =>'Ninety-Eight','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1053, 'make_id' =>50, 'code' =>'OMEG','name' => 'Omega','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1054, 'make_id' =>50, 'code' =>'REGEN', 'name' =>'Regency','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1055, 'make_id' =>50, 'code' =>'SILHO', 'name' =>'Silhouette','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1056, 'make_id' =>50, 'code' =>'TORO', 'name' =>'Toronado','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1057, 'make_id' =>50, 'code' =>'OLDOTH','name' => 'Other Oldsmobile Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1058, 'make_id' =>51, 'code' =>'405', 'name' =>'405','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1059, 'make_id' =>51, 'code' =>'504', 'name' =>'504','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1060, 'make_id' =>51, 'code' =>'505','name' => '505','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1061, 'make_id' =>51, 'code' =>'604','name' => '604','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1062, 'make_id' =>51, 'code' =>'UNAVAILPEU','name' => 'Other Peugeot Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1063, 'make_id' =>52, 'code' =>'ACC', 'name' =>'Acclaim','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1064, 'make_id' =>52, 'code' =>'ARROW', 'name' =>'Arrow','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1065, 'make_id' =>52, 'code' =>'BREEZE', 'name' =>'Breeze','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1066, 'make_id' =>52, 'code' =>'CARAVE', 'name' =>'Caravelle','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1067, 'make_id' =>52, 'code' =>'CHAMP','name' => 'Champ','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1068, 'make_id' =>52, 'code' =>'COLT', 'name' =>'Colt','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1069, 'make_id' =>52, 'code' =>'PLYMCONQ', 'name' =>'Conquest','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1070, 'make_id' =>52, 'code' =>'GRANFURY', 'name' =>'Gran Fury','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1071, 'make_id' =>52, 'code' =>'PLYMGRANV','name' => 'Grand Voyager','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1072, 'make_id' =>52, 'code' =>'HORI','name' => 'Horizon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1073, 'make_id' =>52, 'code' =>'LASER','name' => 'Laser','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1074, 'make_id' =>52, 'code' =>'NEON', 'name' =>'Neon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1075, 'make_id' =>52, 'code' =>'PROWLE','name' => 'Prowler','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1076, 'make_id' =>52, 'code' =>'RELI', 'name' =>'Reliant','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1077, 'make_id' =>52, 'code' =>'SAPPOROPLY', 'name' =>'Sapporo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1078, 'make_id' =>52, 'code' =>'SCAMP', 'name' =>'Scamp','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1079, 'make_id' =>52, 'code' =>'SUNDAN', 'name' =>'Sundance','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1080, 'make_id' =>52, 'code' =>'TRAILDUST','name' => 'Trailduster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1081, 'make_id' =>52, 'code' =>'VOYA', 'name' =>'Voyager','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1082, 'make_id' =>52, 'code' =>'PLYOTH','name' => 'Other Plymouth Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1083, 'make_id' =>53, 'code' =>'T-1000','name' => '1000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1084, 'make_id' =>53, 'code' =>'6000','name' => '6000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1085, 'make_id' =>53, 'code' =>'AZTEK', 'name' =>'Aztek','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1086, 'make_id' =>53, 'code' =>'BON','name' => 'Bonneville','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1087, 'make_id' =>53, 'code' =>'CATALINA','name' => 'Catalina','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1088, 'make_id' =>53, 'code' =>'FIERO', 'name' =>'Fiero','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1089, 'make_id' =>53, 'code' =>'FBIRD', 'name' =>'Firebird','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1090, 'make_id' =>53, 'code' =>'G3', 'name' =>'G3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1091, 'make_id' =>53, 'code' =>'G5', 'name' =>'G5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1092, 'make_id' =>53, 'code' =>'G6', 'name' =>'G6','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1093, 'make_id' =>53, 'code' =>'G8','name' => 'G8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1094, 'make_id' =>53, 'code' =>'GRNDAM','name' => 'Grand Am','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1095, 'make_id' =>53, 'code' =>'GP', 'name' =>'Grand Prix','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1096, 'make_id' =>53, 'code' =>'GTO', 'name' =>'GTO','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1097, 'make_id' =>53, 'code' =>'J2000','name' => 'J2000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1098, 'make_id' =>53, 'code' =>'LEMANS','name' => 'Le Mans','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1099, 'make_id' =>53, 'code' =>'MONTANA','name' => 'Montana','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1100, 'make_id' =>53, 'code' =>'PARISI', 'name' =>'Parisienne','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1101, 'make_id' =>53, 'code' =>'PHOENIX', 'name' =>'Phoenix','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1102, 'make_id' =>53, 'code' =>'SAFARIPONT','name' => 'Safari','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1103, 'make_id' =>53, 'code' =>'SOLSTICE','name' => 'Solstice','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1104, 'make_id' =>53, 'code' =>'SUNBIR', 'name' =>'Sunbird','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1105, 'make_id' =>53, 'code' =>'SUNFIR', 'name' =>'Sunfire','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1106, 'make_id' =>53, 'code' =>'TORRENT','name' => 'Torrent','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1107, 'make_id' =>53, 'code' =>'TS','name' => 'Trans Sport','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1108, 'make_id' =>53, 'code' =>'VIBE','name' => 'Vibe','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1109, 'make_id' =>53, 'code' =>'PONOTH','name' => 'Other Pontiac Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1110, 'make_id' =>54, 'code' =>'911','name' => '911','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1111, 'make_id' =>54, 'code' =>'924','name' => '924','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1112, 'make_id' =>54, 'code' =>'928','name' => '928','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1113, 'make_id' =>54, 'code' =>'944','name' => '944','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1114, 'make_id' =>54, 'code' =>'968','name' => '968','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1115, 'make_id' =>54, 'code' =>'BOXSTE', 'name' =>'Boxster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1116, 'make_id' =>54, 'code' =>'CARRERAGT','name' => 'Carrera GT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1117, 'make_id' =>54, 'code' =>'CAYENNE', 'name' =>'Cayenne','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1118, 'make_id' =>54, 'code' =>'CAYMAN', 'name' =>'Cayman','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1119, 'make_id' =>54, 'code' =>'PANAMERA','name' => 'Panamera','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1120, 'make_id' =>54, 'code' =>'POROTH', 'name' =>'Other Porsche Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1121, 'make_id' =>55, 'code' =>'RAM1504WD','name' => '1500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1122, 'make_id' =>55, 'code' =>'RAM25002WD','name' => '2500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1123, 'make_id' =>55, 'code' =>'RAM3502WD', 'name' =>'3500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1124, 'make_id' =>55, 'code' =>'RAM4500', 'name' =>'4500','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1125, 'make_id' =>56, 'code' =>'18I','name' => '18i','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1126, 'make_id' =>56, 'code' =>'FU', 'name' =>'Fuego','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1127, 'make_id' =>56, 'code' =>'LECAR','name' => 'Le Car','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1128, 'make_id' =>56, 'code' =>'R18','name' => 'R18','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1129, 'make_id' =>56, 'code' =>'RENSPORT','name' => 'Sportwagon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1130, 'make_id' =>56, 'code' =>'UNAVAILREN','name' => 'Other Renault Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1131, 'make_id' =>57, 'code' =>'CAMAR','name' => 'Camargue','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1132, 'make_id' =>57, 'code' =>'CORN', 'name' =>'Corniche','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1133, 'make_id' =>57, 'code' =>'GHOST', 'name' =>'Ghost','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1134, 'make_id' =>57, 'code' =>'PARKWARD', 'name' =>'Park Ward','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1135, 'make_id' =>57, 'code' =>'PHANT', 'name' =>'Phantom','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1136, 'make_id' =>57, 'code' =>'DAWN', 'name' =>'Silver Dawn','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1137, 'make_id' =>57, 'code' =>'SILSERAPH', 'name' =>'Silver Seraph','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1138, 'make_id' =>57, 'code' =>'RRSPIR','name' => 'Silver Spirit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1139, 'make_id' =>57, 'code' =>'SPUR', 'name' =>'Silver Spur','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1140, 'make_id' =>57, 'code' =>'UNAVAILRR','name' => 'Other Rolls-Royce Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1141, 'make_id' =>58, 'code' =>'9-2X','name' => '9-2X','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1142, 'make_id' =>58, 'code' =>'9-3', 'name' =>'9-3','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1143, 'make_id' =>58, 'code' =>'9-4X','name' => '9-4X','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1144, 'make_id' =>58, 'code' =>'9-5', 'name' =>'9-5','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1145, 'make_id' =>58, 'code' =>'97X', 'name' =>'9-7X','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1146, 'make_id' =>58, 'code' =>'900','name' => '900','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1147, 'make_id' =>58, 'code' =>'9000','name' => '9000','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1148, 'make_id' =>58, 'code' =>'SAOTH','name' => 'Other Saab Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1149, 'make_id' =>59, 'code' =>'ASTRA','name' => 'Astra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1150, 'make_id' =>59, 'code' =>'AURA','name' => 'Aura','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1151, 'make_id' =>59, 'code' =>'ION', 'name' =>'ION','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1152, 'make_id' =>59, 'code' =>'L_SERIES', 'name' =>'L Series (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1153, 'make_id' =>59, 'code' =>'L100', 'name' =>' - L100','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1154, 'make_id' =>59, 'code' =>'L200','name' => ' - L200','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1155, 'make_id' =>59, 'code' =>'L300','name' => ' - L300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1156, 'make_id' =>59, 'code' =>'LSSATURN','name' => 'LS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1157, 'make_id' =>59, 'code' =>'LW_SERIES', 'name' =>'LW Series (4)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1158, 'make_id' =>59, 'code' =>'LW', 'name' =>' - LW1','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1159, 'make_id' =>59, 'code' =>'LW2', 'name' =>' - LW2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1160, 'make_id' =>59, 'code' =>'LW200','name' => ' - LW200','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1161, 'make_id' =>59, 'code' =>'LW300', 'name' =>' - LW300','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1162, 'make_id' =>59, 'code' =>'OUTLOOK','name' => 'Outlook','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1163, 'make_id' =>59, 'code' =>'RELAY', 'name' =>'Relay','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1164, 'make_id' =>59, 'code' =>'SC_SERIES', 'name' =>'SC Series (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1165, 'make_id' =>59, 'code' =>'SC1','name' => ' - SC1','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1166, 'make_id' =>59, 'code' =>'SC2', 'name' =>' - SC2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1167, 'make_id' =>59, 'code' =>'SKY', 'name' =>'Sky','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1168, 'make_id' =>59, 'code' =>'SL_SERIES','name' => 'SL Series (3)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1169, 'make_id' =>59, 'code' =>'SL', 'name' =>' - SL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1170, 'make_id' =>59, 'code' =>'SL1','name' => ' - SL1','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1171, 'make_id' =>59, 'code' =>'SL2','name' => ' - SL2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1172, 'make_id' =>59, 'code' =>'SW_SERIES', 'name' =>'SW Series (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1173, 'make_id' =>59, 'code' =>'SW1', 'name' =>' - SW1','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1174, 'make_id' =>59, 'code' =>'SW2','name' => ' - SW2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1175, 'make_id' =>59, 'code' =>'VUE','name' => 'Vue','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1176, 'make_id' =>59, 'code' =>'SATOTH','name' => 'Other Saturn Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1177, 'make_id' =>60, 'code' =>'SCIFRS','name' => 'FR-S','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1178, 'make_id' =>60, 'code' =>'IQ', 'name' =>'iQ','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1179, 'make_id' =>60, 'code' =>'TC', 'name' =>'tC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1180, 'make_id' =>60, 'code' =>'XA', 'name' =>'xA','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1181, 'make_id' =>60, 'code' =>'XB', 'name' =>'xB','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1182, 'make_id' =>60, 'code' =>'XD','name' => 'xD','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1183, 'make_id' =>61, 'code' =>'FORTWO','name' => 'fortwo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1184, 'make_id' =>61, 'code' =>'SMOTH','name' => 'Other smart Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1185, 'make_id' =>62, 'code' =>'SRTVIPER', 'name' =>'Viper','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1186, 'make_id' =>63, 'code' =>'825', 'name' =>'825','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1187, 'make_id' =>63, 'code' =>'827', 'name' =>'827','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1188, 'make_id' =>63, 'code' =>'UNAVAILSTE', 'name' =>'Other Sterling Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1189, 'make_id' =>64, 'code' =>'BAJA', 'name' =>'Baja','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1190, 'make_id' =>64, 'code' =>'BRAT', 'name' =>'Brat','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1191, 'make_id' =>64, 'code' =>'SUBBRZ','name' => 'BRZ','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1192, 'make_id' =>64, 'code' =>'FOREST','name' => 'Forester','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1193, 'make_id' =>64, 'code' =>'IMPREZ', 'name' =>'Impreza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1194, 'make_id' =>64, 'code' =>'IMPWRX', 'name' =>'Impreza WRX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1195, 'make_id' =>64, 'code' =>'JUSTY','name' => 'Justy','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1196, 'make_id' =>64, 'code' =>'SUBL', 'name' =>'L Series','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1197, 'make_id' =>64, 'code' =>'LEGACY','name' => 'Legacy','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1198, 'make_id' =>64, 'code' =>'LOYALE','name' => 'Loyale','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1199, 'make_id' =>64, 'code' =>'SUBOUTBK','name' => 'Outback','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1200, 'make_id' =>64, 'code' =>'SVX', 'name' =>'SVX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1201, 'make_id' =>64, 'code' =>'B9TRIBECA', 'name' =>'Tribeca','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1202, 'make_id' =>64, 'code' =>'XT', 'name' =>'XT','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1203, 'make_id' =>64, 'code' =>'XVCRSSTREK', 'name' =>'XV Crosstrek','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1204, 'make_id' =>64, 'code' =>'SUBOTH','name' => 'Other Subaru Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1205, 'make_id' =>65, 'code' =>'AERIO', 'name' =>'Aerio','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1206, 'make_id' =>65, 'code' =>'EQUATOR','name' => 'Equator','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1207, 'make_id' =>65, 'code' =>'ESTEEM', 'name' =>'Esteem','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1208, 'make_id' =>65, 'code' =>'FORENZA','name' => 'Forenza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1209, 'make_id' =>65, 'code' =>'GRANDV', 'name' =>'Grand Vitara','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1210, 'make_id' =>65, 'code' =>'KIZASHI','name' => 'Kizashi','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1211, 'make_id' =>65, 'code' =>'RENO', 'name' =>'Reno','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1212, 'make_id' =>65, 'code' =>'SAMUR', 'name' =>'Samurai','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1213, 'make_id' =>65, 'code' =>'SIDE', 'name' =>'Sidekick','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1214, 'make_id' =>65, 'code' =>'SWIFT', 'name' =>'Swift','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1215, 'make_id' =>65, 'code' =>'SX4', 'name' =>'SX4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1216, 'make_id' =>65, 'code' =>'VERONA', 'name' =>'Verona','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1217, 'make_id' =>65, 'code' =>'VITARA','name' => 'Vitara','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1218, 'make_id' =>65, 'code' =>'X90', 'name' =>'X-90','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1219, 'make_id' =>65, 'code' =>'XL7', 'name' =>'XL7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1220, 'make_id' =>65, 'code' =>'SUZOTH','name' => 'Other Suzuki Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1221, 'make_id' =>66, 'code' =>'ROADSTER','name' => 'Roadster','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1222, 'make_id' =>67, 'code' =>'4RUN', 'name' =>'4Runner','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1223, 'make_id' =>67, 'code' =>'AVALON', 'name' =>'Avalon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1224, 'make_id' =>67, 'code' =>'CAMRY', 'name' =>'Camry','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1225, 'make_id' =>67, 'code' =>'CELICA','name' => 'Celica','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1226, 'make_id' =>67, 'code' =>'COROL', 'name' =>'Corolla','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1227, 'make_id' =>67, 'code' =>'CORONA', 'name' =>'Corona','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1228, 'make_id' =>67, 'code' =>'CRESS','name' => 'Cressida','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1229, 'make_id' =>67, 'code' =>'ECHO', 'name' =>'Echo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1230, 'make_id' =>67, 'code' =>'FJCRUIS', 'name' =>'FJ Cruiser','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1231, 'make_id' =>67, 'code' =>'HIGHLANDER','name' => 'Highlander','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1232, 'make_id' =>67, 'code' =>'LC', 'name' =>'Land Cruiser','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1233, 'make_id' =>67, 'code' =>'MATRIX', 'name' =>'Matrix','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1234, 'make_id' =>67, 'code' =>'MR2','name' => 'MR2','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1235, 'make_id' =>67, 'code' =>'MR2SPYDR', 'name' =>'MR2 Spyder','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1236, 'make_id' =>67, 'code' =>'PASEO', 'name' =>'Paseo','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1237, 'make_id' =>67, 'code' =>'PICKUP','name' => 'Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1238, 'make_id' =>67, 'code' =>'PREVIA','name' => 'Previa','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1239, 'make_id' =>67,'code' => 'PRIUS','name' => 'Prius','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1240, 'make_id' =>67,'code' => 'PRIUSC','name' => 'Prius C','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1241, 'make_id' =>67,'code' => 'PRIUSV','name' => 'Prius V','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1242, 'make_id' =>67,'code' => 'RAV4','name' => 'RAV4','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1243, 'make_id' =>67,'code' => 'SEQUOIA','name' => 'Sequoia','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1244, 'make_id' =>67,'code' => 'SIENNA','name' => 'Sienna','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1245, 'make_id' =>67,'code' => 'SOLARA','name' => 'Solara','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1246, 'make_id' =>67,'code' => 'STARLET','name' => 'Starlet','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1247, 'make_id' =>67,'code' => 'SUPRA', 'name' =>'Supra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1248, 'make_id' =>67,'code' => 'T100', 'name' =>'T100','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1249, 'make_id' =>67,'code' => 'TACOMA','name' => 'Tacoma','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1250, 'make_id' =>67,'code' => 'TERCEL', 'name' =>'Tercel','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1251, 'make_id' =>67,'code' => 'TUNDRA', 'name' =>'Tundra','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1252, 'make_id' =>67,'code' => 'TOYVAN', 'name' =>'Van','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1253, 'make_id' =>67, 'code' =>'VENZA', 'name' =>'Venza','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1254, 'make_id' =>67, 'code' =>'YARIS','name' => 'Yaris','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1255, 'make_id' =>67, 'code' =>'TOYOTH','name' => 'Other Toyota Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1256, 'make_id' =>68, 'code' =>'TR7','name' => 'TR7','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1257, 'make_id' =>68, 'code' =>'TR8', 'name' =>'TR8','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1258, 'make_id' =>68, 'code' =>'TRIOTH','name' => 'Other Triumph Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1259, 'make_id' =>69, 'code' =>'BEETLE','name' => 'Beetle','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1260, 'make_id' =>69, 'code' =>'VOLKSCAB','name' => 'Cabrio','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1261, 'make_id' =>69, 'code' =>'CAB','name' => 'Cabriolet','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1262, 'make_id' =>69, 'code' =>'CC', 'name' =>'CC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1263, 'make_id' =>69, 'code' =>'CORR', 'name' =>'Corrado','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1264, 'make_id' =>69, 'code' =>'DASHER','name' => 'Dasher','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1265, 'make_id' =>69, 'code' =>'EOS','name' => 'Eos','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1266, 'make_id' =>69, 'code' =>'EUROVAN','name' => 'Eurovan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1267, 'make_id' =>69, 'code' =>'VOLKSFOX','name' =>'Fox','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1268, 'make_id' =>69, 'code' =>'GLI', 'name' =>'GLI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1269, 'make_id' =>69, 'code' =>'GOLFR','name' => 'Golf R','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1270, 'make_id' =>69, 'code' =>'GTI', 'name' =>'GTI','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1271, 'make_id' =>69, 'code' =>'GOLFANDRABBITMODELS','name' => 'Golf and Rabbit Models (2)','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1272, 'make_id' =>69, 'code' =>'GOLF', 'name' =>' - Golf','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1273, 'make_id' =>69, 'code' =>'RABBIT','name' => ' - Rabbit','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1274, 'make_id' =>69, 'code' =>'JET','name' => 'Jetta','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1275, 'make_id' =>69, 'code' =>'PASS','name' => 'Passat','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1276, 'make_id' =>69, 'code' =>'PHAETON','name' => 'Phaeton','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1277, 'make_id' =>69, 'code' =>'RABBITPU', 'name' =>'Pickup','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1278, 'make_id' =>69, 'code' =>'QUAN', 'name' =>'Quantum','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1279, 'make_id' =>69, 'code' =>'R32', 'name' =>'R32','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1280, 'make_id' =>69, 'code' =>'ROUTAN', 'name' =>'Routan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1281, 'make_id' =>69, 'code' =>'SCIR', 'name' =>'Scirocco','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1282, 'make_id' =>69, 'code' =>'TIGUAN','name' => 'Tiguan','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1283, 'make_id' =>69, 'code' =>'TOUAREG','name' => 'Touareg','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1284, 'make_id' =>69, 'code' =>'VANAG', 'name' =>'Vanagon','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1285, 'make_id' =>69, 'code' =>'VWOTH','name' => 'Other Volkswagen Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1286, 'make_id' =>70, 'code' =>'240', 'name' =>'240','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1287, 'make_id' =>70, 'code' =>'260','name' => '260','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1288, 'make_id' =>70, 'code' =>'740','name' => '740','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1289, 'make_id' =>70, 'code' =>'760','name' => '760','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1290, 'make_id' =>70, 'code' =>'780','name' => '780','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1291, 'make_id' =>70, 'code' =>'850', 'name' =>'850','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1292, 'make_id' =>70, 'code' =>'940', 'name' =>'940','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1293, 'make_id' =>70, 'code' =>'960','name' => '960','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1294, 'make_id' =>70, 'code' =>'C30','name' => 'C30','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1295, 'make_id' =>70, 'code' =>'C70','name' => 'C70','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1296, 'make_id' =>70, 'code' =>'S40', 'name' =>'S40','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1297, 'make_id' =>70, 'code' =>'S60', 'name' =>'S60','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1298, 'make_id' =>70, 'code' =>'S70', 'name' =>'S70','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1299, 'make_id' =>70, 'code' =>'S80','name' => 'S80','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1300, 'make_id' =>70, 'code' =>'S90','name' => 'S90','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1301, 'make_id' =>70, 'code' =>'V40','name' =>'V40','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1302, 'make_id' =>70, 'code' =>'V50', 'name' =>'V50','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1303, 'make_id' =>70, 'code' =>'V70', 'name' =>'V70','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1304, 'make_id' =>70, 'code' =>'V90', 'name' =>'V90','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1305, 'make_id' =>70, 'code' =>'XC60', 'name' =>'XC60','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1306, 'make_id' =>70, 'code' =>'XC', 'name' =>'XC70','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1307, 'make_id' =>70, 'code' =>'XC90', 'name' =>'XC90','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1308, 'make_id' =>70, 'code' =>'VOLOTH','name' => 'Other Volvo Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1309, 'make_id' =>71, 'code' =>'GV', 'name' =>'GV','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1310, 'make_id' =>71, 'code' =>'GVC','name' => 'GVC','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1311, 'make_id' =>71, 'code' =>'GVL', 'name' =>'GVL','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1312, 'make_id' =>71, 'code' =>'GVS', 'name' =>'GVS','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1313, 'make_id' =>71, 'code' =>'GVX','name' => 'GVX','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

      array('id' =>1314, 'make_id' =>71, 'code' =>'YUOTH','name' => 'Other Yugo Models','year' => rand(1970, date('Y')), 'cost'=> $this->frand()),

    );
    DB::table('vehicle_models')->insert($models1);

  }

  function frand($min=1000, $max=10000, $decimals = 2) {
    $scale = pow(10, $decimals);
    return mt_rand($min * $scale, $max * $scale) / $scale;
  }

}

