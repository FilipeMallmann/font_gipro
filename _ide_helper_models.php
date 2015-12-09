<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\clientes
 *
 * @property integer $id
 * @property string $nome
 * @property string $fone
 * @property string $DtNascimento
 * @property string $TipoProcesso
 * @property string $LocalPasta
 * @property string $StatusProcesso
 * @property string $email
 * @property string $NProc
 * @property string $Comarca
 * @property string $Vara
 * @property string $Autor_reu
 * @property string $cpf
 * @property string $filiacao
 * @property string $PastaVirtual
 * @property string $Qualificacao
 * @property string $Qualific_Contraria
 * @property string $Andamento
 * @property string $finalizado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\protocolos[] $protocolos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\contratos[] $contratos
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereNome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereFone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereDtNascimento($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereTipoProcesso($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereLocalPasta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereStatusProcesso($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereNProc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereComarca($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereVara($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereAutorReu($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereCpf($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereFiliacao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes wherePastaVirtual($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereQualificacao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereQualificContraria($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereAndamento($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereFinalizado($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\clientes whereUpdatedAt($value)
 */
	class clientes {}
}

namespace App{
/**
 * App\contratos
 *
 * @property integer $id
 * @property integer $cod_cli
 * @property string $Descricao
 * @property string $origem
 * @property boolean $Encaminhado
 * @property string $Encaminhado_para
 * @property boolean $Finalizado
 * @property string $Finalizado_como
 * @property string $data_finalizado
 * @property string $Valor_Total
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\clientes $cliente
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereCodCli($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereDescricao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereOrigem($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereEncaminhado($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereEncaminhadoPara($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereFinalizado($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereFinalizadoComo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereDataFinalizado($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereValorTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\contratos whereUpdatedAt($value)
 */
	class contratos {}
}

namespace App{
/**
 * App\iniciais
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $Referencia
 * @property string $Corpo
 * @property string $Pedidos
 * @method static \Illuminate\Database\Query\Builder|\App\iniciais whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\iniciais whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\iniciais whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\iniciais whereReferencia($value)
 * @method static \Illuminate\Database\Query\Builder|\App\iniciais whereCorpo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\iniciais wherePedidos($value)
 */
	class iniciais {}
}

namespace App{
/**
 * App\protocolos
 *
 * @property integer $id
 * @property integer $cod_cli
 * @property string $Tipo
 * @property string $Docs
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\clientes $cliente
 * @method static \Illuminate\Database\Query\Builder|\App\protocolos whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\protocolos whereCodCli($value)
 * @method static \Illuminate\Database\Query\Builder|\App\protocolos whereTipo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\protocolos whereDocs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\protocolos whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\protocolos whereUpdatedAt($value)
 */
	class protocolos {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $administracao
 * @property string $contratos
 * @property string $peticao
 * @property string $arquivos
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAdministracao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereContratos($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePeticao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereArquivos($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User {}
}

