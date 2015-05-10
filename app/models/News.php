<?php

namespace App\Model;

use Eloquent;
class News extends Eloquent {
    public function rubrique()
    {
        return $this->belongsTo('Rubrique');
    }

    public function image()
    {
        return $this->belongsTo('Image');
    }

    public function motcles()
    {
        return $this->belongsToMany('Motcle', 'news_motcle');
    }
}
