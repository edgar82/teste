<?php

class Login extends CI_Controller{  //controller
    
    public function cadUs(){      //método
       $nome = $_POST["nome"];//aqui é o nome do banco
       $senha = $_POST["senha"];
	  if ($nome === "dessa" && $senha === "dessa"){
      $this->load->view("admin");
        }else{
      $this->load->view("semaut"); //e esse de nao autorizado msm
    }
    }
    
    public function admin(){
        $this->load->view("admin");
    }
    
    public function semaut(){
        $this->load->view("semaut");
    }
 

}