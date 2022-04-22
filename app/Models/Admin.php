<?php

namespace App\Models;
use App\Models\Resources\Categoria;
use App\Models\Resources\Prodotto;

class Admin {

    public function getProdsCats() {
        return Categoria::where('parId','!=',0)->get();
    }

}

