<?php

class RubriqueTableSeeder extends Seeder {
    public function run()
    {
        DB::table('rubriques')->delete();

        $records = [
            ['Site', 'site.png'],
            ['Découverte', 'decouverte.png']
        ];
        //die(var_dump($records));
        for($i = 0; $i < count($records); $i++) {
            $image = Image::where('url', '=', $records[$i][1])
                ->select('id')->first();

            Rubrique::create(array('nom' => $records[$i][0], 'image_id' => $image->id));
        }


/*

        $id = Image::where('url', '=', 'site.png')
            ->select('id')->first();

        Image::create(array('nom' => 'Découverte', 'image_id' => '2'));
        */
    }
}