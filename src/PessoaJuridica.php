<?php
class PessoaJuridica extends Cliente
{
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

    public function __construct(string $nome, string $email, string $cnpj, int $anoFundacao, string $nomeFantasia)
    {
        parent::__construct($nome, $email);
        $this->setCNPJ($cnpj);
        $this->setAnoFundacao($anoFundacao);
        $this->setNomeFantasia($nomeFantasia);
    }

    private function setCNPJ(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    private function setAnoFundacao(int $anoFundacao): void
    {
        $this->anoFundacao = $anoFundacao;
    }

    private function setNomeFantasia(string $nomeFantasia): void
    {
        $this->nomeFantasia = $nomeFantasia;
    }
    public function getCNPJ(): string
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
