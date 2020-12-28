<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BrTecnologia
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $imagem
 *
 * @package App\Models
 */
class BrTecnologia extends Model
{
	protected $table = 'br_tecnologias';
	public $timestamps = false;

	protected $fillable = [
		'nome',
		'imagem'
	];
}
