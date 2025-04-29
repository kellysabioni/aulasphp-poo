<?php

namespace MeuProjeto\Models;

final class PessoaJuridica extends Cliente
{
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

    public function __construct(
        string $nome,
        string $email,
        string $cnpj,
        int $ano,
        string $nomeFantasia
    ) {
        parent::__construct($nome, $email);

        $this->setCnpj($cnpj);
        $this->setAnoFundacao($ano);
        $this->setNomeFantasia($nomeFantasia);

        $this->setSituacao(Situacao::PENDENTE);
    }

    public function relatorio(): string
    {
        return "<div>"
            . parent::relatorio() . // opcional
            "<p><b>Nome Fantasia:</b> {$this->getNomeFantasia()} </p>
            <p><b>CNPJ:</b> {$this->getCnpj()} </p>
        </div>";
    }

    private function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    private function setAnoFundacao(int $ano): void
    {
        $this->anoFundacao = $ano;
    }

    private function setNomeFantasia(string $nome): void
    {
        $this->nomeFantasia = $nome;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }
}
