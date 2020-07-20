<?php

class Legislativo{

    private $projeto;
    private $assunto;
    private $anotacao;
    private $Servidor; // Associação

 
    public function getProjeto()
    {
        return $this->projeto;
    }

    public function setProjeto($projeto)
    {
        $this->projeto = $projeto;

        return $this;
    }

    public function getAssunto()
    {
        return $this->assunto;
    }
 
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    public function getAnotacao()
    {
        return $this->anotacao;
    }

    public function setAnotacao($anotacao)
    {
        $this->anotacao = $anotacao;

        return $this;
    }
 
    public function getServidor()
    {
        return $this->Servidor;
    }

    public function setServidor($Servidor)
    {
        $this->Servidor = $Servidor;

        return $this;
    }
}