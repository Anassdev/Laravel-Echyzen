<?php

namespace  App\Repositories;

use  App\Model\Rubrique;

class RubriqueRepository implements IRubriqueRepository {


    public function all()
    {
        return Rubrique::all();
    }

}