<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contratos extends Model
{
    //
    protected $fillable = [
        'cod_cli',
        'Descricao',
        'origem',
        'Encaminhado',
        'Encaminhado_para',
        'Finalizado',
        'Finalizado_como',
        'data_finalizado',
        'Valor_Total'
    ];

    public function cliente()
    {
        return $this->belongsTo('\App\clientes','cod_cli','id', 'contratos');
    }
}
