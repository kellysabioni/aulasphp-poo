<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 03</h1>
    <hr>

<?php
require_once "src/Cliente.php";

$clienteA = new Cliente("Fulano", 30, "fulano@gmail.com");
$clienteB = new Cliente("Ozzy", 15, "ozzy@gmail.com");

?>

<h2>Acessando/lendo os dados dos objetos</h2>


<ul>
    <li><b>Nome:</b> <?=$clienteA->getNome()?> </li>
    <li><b>Idade:</b> <?=$clienteA->getIdade()?> </li>
    <li><b>E-mail:</b> <?=$clienteA->getEmail()?> </li>
    <li><b>Faixa Etária:</b> <?=$clienteA->verificarIdade()?> </li>
</ul>


<ul>
    <li><b>Nome:</b> <?=$clienteB->getNome()?> </li>
    <li><b>Idade:</b> <?=$clienteB->getIdade()?> </li>
    <li><b>E-mail:</b> <?=$clienteB->getEmail()?> </li>
    <li><b>Faixa Etária:</b> <?=$clienteB->verificarIdade()?> </li>
</ul>


<h2>Testes de acesso aos recursos 
da classe através do objeto</h2>

<pre><?=var_dump($clienteA, $clienteB)?></pre>


</body>
</html>