<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dominios extends Model
{
    //
    protected $table = 'dominios';

    public function paginas()
    {
        return $this->hasMany('App\Paginas');
    }
}
