<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 15:38
 */

use yii\widgets\ActiveForm;

?>

<section class="container">
    <?php if(isset($categorias) && $categorias != null): ?>
    <h1 class="centralizar-texto">Categorias</h1>
    <?php if(isset($alterado)): ?>
    <div class="alert alert-success">
        <p><?= $alterado ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td>
                    <?= $categoria->nomec ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="/categoria/alterar/<?= $categoria->id ?>">Alterar</a>
                    <button class="hidden">
                        <form method="get" action="/categoria/excluir/<?= $categoria->id ?>">
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p class="alert alert-danger centralizar-texto">Não possui categorias no sistema!</p>
    <?php endif; ?>
</section>
