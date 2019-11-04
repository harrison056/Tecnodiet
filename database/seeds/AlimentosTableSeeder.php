<?php

use Illuminate\Database\Seeder;
use App\Alimento;

class AlimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/food.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
        	if ($obj->attributes->energy->kcal == "*") {
        		# code...
        	}elseif ($obj->attributes->energy->kcal == "NA") {
        		Alimento::create(array(
        		'id' => $obj->id,
        		'description' => $obj->description,
        		'base_qty' => $obj->base_qty,
        		'energy_kcal' => 0
        		));
        	}else{
        		Alimento::create(array(
        		'id' => $obj->id,
        		'description' => $obj->description,
        		'base_qty' => $obj->base_qty,
        		'energy_kcal' => $obj->attributes->energy->kcal
        		));
        	}
        }
    }
}
