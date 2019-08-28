<?php

namespace Aula;

abstract class Conta{
    public $numconta;
    public $saldo;
    public $agencia;
    public $cliente;
    public $historico;
    public $valor;
    
    public function __construct($numconta,$saldo,$agencia,$cliente,$historico){
            $this->setNumConta($numconta);
            $this->setSaldo($saldo);
            $this->setAgencia($agencia);
            $this->setCliente($cliente);
            $this->setHistorico($historico);
    }

    public function setNumConta($numconta){
        $this->numconta;
    }

    public function setSaldo($saldo){
        $this->saldo;
    }

    
    public function setAgencia($agencia){
        $this->agencia;
    }
    
    public function setCliente($cliente){
        $this->cliente;
    }

    public function setHistorico($historico){
        $this->historico;
    }
    

    public function tirarSaldo()
    {
        echo $this->$saldo;
    }
 
    public function Debito($valor){
        if ($this->saldo < $valor){
            echo 'Saldo insuficiente!!';
        }
        else
        {
            $this->$saldo = $this->$saldo - $valor;
        }
    }
    public function Credito($valor)
    {
        $this->$saldo = $this->$saldo + $valor;
    }
}