<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['name'=>'Dental Checkup','office_id'=>1,'servicetype_id'=>1],
            ['name'=>'Medical Checkup','office_id'=>1,'servicetype_id'=>1],
            ['name'=>'Eye Checkup','office_id'=>1,'servicetype_id'=>1],
        ];

        foreach ($services as $service){

            DB::table('services')->insert([
                'name' => $service['name'],
                'office_id' => $service['office_id'],
                'servicetype_id' => $service['servicetype_id'],
            ]);
        }
    }
}
