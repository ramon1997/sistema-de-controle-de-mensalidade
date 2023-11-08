<?php

class Usuario{
    
    private $id;
    private $nome;
    private $pagou;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPagou() {
        return $this->pagou;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPagou($pagou) {
        $this->pagou = $pagou;
    }


    
}

