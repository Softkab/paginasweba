<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
    //
    protected $table = 'paginas';

    public function Dominios()
    {
        return $this->belongsTo('App\Dominios');
    }
}
