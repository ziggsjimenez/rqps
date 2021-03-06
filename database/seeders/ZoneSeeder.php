<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zones = [
            ['name'=>'Purok 5 (Cristanvilla Subdivision)','barangay_id'=>1],
            ['name'=>'Purok 10','barangay_id'=>6],
            ['name'=>'Balamban','barangay_id'=>2],
            ['name'=>'Zone 1','barangay_id'=>3],
            ['name'=>'Zone 2','barangay_id'=>3],
            ['name'=>'Zone 3','barangay_id'=>3],
            ['name'=>'Purok 1','barangay_id'=>19],
            ['name'=>'Purok 2','barangay_id'=>19],
            ['name'=>'Ibabao','barangay_id'=>2],
            ['name'=>'Tulay','barangay_id'=>2],
            ['name'=>'Kisabong','barangay_id'=>2],
            ['name'=>'Kurbada','barangay_id'=>2],
            ['name'=>'Old Corrales','barangay_id'=>2],
            ['name'=>'New Corrales','barangay_id'=>2],
            ['name'=>'Pine Tree','barangay_id'=>2],
            ['name'=>'Merkado','barangay_id'=>2],
            ['name'=>'Camp Philipps','barangay_id'=>2],
            ['name'=>'Aries','barangay_id'=>2],
            ['name'=>'Deers','barangay_id'=>2],
            ['name'=>'Bulls','barangay_id'=>2],
            ['name'=>'Cougars','barangay_id'=>2],
            ['name'=>'Camp JMC','barangay_id'=>2],
            ['name'=>'Waling-waling','barangay_id'=>2],
            ['name'=>'Catleya','barangay_id'=>2],
            ['name'=>'Sampaguita','barangay_id'=>2],
            ['name'=>'Purok 5 - Pulog','barangay_id'=>22],
            ['name'=>'Purok 9 - St. Joseph','barangay_id'=>19],
            ['name'=>'Purok 7 - PCH 2','barangay_id'=>22],
            ['name'=>'Zone 2','barangay_id'=>5],
            ['name'=>'Purok 8 - Artajo Village','barangay_id'=>3],
            ['name'=>'Purok 1','barangay_id'=>11],
            ['name'=>'Purok 2','barangay_id'=>11],
            ['name'=>'Purok 3','barangay_id'=>11],
            ['name'=>'Purok 4','barangay_id'=>11],
            ['name'=>'Purok 5','barangay_id'=>11],
            ['name'=>'Purok 1','barangay_id'=>8],
            ['name'=>'Purok 2','barangay_id'=>8],
            ['name'=>'Purok 3','barangay_id'=>8],
            ['name'=>'Purok 4','barangay_id'=>8],
            ['name'=>'Purok 5','barangay_id'=>8],
            ['name'=>'Purok 1','barangay_id'=>7],
            ['name'=>'Purok 1A','barangay_id'=>7],
            ['name'=>'Purok 2','barangay_id'=>7],
            ['name'=>'Purok 2A','barangay_id'=>7],
            ['name'=>'Purok 3','barangay_id'=>7],
            ['name'=>'Purok 4-Proper','barangay_id'=>7],
            ['name'=>'Purok 4-Vega','barangay_id'=>7],
            ['name'=>'Purok 5','barangay_id'=>7],
            ['name'=>'Purok 6','barangay_id'=>7],
            ['name'=>'Purok 7','barangay_id'=>7],
            ['name'=>'Purok 1','barangay_id'=>4],
            ['name'=>'Purok 2','barangay_id'=>4],
            ['name'=>'Purok 3','barangay_id'=>4],
            ['name'=>'Zone 1','barangay_id'=>5],
            ['name'=>'Zone 3','barangay_id'=>5],
            ['name'=>'Zone 4','barangay_id'=>5],
            ['name'=>'Zone 5-Sitio Zigzag','barangay_id'=>5],
            ['name'=>'Zone 6- Sitio Manlaras','barangay_id'=>5],
            ['name'=>'Zone 7- Sitio Sagpang','barangay_id'=>5],
            ['name'=>'Zone 8- Sitio Impakibel','barangay_id'=>5],
            ['name'=>'Zone 9- Sitio Palaopao','barangay_id'=>5],
            ['name'=>'Zone 10- Sitio Malambago','barangay_id'=>5],
            ['name'=>'Zone 1','barangay_id'=>9],
            ['name'=>'Zone 2','barangay_id'=>9],
            ['name'=>'Zone 3','barangay_id'=>9],
            ['name'=>'Zone 4-Upper Gabok','barangay_id'=>9],
            ['name'=>'Zone 5','barangay_id'=>9],
            ['name'=>'Zone 6','barangay_id'=>9],
            ['name'=>'Zone 7','barangay_id'=>9],
            ['name'=>'Zone 8 Bliss','barangay_id'=>9],
            ['name'=>'Zone 9','barangay_id'=>9],
            ['name'=>'Zone 10 Lower Gabok','barangay_id'=>9],
            ['name'=>'Zone 11','barangay_id'=>9],
            ['name'=>'Zone 8-Paglaum Village','barangay_id'=>13],
            ['name'=>'Zone 7','barangay_id'=>13],
            ['name'=>'Zone 4-Mapait','barangay_id'=>1],
            ['name'=>'Zone 4','barangay_id'=>20],
            ['name'=>'Zone 5-New Sankanan','barangay_id'=>20],
            ['name'=>'Zone 1','barangay_id'=>10],
            ['name'=>'Zone 3','barangay_id'=>10],
            ['name'=>'Zone 7','barangay_id'=>3],
            ['name'=>'Zone 2','barangay_id'=>10],
            ['name'=>'Zone 3','barangay_id'=>15],
            ['name'=>'Zone 4A','barangay_id'=>15],
            ['name'=>'Purok 13','barangay_id'=>6],
            ['name'=>'Purok 16 -Belen Executive Homes','barangay_id'=>6],
            ['name'=>'Purok 14 - PCH 1 Upper','barangay_id'=>6],
            ['name'=>'Zone 4','barangay_id'=>3],
            ['name'=>'Purok 3 - Lower Calanawan','barangay_id'=>19],
            ['name'=>'Zone 3','barangay_id'=>1],
            ['name'=>'purok - 4','barangay_id'=>14],
            ['name'=>'PUROK - 1','barangay_id'=>14],
            ['name'=>'PUROK - 2','barangay_id'=>14],
            ['name'=>'PUROK - 3','barangay_id'=>14],
            ['name'=>'Zone 5','barangay_id'=>3],
            ['name'=>'Zone 6','barangay_id'=>3],
            ['name'=>'Zone 1','barangay_id'=>13],
            ['name'=>'Zone 2','barangay_id'=>13],
            ['name'=>'Zone 3','barangay_id'=>13],
            ['name'=>'Zone 4','barangay_id'=>13],
            ['name'=>'Zone 5','barangay_id'=>13],
            ['name'=>'Zone 6','barangay_id'=>13],
            ['name'=>'Zone 9-Sitio Sabangan','barangay_id'=>13],
            ['name'=>'Zone 10-Sitio Abyawan','barangay_id'=>13],
            ['name'=>'Zone 11-Sitio Uba','barangay_id'=>13],
            ['name'=>'Zone 12-Sitio Pag-asa','barangay_id'=>13],
            ['name'=>'Zone 13-Sitio Angeles','barangay_id'=>13],
            ['name'=>'Zone 14-Sitio Diamante','barangay_id'=>13],
            ['name'=>'Zone 15-Sitio Mangima','barangay_id'=>13],
            ['name'=>'Purok 1 -Miranda','barangay_id'=>6],
            ['name'=>'Purok 3 -Miranda','barangay_id'=>6],
            ['name'=>'Purok 4 -Miranda','barangay_id'=>6],
            ['name'=>'Purok 5 -Josephine Homes','barangay_id'=>6],
            ['name'=>'Purok 6','barangay_id'=>6],
            ['name'=>'Purok 7','barangay_id'=>6],
            ['name'=>'Purok 8 -DEARBC','barangay_id'=>6],
            ['name'=>'Purok 9 -Centro','barangay_id'=>6],
            ['name'=>'Purok 11','barangay_id'=>6],
            ['name'=>'Purok 12','barangay_id'=>6],
            ['name'=>'Purok 15 -PCH 1','barangay_id'=>6],
            ['name'=>'Purok 17 -MENZI','barangay_id'=>6],
            ['name'=>'Purok 18 -MENZI','barangay_id'=>6],
            ['name'=>'Zone 1','barangay_id'=>1],
            ['name'=>'Zone 2','barangay_id'=>1],
            ['name'=>'Zone 1','barangay_id'=>16],
            ['name'=>'Zone 2','barangay_id'=>16],
            ['name'=>'Zone 3','barangay_id'=>16],
            ['name'=>'Zone 4 -Lower Guilang-guilang','barangay_id'=>16],
            ['name'=>'Zone 5 -Upper Guilang-guilang','barangay_id'=>16],
            ['name'=>'Zone 6 -Sitio Consolacion','barangay_id'=>16],
            ['name'=>'Zone 7 -Sitio Kihan-ay','barangay_id'=>16],
            ['name'=>'Zone 1','barangay_id'=>15],
            ['name'=>'Zone 2A','barangay_id'=>15],
            ['name'=>'Zone 2B','barangay_id'=>15],
            ['name'=>'Zone 5A -Monega','barangay_id'=>15],
            ['name'=>'Zone 5B -Balakbakan','barangay_id'=>15],
            ['name'=>'Zone 9 -Sitio Bagalangit','barangay_id'=>15],
            ['name'=>'Zone 10-Sitio Kibulawan','barangay_id'=>15],
            ['name'=>'Zone 4 -Pulog','barangay_id'=>10],
            ['name'=>'Zone 5 -San Isidro','barangay_id'=>10],
            ['name'=>'Purok 2 -Miranda','barangay_id'=>6],
            ['name'=>'Zone 6 -Kitam-is','barangay_id'=>10],
            ['name'=>'Zone 7 -Awol','barangay_id'=>10],
            ['name'=>'Zone 8 -Salvan','barangay_id'=>10],
            ['name'=>'Zone 9 -Cebucawan','barangay_id'=>10],
            ['name'=>'Zone 10 -Cala????ugan','barangay_id'=>10],
            ['name'=>'Zone 10 -Cala????ugan','barangay_id'=>10],
            ['name'=>'Zone 1','barangay_id'=>18],
            ['name'=>'Zone 2','barangay_id'=>18],
            ['name'=>'Zone 3','barangay_id'=>18],
            ['name'=>'Zone 4','barangay_id'=>18],
            ['name'=>'Zone 1','barangay_id'=>21],
            ['name'=>'Zone 2','barangay_id'=>21],
            ['name'=>'Zone 3','barangay_id'=>21],
            ['name'=>'Zone 4 -Bugna','barangay_id'=>21],
            ['name'=>'Zone 1a','barangay_id'=>22],
            ['name'=>'Zone 1b','barangay_id'=>22],
            ['name'=>'Zone 2a','barangay_id'=>22],
            ['name'=>'Zone 2b','barangay_id'=>22],
            ['name'=>'Zone 3','barangay_id'=>22],
            ['name'=>'Zone 4 -Tulay','barangay_id'=>22],
            ['name'=>'Zone 6','barangay_id'=>22],
            ['name'=>'Zone 1','barangay_id'=>20],
            ['name'=>'Zone 2','barangay_id'=>20],
            ['name'=>'Zone 3','barangay_id'=>20],
            ['name'=>'Zone 6','barangay_id'=>20],
            ['name'=>'Zone 7 -Gauron','barangay_id'=>20],
            ['name'=>'Zone 8 -Maralum','barangay_id'=>20],
            ['name'=>'Zone 1','barangay_id'=>17],
            ['name'=>'Zone 2','barangay_id'=>17],
            ['name'=>'Zone 3','barangay_id'=>17],
            ['name'=>'Zone 4','barangay_id'=>17],
            ['name'=>'Zone 5','barangay_id'=>17],
            ['name'=>'Zone 6 -Katablaran','barangay_id'=>17],
            ['name'=>'Purok 4 -Upper Calanawan','barangay_id'=>19],
            ['name'=>'Purok 5 -Proper Calanawan','barangay_id'=>19],
            ['name'=>'Purok 6 -Mulberry','barangay_id'=>19],
            ['name'=>'Purok 7 -Lower Sosohon','barangay_id'=>19],
            ['name'=>'Purok 8 -Upper Sosohon','barangay_id'=>19],
            ['name'=>'Purok 10 -Lower Pol-oton','barangay_id'=>19],
            ['name'=>'Purok 11 -Upper Pol-oton','barangay_id'=>19],
            ['name'=>'Purok 12 -Kihare','barangay_id'=>19],
            ['name'=>'Purok 13 -Sitio Tumampong','barangay_id'=>19],
            ['name'=>'Zone 1','barangay_id'=>12],
            ['name'=>'Zone 2','barangay_id'=>12],
            ['name'=>'Zone 3','barangay_id'=>12],
            ['name'=>'Zone 4 -Lower Bunga','barangay_id'=>12],
        ];
        foreach ($zones as $zone){

            DB::table('zones')->insert([
                'name' => $zone['name'],
                'barangay_id' => $zone['barangay_id'],
            ]);
        }
    }
}
