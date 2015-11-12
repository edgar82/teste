<?php

// Classe do banco de dados
class Usuario{
    
    // atributo nome
    public $nome, $email, $mensagem;
    
    // construtor
    public function __construct($nome,$email,$mensagem){
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }
}
