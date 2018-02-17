<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 12:52
 */

namespace app\models\usuario;


use yii\db\ActiveRecord;

class Usuario extends ActiveRecord
{
    public static function tableName()
    {
        return 'usuarios';
    }

    public function getCategorias(){
        return $this->hasOne('app\models\categoria\Categoria', ['id' => 'id_categoria']);
    }
}