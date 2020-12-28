<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BrProjeto
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $imagem_destaque
 * @property string|null $logotipo
 * @property string|null $descricao
 * 
 * @property Collection|BrDevapp[] $br_devapps
 * @property Collection|BrDevweb[] $br_devwebs
 * @property Collection|BrProjeto[] $br_projetos
 * @property Collection|BrWebdesign[] $br_webdesigns
 *
 * @package App\Models
 */
class BrProjeto extends Model
{
	protected $table = 'br_projetos';
	public $timestamps = false;

	protected $fillable = [
		'nome',
		'imagem_destaque',
		'logotipo',
		'descricao'
	];

	public function br_devapps()
	{
		return $this->hasMany(BrDevapp::class, 'id_projeto');
	}

	public function br_devwebs()
	{
		return $this->hasMany(BrDevweb::class, 'id_projeto');
	}

	public function br_projetos()
	{
		return $this->hasMany(BrProjeto::class, 'id_projeto');
	}

	public function br_webdesigns()
	{
		return $this->hasMany(BrWebdesign::class, 'id_projeto');
	}
}
