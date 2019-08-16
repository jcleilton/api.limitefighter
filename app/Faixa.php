<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
    protected $fillable = array('id','codigo_interno','cor','descricao');
}
