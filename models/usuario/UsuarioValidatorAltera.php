<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 15/02/2018
 * Time: 19:44
 */

namespace app\models\usuario;


use yii\base\Model;

class UsuarioValidatorAltera extends Model
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
        ];
    }
}