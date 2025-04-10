<?php
class Cliente
{
    private string $nome;
    private int $idade;
    private string $email;

    /* Métodos setters */
    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }
    public function setIdade(string $idade):void
    {
        $this->idade = $idade;
    }
    public function setEmail(string $email):void
    {
        $this->email = $email;
    }
}
