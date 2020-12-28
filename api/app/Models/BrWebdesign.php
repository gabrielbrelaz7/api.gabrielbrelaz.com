<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BrWebdesign
 * 
 * @property int $id
 * @property string|null $servico
 * @property string|null $ferramenta
 * @property string|null $tecnologia
 * @property string|null $imagem1
 * @property string|null $imagem2
 * @property string|null $imagem3
 * @property string|null $imagem4
 * @property string|null $imagem5
 * @property string|null $imagem6
 * @property string|null $link1
 * @property string|null $link2
 * @property string|null $link3
 * @property int|null $id_projeto
 * @property int|null $id_cliente
 * 
 * @property BrCliente|null $br_cliente
 * @property BrProjeto|null $br_projeto
 *
 * @package App\Models
 */
class BrWebdesign extends Model
{
	protected $table = 'br_webdesign';
	public $timestamps = false;

	protected $casts = [
		'id_projeto' => 'int',
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'servico',
		'ferramenta',
		'tecnologia',
		'imagem1',
		'imagem2',
		'imagem3',
		'imagem4',
		'imagem5',
		'imagem6',
		'link1',
		'link2',
		'link3',
		'id_projeto',
		'id_cliente'
	];

	public function br_cliente()
	{
		return $this->belongsTo(BrCliente::class, 'id_cliente');
	}

	public function br_projeto()
	{
		return $this->belongsTo(BrProjeto::class, 'id_projeto');
	}
}
