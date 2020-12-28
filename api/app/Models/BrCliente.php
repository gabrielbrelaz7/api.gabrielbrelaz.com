<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BrCliente
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $imagem_destaque
 * @property string|null $logotipo
 * @property string|null $descricao
 * 
 * @property Collection|BrDevapp[] $br_devapps
 * @property Collection|BrDevweb[] $br_devwebs
 * @property Collection|BrWebdesign[] $br_webdesigns
 *
 * @package App\Models
 */
class BrCliente extends Model
{
	protected $table = 'br_clientes';
	public $timestamps = false;

	protected $fillable = [
		'nome',
		'imagem_destaque',
		'logotipo',
		'descricao'
	];

	public function br_devapps()
	{
		return $this->hasMany(BrDevapp::class, 'id_cliente');
	}

	public function br_devwebs()
	{
		return $this->hasMany(BrDevweb::class, 'id_cliente');
	}

	public function br_webdesigns()
	{
		return $this->hasMany(BrWebdesign::class, 'id_cliente');
	}
}
