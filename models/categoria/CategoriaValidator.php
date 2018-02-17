<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 13:19
 */

namespace app\models\categoria;


use yii\base\Model;

class CategoriaValidator extends Model
{
    public $nomec;

    public function rules()
    {
        return [
            ['nomec', 'required', 'message' => 'Campo obrigatório'],
            ['nomec', 'unique', 'targetClass' => 'app\models\categoria\Categoria', 'message' => 'Nome já está cadastrado']
        ];
    }
}