<?php

class News extends Eloquent {
    public function rubrique()
    {
        return $this->belongsTo('Rubrique');
    }

    public function image()
    {
        return $this->belongsTo('Image');
    }
}
