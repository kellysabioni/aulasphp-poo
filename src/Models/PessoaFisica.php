<?php
class PessoaFisica extends Cliente
{
    private int $idade;
    private string $cpf;

    // Método Construtor (sempre é executado automaticamente ao criar objeto)
    public function __construct(string $nome, string $email, int $idade,string $cpf)
    {
        /* Chamando o construtor da superclasse (Cliente) e repassamos para ele nome e email */
        parent::__construct ($nome, $email);
        
        $this->setIdade($idade);
        $this->setCPF($cpf);
    }

    public function verificarIdade():string{
        if ($this->idade <18) return "menor de idade";
        if ($this->idade <60) return "adulto";
        return "idoso";
    }

    private function setIdade(int $idade):void
    {
        if ($idade < 0 ) {
            throw new InvalidArgumentException("Idade não pode ser menor que 0");
        }
        $this->idade = $idade;
    }

    private function setCPF(string $cpf):void{
        $this->cpf = $cpf;
    }
 
    public function getIdade():int
    {
        return $this->idade;
    }
    public function getCPF():string
    {
        return $this->cpf;
    }
}
