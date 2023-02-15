<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        DB::table('recipes')->insert([
            'name' => 'サラダチキン',
            'comment' => 'パサつかない柔らかいサラダチキンができました。',
            'process' => '1.鶏肉に砂糖をまぶして15分放置。2.1Lの水に40gの塩を溶かして、鶏肉を半日つける。3.鶏肉をジップロックに入れて沸騰したお湯に1分入れ、その後火を消して90分放置。',
            'image_path' => '画像データ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
