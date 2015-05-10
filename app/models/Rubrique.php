<?php
namespace App\Model;

use Eloquent;

class Rubrique extends Eloquent {
    public function image()
    {
        return $this->belongsTo('Image');
    }
}
