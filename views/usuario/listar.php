<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 15/02/2018
 * Time: 02:09
 */
?>

<section class="container">
    <?php if(isset($usuarios) && $usuarios != null): ?>
        <h1 class="centralizar-texto">Usuários</h1>
        <?php if(isset($_GET['alterado']) && $_GET['alterado'] != null): ?>
            <p class="alert alert-success">Usuário alterado com sucesso</p>
        <?php endif; ?>
        <?php if(isset($_GET['ok']) && $_GET['ok'] != null): ?>
            <p class="alert alert-success">Usuário excluído com sucesso!</p>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Data de nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $usuario->nomeu ?></td>
                            <td><?= $usuario->categorias->nomec ?></td>
                            <td><?= $usuario->data_nascimento ?></td>
                            <td>
                                <button style="display: none;">
                                    <form method="get" action="/usuario/excluir/<?= $usuario->id ?>">
                                        <button class="btn btn-danger">Excluir</button>
                                    </form>
                                </button>
                                <a href="/usuario/alterar/<?= $usuario->id ?>" class="btn btn-warning">Alterar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="alert alert-danger centralizar-texto">
            Não possui usuários no sistema!
        </p>
    <?php endif; ?>

</section>
