<?php

class Endereco
{
    private $cep;
    private $logradouro;
    private $bairro;
    private $estado;
    private $cidade;

    public function __construct($cep, $logradouro, $bairro, $estado, $cidade)
    {
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->cidade = $cidade;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

}
