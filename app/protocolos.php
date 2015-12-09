<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class protocolos extends Model
{
    //
    protected $fillable = [
        'cod_cli',
        'Tipo',
        'Docs'
    ];

    public function cliente()
    {
      return $this->belongsTo('\App\clientes','cod_cli','id','protocolos');
    }
}
