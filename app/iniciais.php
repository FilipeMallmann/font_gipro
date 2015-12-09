<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iniciais extends Model
{
    //
    protected $fillable = [
      'Referencia',
      'Corpo',
      'Pedidos',
      'Tipo',
      'Titulo'

    ];
}
