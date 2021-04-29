<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicetypes = [
            ['name'=>'Medical'],
            ['name'=>'Non-Medical'],
        ];

        foreach ($servicetypes as $servicetype){
            DB::table('servicetypes')->insert([
                'name' => $servicetype['name'],
            ]);
        }
    }
}
