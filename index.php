<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 05</h1>
    <hr>

<?php
require_once "src/Enums/Situacao.php"; // Enumeração
require_once "src/Models/Cliente.php"; // Super Classe
require_once "src/Models/PessoaFisica.php"; // Sub Classe
require_once "src/Models/PessoaJuridica.php"; // Sub Classe

$clientePF = new PessoaFisica("Kelly", "kelly.sabioni@gmail.com", 15, "222.222.222-22"); 
$clientePJ = new PessoaJuridica("João Pedro", "jp@gmail.com", "12.123.123/0001-45", 2019, "Corporação Tabajara"); 

?>

<h2>Relatórios</h2>

<h3>PF</h3>
<?=$clientePF->relatorio() ?>

<h3>PJ</h3>
<?=$clientePJ->relatorio() ?>

</body>
</html>