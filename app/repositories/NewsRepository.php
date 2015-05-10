<?php

namespace  App\Repositories;

use  App\Model\News;

class NewsRepository implements INewsRepository {


    public function all()
    {
        return News::join('images as nImage', 'nImage.id', '=', 'news.image_id')
        ->join('rubriques', 'rubriques.id', '=', 'news.rubrique_id')
        ->join('images as rImage', 'rImage.id', '=', 'rubriques.image_id')
        ->with('motcles')
        ->orderBy('news.created_at')->where('publication','=',1)
        ->select('nImage.alt as nAlt', 'nImage.url as nUrl',
            'rImage.alt as rAlt', 'rImage.url as rUrl',
            'news.id', 'news.intro', 'news.titre', 'news.contenu', 'news.created_at', 'news.updated_at'
        )
        ->get();
    }

}