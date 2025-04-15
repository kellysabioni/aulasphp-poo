<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>

<?php
require_once "src/Cliente.php"; // Super Classe
require_once "src/PessoaFisica.php"; // Sub Classe

$clientePF = new PessoaFisica("Kelly", "kelly.sabioni@gmail.com", 15, "222.222.222-22");

?>

<h2>Acessando/lendo os dados dos objetos</h2>




<h2>Testes de acesso aos recursos 
da classe através do objeto</h2>

<pre><?=var_dump($clientePF)?></pre>


</body>
</html>