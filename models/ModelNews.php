<?php
class ModelNews extends CI_Model{
   
    // $usu vem do controller
    public function insert(News $news){
        
        // insere seu registro no banco de dados
        // 'Usuario' - nome da tabela
        $this->db->insert('news',$news);
    }
     public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from news");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
}
    
