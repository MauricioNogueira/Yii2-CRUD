<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 16:07
 */

use yii\widgets\ActiveForm;

?>

<section class="container">
    <h1 class="centralizar-texto">Alterar</h1>
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'nomec')->label('Nome')->textInput(['value' => $categoria->nomec]) ?>
    <button class="btn btn-primary">Alterar</button>
    <?php ActiveForm::end() ?>
</section>