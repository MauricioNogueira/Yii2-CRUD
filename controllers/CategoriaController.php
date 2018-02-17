<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 13:55
 */

namespace app\controllers;

use app\models\categoria\Categoria;
use app\models\categoria\CategoriaValidator;
use yii\web\Controller;

class CategoriaController extends Controller
{
    public function actionCadastrar(){
        $validator = new CategoriaValidator();

        if($validator->load(\Yii::$app->request->post()) && $validator->validate()){
            $categoria = new Categoria();
            $categoria->nomec = $validator->nomec;
            $categoria->save();
            $validator = new CategoriaValidator();

            return $this->render('cadastrar', ['salvo' => 'Categoria '.$categoria->nomec.' salvo com sucesso', 'categoria' => $validator]);

        }else{
            return $this->render('cadastrar', ['categoria' => $validator]);
        }
    }
//ENEM: 171011840989
    public function actionListar(){
        $categorias = Categoria::find()->all();
        return $this->render('listar', ['categorias' => $categorias]);
    }

    public function actionAlterar($id){
        $model = new CategoriaValidator();
        $categoria = Categoria::findOne($id);

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $categoria->nomec = $model->nomec;
            $categoria->save();

            return $this->redirect(['listar']);
        }else{
            return $this->render('alterar', ['model' => $model, 'categoria' => $categoria]);
        }
    }

    public function actionExcluir($id){
        $categoria = Categoria::findOne($id);

        $categoria->delete();

        return $this->redirect(['/categoria/listar']);
    }
}