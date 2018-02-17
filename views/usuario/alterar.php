<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 15/02/2018
 * Time: 18:00
 */

use yii\widgets\ActiveForm;

?>

<section class="container">
    <h1 class="centralizar-texto">Alterar Usuário</h1>
    <?php $form = ActiveForm::begin() ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'nomeu')->label('Nome')->textInput(['value' => $usuario->nomeu]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'data_nascimento')->label('Data de nascimento')->input('date', ['value' => $usuario->data_nascimento]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'id_categoria')->label('Categoria')->dropDownList(
                    $categorias,
                    ['prompt' => 'Selecione', 'value' => $usuario->id_categoria]
            ) ?>
        </div>
    </div>
    <button class="btn btn-primary">Alterar</button>
    <?php ActiveForm::end() ?>

    <a href="/usuario/listar" class="btn btn-danger">Cancelar</a>
</section>
