<?php
class ModelProd extends CI_Model{
   
    // $usu vem do controller
    public function insert(Produt $produt){
        
        // insere seu registro no banco de dados
        // 'Usuario' - nome da tabela
        $this->db->insert ('produt',$produt);
    }
     public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from produt");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
}
    
