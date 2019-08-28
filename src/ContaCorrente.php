<?php
 
namespace Aula;

class ContaCorrente extends Conta
{
    private $limitecred;
    public $porcentagemjuros;

    public function __construct($limitecred,$porcentagemjuros)
    {
        $this->setLimite($limitecred);
        $this->setPorcentagem($porcentagemjuros);
    }

    public function setLimite($limitecred){
        $this->limitecred;
    }
    
    public function setPorcentagem($porcentagemjuros){
        $this->porcentagemjuros;
    }

    public function totaljuros(){
        $total=($this->saldo*0.1);
        echo "valor do juros $total";       
     }
 }


