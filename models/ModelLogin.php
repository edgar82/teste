<?php

class Login extends CI_Model {
    
    public function insert(Login $login){
        $this->db->insert('login',$login); //insere registro no bd
    }
    
    public function searchAll(){ 
        $query = $this->db->query("Select * from login"); //User é o nome da tabela
        return $query->result();
    }
    
    
}