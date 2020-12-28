<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BrServico
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $imagem_destaque
 * @property string|null $descricao
 *
 * @package App\Models
 */
class BrServico extends Model
{
	protected $table = 'br_servicos';
	public $timestamps = false;

	protected $fillable = [
		'nome',
		'imagem_destaque',
		'descricao'
	];
}
