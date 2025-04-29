<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 06</h1>
    <hr>

<?php
/* Sempre que trabalharmos com namespaces, será necessário especificar através do 'use' quais classes/enums/funções serão usadas. */
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;

/* Substituimos TODOS OS REQUIRES anteriores, por um ÚNICO REQUIRE apontando para o autoload */
require_once "vendor/autoload.php";

$clientePF = new PessoaFisica("Tiago", "tiago@gmail.com", 30, "123.456.789-00");
$clientePJ = new PessoaJuridica("João Pedro", "joao@tabajara.com", "32.789.5555/000-1", 2019, "Corporação Tabajara");

?>
    <h2>Relatórios</h2>
    
    <h3>PF</h3>
    <?=$clientePF->relatorio()?>
    <p><b>Situação:</b> <?=$clientePF->getSituacao()->name?> </p>
    
    <h3>PJ</h3>
    <?=$clientePJ->relatorio()?>
    <p><b>Situação:</b> <?=$clientePJ->getSituacao()->name?> </p>


</body>
</html>