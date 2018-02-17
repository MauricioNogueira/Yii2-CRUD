<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 10/02/2018
 * Time: 19:05
 */

use yii\widgets\ActiveForm;

?>

<section class="container">
    <h1 class="centralizar-texto">Cadastrar Usuário</h1>
    <?php if(isset($ok)): ?>
        <p class="alert alert-success">Usuário salvo com sucesso</p>
    <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($validatorUsuario, 'nomeu')->label('Nome') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($validatorUsuario, 'data_nascimento')->label('Data de nascimento')->input('date') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($validatorUsuario, 'id_categoria')->label('Categoria')->dropDownList($categorias, ['prompt' => 'Selecione']) ?>
        </div>
    </div>
    <button class="btn btn-primary">Cadastrar</button>
    <?php ActiveForm::end() ?>
</section>
