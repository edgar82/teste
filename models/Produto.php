<?php

    abstract class Produto{
        public $id, $nome, $preco;
        
        public function __construct($id, $nome, $preco){
            $this->nome = nome;
            $this->preco = preco;
            $this->id = id;
        }
        
        abstract public function getCatId();
    }
    
    
    
    class Livro extends Produto{
        public function getCatId(){
            return 1;
        }
    }
    
    class Filme extends Produto{
        public function getCatId(){
            return 2;
        }
    }
    
    class Fabrica{
        public createProd($cat, $nome, $preco){
            if($cat === "Livro"){
                return Livro(0,$nome,$preco);
            }
            if($cat === "Filme"){
                return Filme(0,$nome,$preco);
            }
        }
    }
    
?>