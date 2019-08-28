<?php

namespace Aula;

class Cliente
{
    public $nome;
    public $email;
    public $endereco;

    public function __construct($nome,$email,$endereco){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setEndereco($endereco);
    }

    public function setNome($nome){
        $this->nome;
    }

    public function setEmail($email){
        $this->email;
    }

    public function setEndereco($endereco){
        $this->endereco;
    }


}