<?php
/**
 * Created by PhpStorm.
 * User: Maurício Nogueira
 * Date: 23/01/2018
 * Time: 13:25
 */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php NavBar::begin([
    'brandLabel' => 'Home',
    'options' => ['class' => 'navbar-inverse']
]);

echo Nav::widget([
    'items' => [
        ['label' => 'Cadastrar', 'items' => [['label' => 'Categoria', 'url' => ['/categoria/cadastrar']],
        ['label' => 'Usuário', 'url' => ['/usuario/cadastrar']]],
    ],
    ['label' => 'Listar', 'items' => [['label' => 'Categoria', 'url' => ['/categoria/listar']], ['label' => 'Usuário', 'url' => ['/usuario/listar']]]]
    ],

    'options' => ['class' => 'navbar-nav navbar-right'],
]);

NavBar::end();
?>
<div>
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
