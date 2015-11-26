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

class News{
    
    // atributo nome
    public $nome, $email, $ID;
    
    // construtor
    public function __construct($nome,$email,$ID){
        $this->nome = $nome;
        $this->email = $email;
        $this->ID = $ID;
    }
}

class login{

    public $nome, $senha, $id;
    public function __construct($nome,$senha,$id){
        $this->nome = $nome;
        $this->email = $senha;
        $this->ID = $id;
    }
}

class produt{
    public $titulo,$noticia, $autor;
    public function __construct($titulo,$noticia, $autor){
        $this->titulo = $titulo;
        $this->noticia = $noticia;
        $this->autor = $autor;
        
        
    }
}