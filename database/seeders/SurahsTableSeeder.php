<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File; // Add this line to import the File class

class SurahsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surahs')->delete();
        $json = File::get("database/data/quran-surah.json");
        $data = json_decode($json);
        foreach($data->data as $obj){
            DB::table('surahs')->insert(array(
                'id' => $obj->id,
                'arabic' => $obj->arabic,
                'latin' => $obj->latin,
                'transliteration' => $obj->transliteration,
                'translation' => $obj->translation,
                'num_ayah' => $obj->num_ayah,
                'page' => $obj->page,
                'location' => $obj->location
            ));
        }
    }
}
