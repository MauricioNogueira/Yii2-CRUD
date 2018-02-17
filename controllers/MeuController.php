<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 13:50
 */

namespace app\controllers;


use yii\web\Controller;

class MeuController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}