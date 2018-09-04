<?php
/* Autor: Luiz Henrique*/
class Peca
{
    private $codigoPeca;
    private $categoriaPeca;
    private $nomePeca;
    private $quantidadePeca;
    private $valorUnitario;
    private $quantidadeMin;
    private $quantidadeMax;

    /* Método construtor direto, passando todos os valores para os atributos.
    Talvez seja desnecessário, pela utilização dos getters e setters.

    public function __construct ($codigoPeca, $categoriaPeca, $nomePeca, $quantidadePeca, $valorUnitario, $quantidadeMin, $quantidadeMax)
    {
        $this->codigoPeca = $codigoPeca;
        $this->categoriaPeca = $categoriaPeca;
        $this->nomePeca = $nomePeca;
        $this->quantidadePeca = $quantidadePeca;
        $this->quantidadeMin = $quantidadeMin;
        $this->quantidadeMax = $quantidadeMAx;
    }

    */

    //Getters e Setters.

    public function getCodigoPeca ()
    {
        return $this->$codigoPeca;
    }

    /* Validação do setCodigoPeca:
    Tem que ser numérico (BD = numeric)
    Tem que ter 5 ou menos dígitos (BD = 5)
    Não satisfeitas as condições, returna mensagem.
    Satisfeito as condições, seta o atributo e retorna true.
    */
    public function setCodigoPeca ($codigoPeca)
    {
        if(!is_numeric($codigoPeca)) {
            return "Código da Peça inválido. Insira somente números.";
        } elseif (strlen((string)$codigoPeca) > 5) {
            return "O código da Peça {$codigoPeca} excede o limite de 5 dígitos.";
        } else {
            (int)$this->codigoPeca = $codigoPeca;
            return true;
        }
    }

    public function getCategoriaPeca () {
        return $this->categoriaPeca;
    }

    public function setCategoriaPeca ($categoriaPeca) {
        (string)$this->categoriaPeca = $categoriaPeca;
    }
    
    public function getNomePeca(){
        return $this->nomePeca;
    }

    /* Validação do setNomePeca:
    Tem que ser String (BD = varchar2)
    Tem que ter 40 ou menos caracteres (BD = 40)
    Não satisfeitas as condições, returna mensagem.
    Satisfeito as condições, seta o atributo e retorna true.
    */

    public function setNomePeca ($nomePeca)
    {
        if (strlen($nomePeca) > 40) {
            return "O nome da Peça {$nomePeca} excede o limite de 40 caracteres.";
        } else {
            (string)$this->nomePeca = $nomePeca;
            return true;
        }
    }

    public function getQuantidadePeca() {
        return $this->quantidadePeca;
    }

    /* Validação do setQuantidadePeca:
    Tem que ser numerico (BD = numeric)
    Tem que ter 4 dígitos no máximo (BD = 4)
    Não satisfeitas as condições, returna mensagem.
    Satisfeito as condições, seta o atributo e retorna true.
    */

    public function setQuantidadePeca($quantidadePeca) {
        if(!is_numeric($quantidadePeca)) {
            return "Quantidade de Peças inválida. Insira somente números.";
        } elseif (strlen((string)$quantidadePeca) > 4) {
            return "Quantidade de Peças {$quantidadePeca} excede o limite de 4 dígitos.";
        } else {
            (int)$this->quantidadePeca = $quantidadePeca;
            return true;
        }
    }

    public function getValorUnitario() {
        return $this->valorUnitario;
    }

     /* Validação do setValorUnitário:
    Tem que ser real (BD = numeric)
    Tem que ter 4 dígitos no máximo, 2 decimais (BD = 4,2)
    Não satisfeitas as condições, returna mensagem.
    Satisfeito as condições, seta o atributo e retorna true.
    */

    public function setValorUnitario($valorUnitario) {
        if(!is_numeric($valorUnitario)) {
            return "Valor da Peça inválida. Insira somente números.";
        } elseif (strlen((string)$valorUnitario) > 7) {
            return "Valor {$quantidadePeca} excede o limite de 4 dígitos e 2 decimais.";
        } else {
            (float)$this->valorUnitario = $valorUnitario;
            return true;
        }
    }

    public function getQuantidadeMin()
    {
        return $this->quantidadeMin;
    }

    /* Validação do setQuantidadeMin:
    Tem que ser numerico (BD = numeric)
    Tem que ter 4 dígitos no máximo (BD = 4)
    Não satisfeitas as condições, returna mensagem.
    Satisfeito as condições, seta o atributo e retorna true.
    */

    public function setQuantidadeMin($quantidadeMin) {
        if(!is_numeric($quantidadeMin)) {
            return "Quantidade de Peças Mínima inválida. Insira somente números.";
        } elseif (strlen((string)$quantidadeMin) > 4) {
            return "Quantidade de Peças Mínima {$quantidadeMin} excede o limite de 4 dígitos.";
        } else {
            (int)$this->quantidadeMin = $quantidadeMin;
            return true;
        }
    }

    public function getQuantidadeMax() 
    {
        return $this->quantidadeMax;
    }

    /* Validação do setQuantidadeMax:
    Tem que ser numerico (BD = numeric)
    Tem que ter 4 dígitos no máximo (BD = 4)
    Não satisfeitas as condições, returna mensagem.
    Satisfeito as condições, seta o atributo e retorna true.
    */

    public function setQuantidadeMax($quantidadeMax) {
        if(!is_numeric($quantidadeMax)) {
            return "Quantidade de Peças Máxima inválida. Insira somente números.";
        } elseif (strlen((string)$quantidadeMax) > 4) {
            return "Quantidade de Peças Máxima {$quantidadeMax} excede o limite de 4 dígitos.";
        } else {
            (int)$this->quantidadeMax = $quantidadeMax;
            return true;
        }
    }   
}