<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 10/02/2018
 * Time: 19:07
 */

namespace app\controllers;


use app\models\categoria\Categoria;
use app\models\usuario\Usuario;
use app\models\usuario\UsuarioValidator;
use app\models\usuario\UsuarioValidatorAltera;
use yii\web\Controller;

class UsuarioController extends Controller
{
    public function actionCadastrar(){
        $validatorUsuario = new UsuarioValidator();
        $categorias = Categoria::find()->all();

        $listaCategorias = array();

        foreach ($categorias as $cat){
            $listaCategorias[$cat['id']] = $cat['nomec'];
        }

        if($validatorUsuario->load(\Yii::$app->request->post()) && $validatorUsuario->validate()){
            $usuario = new Usuario();
            $usuario->nomeu = $validatorUsuario->nomeu;
            $usuario->id_categoria = $validatorUsuario->id_categoria;
            $usuario->data_nascimento = $validatorUsuario->data_nascimento;

            $usuario->save();
            $validatorUsuario = new UsuarioValidator();

            return $this->render('cadastrar', ['validatorUsuario' => $validatorUsuario, 'categorias' => $listaCategorias, 'ok' => 'salvo']);
        }


        return $this->render('cadastrar', ['validatorUsuario' => $validatorUsuario, 'categorias' => $listaCategorias]);
    }

    public function actionListar(){
        $usuarios = Usuario::find()->joinWith('categorias', true, 'INNER JOIN')->orderBy('nomeu')->all();

        return $this->render('listar', ['usuarios' => $usuarios]);
    }

    public function actionExcluir($id){
        $usuario = Usuario::findOne($id);
        $usuario->delete();

        $this->redirect(['/usuario/listar', 'ok' => 'sucesso']);
    }

    public function actionAlterar($id){
        $usuario = Usuario::findOne($id);
        $validatorUsuario = new UsuarioValidatorAltera();
        $lista = Categoria::find()->all();
        $categorias = array();

        foreach ($lista as $cat){
            $categorias[$cat['id']] = $cat['nomec'];
        }

        if($validatorUsuario->load(\Yii::$app->request->post()) && $validatorUsuario->validate()){
            $usuario->nomeu = $validatorUsuario->nomeu;
            $usuario->data_nascimento = $validatorUsuario->data_nascimento;
            $usuario->id_categoria = $validatorUsuario->id_categoria;

            $usuario->save();
            return $this->redirect(['/usuario/listar', 'alterado' => 'ok']);
        }

        return $this->render('alterar', ['model' => $validatorUsuario, 'usuario' => $usuario, 'categorias' => $categorias]);
    }
}