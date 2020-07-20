<?php

class Funcionario{

    private $nome;
    private $cargo;
    private $salario;
    
    public function getNome()
    {
        return $this->nome;
    }
 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}