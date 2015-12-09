<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
        'nome',
        'fone',
        'DtNascimento',
        'TipoProcesso',
        'LocalPasta',
        'StatusProcesso',
        'email',
        'NProc',
        'Comarca',
        'Vara',
        'Autor_reu',
        'cpf',
        'filiacao',
        'PastaVirtual',
        'Qualificacao',
        'Qualific_Contraria',
        'Andamento',
        'finalizado'
    ];

    public function protocolos()
    {
       return $this->hasMany('\App\protocolos','cod_cli','id');
    }

    public function contratos()
    {
        return $this->hasMany('\App\contratos','cod_cli','id');
    }


}
