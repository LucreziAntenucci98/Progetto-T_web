<?php

namespace App\Models\Resources;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
    protected $table='categoria';
    protected $primaryKey='catId';
    public $timestamps=false;
}

