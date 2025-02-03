<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File; // Add this line to import the File class

class AyahsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ayahs')->delete();
        for ($i=1;$i<=114;$i++) {
            if ($i <=9 ) {
                $fileJson = "database/daftar/surah-0{$i}.json";
            }
            else {
                $fileJson = "database/daftar/surah-{$i}.json";
            }
            $json = File::get($fileJson);
            $daftar = json_decode($json);
            foreach($daftar->data as $obj){
                DB::table('ayahs')->insert(array(
                    'surah_id' => $obj->surah_id,
                    'ayah' => $obj->ayah,
                    'page' => $obj->page,
                    'juz' => $obj->juz,
                    'arabic' => $obj->arabic,
                    'kitabah' => $obj->kitabah,
                    'latin' => $obj->latin,
                    'translation' => $obj->translation
                ));
            }
        }
    }
}