<?php

class NewsMotCleTableSeeder extends Seeder {
    public function run()
    {
        DB::table('news_motcle')->delete();

        $news = News::orderBy('id')->get(array('id'));

        $motcles = MotCle::orderBy('id')->get(array('id'));


        DB::table('news_motcle')->insert(array(
            'news_id' => $news[0]->id,
            'motcle_id' => $motcles[0]->id
        ));

        DB::table('news_motcle')->insert(array(
            'news_id' => $news[0]->id,
            'motcle_id' => $motcles[4]->id
        ));

        DB::table('news_motcle')->insert(array(
            'news_id' => $news[3]->id,
            'motcle_id' => $motcles[1]->id
        ));

        DB::table('news_motcle')->insert(array(
            'news_id' => $news[2]->id,
            'motcle_id' => $motcles[2]->id
        ));
    }
}