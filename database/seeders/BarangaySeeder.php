<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangays = [
            ['name'=>'Dicklum'],
            ['name'=>'Agusan Canyon'],
            ['name'=>'Alae'],
            ['name'=>'Dahilayan'],
            ['name'=>'Maluko'],
            ['name'=>'Damilag'],
            ['name'=>'Mambatangan'],
            ['name'=>'Mantibugao'],
            ['name'=>'Lingion'],
            ['name'=>'Lunocan'],
            ['name'=>'Sto. Niño'],
            ['name'=>'Ticala'],
            ['name'=>'Dalirig'],
            ['name'=>'Lindaban'],
            ['name'=>'Kalugmanan'],
            ['name'=>'Guilangguilang'],
            ['name'=>'Santiago'],
            ['name'=>'Mampayag'],
            ['name'=>'Tankulan (Poblacion)'],
            ['name'=>'Sankanan'],
            ['name'=>'Minsuro'],
            ['name'=>'San Miguel'],

        ];

        foreach ($barangays as $barangay){

            DB::table('barangays')->insert([
                'name' => $barangay['name'],
            ]);
        }
    }
}
