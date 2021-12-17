<?php

namespace App;

/* O que deve ser feito no banco de dados */

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
}

