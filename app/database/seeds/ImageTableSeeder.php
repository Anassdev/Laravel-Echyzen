<?php

class ImageTableSeeder extends Seeder {
    public function run()
    {
        DB::table('images')->delete();

        //rubriques
        Image::create(array('url' => 'site.png', 'alt' => 'Rubrique site'));
        Image::create(array('url' => 'decouverte.png', 'alt' => 'Rubrique découverte'));

        //news
        Image::create(array('url' => '1.png', 'alt' => 'logo echyzen'));
        Image::create(array('url' => '2.jpeg', 'alt' => 'news navigateur/rendu'));
        Image::create(array('url' => '3.png', 'alt' => 'logo news'));
        Image::create(array('url' => '4.png', 'alt' => 'logo news'));


    }
}