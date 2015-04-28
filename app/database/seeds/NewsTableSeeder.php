<?php

class NewsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('news')->delete();

        $rubrique = Rubrique::orderBy('id')->get(array('id'));
        /*
        *  die($rubrique[0]->id . ' : ' . $rubrique[0]->nom . '\n'
        *    . $rubrique[1]->id . ' : ' . $rubrique[1]->nom
        *  );
        */
        $image = Image::orderBy('id')->get(array('id'));

         News::create(array(
             'image_id' => $image[2]->id,
             'rubrique_id' => $rubrique[0]->id,
             'publication' => '1',
             'titre' => 'Ouverture du Site!!!',
             'contenu' => "Le news qui dépote... un lorem ipsum :
             On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).",
             'created_at' => '1430129709'
         ));

        News::create(array('intro' => 'Ceci est l\'introduction :D enjoy',
             'image_id' => $image[3]->id,
             'rubrique_id' => $rubrique[0]->id,
             'publication' => '1',
             'titre' => 'Les navigateurs et leur rendus',
             'contenu' => "[b]Le[/b] Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant [url=http://localhost/Symfony/web/app_dev.php/news/]Titre du lien[/url]impression.
         [url]http://localhost/Laravel/public/[/url]
         Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.

         Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
         Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
         Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
         Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
         Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.",
             'created_at' => '1430129793'
         ));

         News::create(array(
             'image_id' => $image[4]->id,
             'rubrique_id' => $rubrique[1]->id,
             'publication' => '1',
             'titre' => 'BlahBlah',
             'contenu' => 'This is [an example](http://example.com/ "Title") inline link.
             # This is an H1 #
             <gras>ceci est en <gras>gras</gras> dgrdgr rg rrss </gras>
             <gras>Encore du gras!!!</gras>Mais pas ici ok?<gras>Ceci est aussi en gras</gras>',
             'created_at' => '1430129809'
         ));

         News::create(array(
             'image_id' => $image[5]->id,
             'rubrique_id' => $rubrique[1]->id,
             'publication' => '1',
             'titre' => 'News mois suivant',
             'contenu' => 'Le contenu',
             'created_at' => '1430561703'
         ));


    }
}