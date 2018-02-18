<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-basic/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-basic/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

<h2 align="center">Informação</h2>
<p>
  Versão do PHP: 7.1.1<br>
  Versão do Yii: 2.0<br>
</p>
<hr>
<h2 align="center">Instrução</h2>
<p>
  Leia com atenção e siga os passos descritos abaixo. Em caso de problemas, entre em contato comigo pelo meu e-mail que se encontra no final deste tutorial. É necessário que o composer esteja instalado, caso não tenha, <a href="https://getcomposer.org/download/">clique aqui</a> para baixar.
</p>
<p>
  Primeiramente faça o download do arquivo e descompacte. Em seguida, mova o arquivo descompactado para o diretório de seu servidor local, por exemplo, no xampp coloque-o dentro da pasta htdocs. Não esqueça de startar seu apache e o MySQL.
</p>
<p>
  Para configuração do banco de dados do sistema, vai na pasta config do projeto, em seguida, abra o arquivo db.php. Nele, você pode colocar o nome do usuario do banco em username, que em um servidor local é root por padrão, o password se caso sua conexão com seu banco exige uma senha, em caso contrário deixe em branco. Em 'dsn' => 'mysql:host=localhost;dbname=crudYii2', o crudYii2 é o nome que coloquei para o banco que em seguida você irá criar, mas se caso queira mudar o nome do banco, mude o nome crudYii2 por outro nome que achar melhor. Agora abra seu gerenciador de banco de dados e crie o banco com o mesmo nome que usou para a configuração que acabamos de ver. O nome que dei foi crudYii2.
</p>
<p>
  Agora, abra o seu terminal e entre no diretório do projeto. Dentro dele se encontra diversas pastas, entre elas arquivos de configuração, controllers, models e entre outros. Para inserir as tabelas que se encontra na pasta migrations, execute o comando: yii migrate. Após executar este comando, você irá digitar yes e apertar a tecla enter para confirmar a criação da tabela. Se caso você possui essas tabelas e quer zerar todos os dados, basta usar o comando: yii migrate/fresh.
</p>
<p>
  Depois de ter feito isso, execute o comando: php yii serve. Agora o projeto estará pronto para uso. Basta abrir seu navegador e digitar na url localhost:8080 e o projeto irá estar em execução. 
</p>
<p>E-mail: mauricio.nogueiraa@gmail.com</p>