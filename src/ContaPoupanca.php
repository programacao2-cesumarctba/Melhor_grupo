<?php

namespace Aula;

 class Poupanca extends Conta
 {
    public $retorno;

    public function __construct($retorno)
    {
        $this->setRetorno($retorno);
    }

    public function setRetorno($retorno){
        $this->retorno;
    }
 }
