<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outro extends CI_Controller {
    
    public function index(){
        
        $this->load->view('outro');
    }
    
    public function teste(){
        echo $this->session->userdata("_ID");
    }
    
    public function sess(){
        $this->session->set_userdata("_ID", "123");
        echo "Session setada com sucesso";
    }
    
    public function form(){
        
        $this->load->view('form');
    }
    
    public function enviardados(){
        
        require_once APPPATH."models/user.php";
        $this->load->model('usuario'); //models/Model.php
        $this->usuario->insert(new TB_user($this->input->post("nome"),$this->input->post("email")));
        //new TB_user($_POST["nome"],$_POST["email"]);
    }
    
    public function listar(){
        require_once APPPATH."models/user.php";
        $this->load->model('usuario');
        $m = $this->usuario;
        $usuarios = $m->searchAll();
        print_r($usuarios);
    }
    
    public function page2(){
        
        $this->load->view('page2');
        
    }
    
    
    
