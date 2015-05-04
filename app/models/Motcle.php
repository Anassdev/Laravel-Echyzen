<?php

class Motcle extends Eloquent {
    public function news()
    {
        return $this->belongsToMany('News');
    }
}
