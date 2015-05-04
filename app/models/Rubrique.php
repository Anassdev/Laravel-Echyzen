<?php

class Rubrique extends Eloquent {
    public function image()
    {
        return $this->belongsTo('Image');
    }
}
