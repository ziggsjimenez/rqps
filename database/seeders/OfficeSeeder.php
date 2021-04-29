<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = [
            ['name'=>'Municipal Health Office','code'=>'MHO'],
            ['name'=>'Municipal Agriculture','code'=>'MAO'],
            ['name'=>'Municipal Engineering Office','code'=>'MEO'],
            ['name'=>'Municipal Treasurer\'s Office','code'=>'MTO'],
            ['name'=>'License and Permit Division','code'=>'LAPD'],
            ['name'=>'Local Civil Registrar','code'=>'LCR'],
            ['name'=>'Municipal Nutrition Action Office','code'=>'MNAO'],
            ['name'=>'Public Attorney\'s Office','code'=>'PAO'],
            ['name'=>'Land Transportation Office','code'=>'LTO'],
            ['name'=>'Social Security System','code'=>'SSS'],
            ['name'=>'Philhealth','code'=>'Philhealth'],
            ['name'=>'Pag-ibig','code'=>'Pag-ibig'],

        ];

        foreach ($offices as $office){

            DB::table('offices')->insert([
                'name' => $office['name'],
                'code' => $office['code'],
            ]);
        }
    }
}
