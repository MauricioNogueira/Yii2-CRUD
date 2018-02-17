<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 12:45
 */

namespace app\models\categoria;


use yii\db\ActiveRecord;

class Categoria extends ActiveRecord
{
    public static function tableName()
    {
        return 'categorias';
    }
}