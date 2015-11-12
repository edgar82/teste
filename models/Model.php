<?php

// CI_Model eh do codeIgnitor
class Model extends CI_Model{
   
    // $usu vem do controller
    public function insert(Usuario $usu){
        
        // insere seu registro no banco de dados
        // 'Usuario' - nome da tabela
        $this->db->insert('Usuario',$usu);
    }
    
    public function getUser($nome,$senha){
        $this->db->where('nome',$nome);
        $this->db->where('senha',$senha);
        $a = $this-> db -> get('User');
        if($a->row()->nome === "root"){
            return "admin";
        } else {
            return "comum";
        } else {
            return false
        }
        
    }
    
    public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from Usuario");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
    
}