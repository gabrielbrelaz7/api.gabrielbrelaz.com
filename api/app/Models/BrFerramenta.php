<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BrFerramenta
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $imagem
 *
 * @package App\Models
 */
class BrFerramenta extends Model
{
	protected $table = 'br_ferramentas';
	public $timestamps = false;

	protected $fillable = [
		'nome',
		'imagem'
	];
}
