<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 13:52
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<section class="container">
<h1 class="centralizar-texto">Cadastrar Categoria</h1>
    <?php if(isset($salvo)): ?>
    <div class="alert alert-success">
        <p><?= Html::encode($salvo) ?></p>
    </div>
    <?php endif; ?>

    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($categoria, 'nomec')->label("Nome") ?>
    <button class="btn btn-primary">Salvar</button>
    <?php ActiveForm::end() ?>
</section>
