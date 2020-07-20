<?php

class Obras{

    private $destino;
    private $datainicio;
    private $datafim;
    private $situacao;
    
    public function cadastrarObra(){
        include('conexao.php');

        $query = "INSERT INTO obras (Destino, Datainicio, Datafim, Situacao) VALUES(". $this->getDestino() . ", '" . $this->getDatainicio() . "', '" . $this->getDatafim() . "', " . $this->getSituacao() . ")";

        if (mysqli_query($conn, $query)) {
            echo "Cadastrado com sucesso";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    public function getDatainicio()
    {
        return $this->datainicio;
    }

    public function setDatainicio($datainicio)
    {
        $this->datainicio = $datainicio;

        return $this;
    }

    public function getDatafim()
    {
        return $this->datafim;
    }

    public function setDatafim($datafim)
    {
        $this->datafim = $datafim;

        return $this;
    }

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}