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

        /* Como o método foi definido na superclasse como protected, agora é possível usá-lo para mudar a situaçãode PJ  */
        $this->setSituacao(Situacao::PENDENTE);
    }

    /* Método polimórfico, ou seja, ele sobrescreve o método originlamente criado na Superclasse.
    Atenção: os métodos devem ter a mesma assinatura (nome, parâmetros e retorno) */
    public function relatorio(): string
    {
        return "<div>"
                    .parent::relatorio().
                    "<p><b>Nome Fantasia: </b> {$this->getNomeFantasia()} </p>
                    <p><b>CNPJ: </b> {$this->getCNPJ()} </p>
                </div>";
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
