<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 10/02/2018
 * Time: 20:02
 */

namespace app\models\usuario;


use yii\base\Model;

class UsuarioValidator extends Model
{
    public $id_categoria;
    public $nomeu;
    public $data_nascimento;

    public function rules()
    {
        return [
            ['nomeu', 'required', 'message' => 'Nome é obrigatório'],
            ['id_categoria', 'required', 'message' => 'Categoria é obrigatório'],
            ['data_nascimento', 'required', 'message' => 'Data de nascimento é obrigatório'],
            ['nomeu', 'unique', 'targetClass' => 'app\models\usuario\Usuario', 'message' => 'Usuário com este nome já está cadastrado.'],
        ];
    }
}