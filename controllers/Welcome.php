<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	// index.php/welcome/index
	public function index(){
		$this->load->view("index");
	}
	
	public function produtos(){
		
		$this->load->view('produtos');
	}
	
	
	public function sobre()
	{
		$this->load->view('sobre');
	}
	
	public function admin()
	{
		$this->load->view('admin');
	}
	
	public function semaut()
	{
		$this->load->view('semaut');
	}
	
	public function fale(){
		$this->load->view('fale');
	}
	
	public function news(){
		$this->load->view('news');
	}
	
	public function formlogin(){
		$this->load->view('formlogin');
	}
	
	public function cadastro(){
		$this->load->view('cadastro');
	}
	public function noticia(){
		$this->load->view('noticia');
	}
	
	// index.php/welcome/doPost
	public function doPost(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/user.php";
		// 'model' eh o Model, aqui passa com letra minuscula
		$this->load->model('model');
		$m = $this->model;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new Usuario($_POST["nome"], $_POST["email"], $_POST["mensagem"])); // new Usuario eh a classe Usuario de user.php
	}
	// index.php/welcome/doPost
	
	public function insertNews(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/user.php";
		$this->load->model('ModelNews');
		$m = $this->ModelNews;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new News($_POST["nome"], $_POST["email"], null)); // new Usuario eh a classe Usuario de user.php
	}
	
	public function insertProd(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/user.php";
		$this->load->model('ModelProd');
		$m = $this->ModelProd;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new produt($_POST["titulo"], $_POST["noticia"], $_POST["autor"])); // new Usuario eh a classe Usuario de user.php
	}
	
	

	// index.php/welcome/listar
	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		// soh para ver se deu certo
		$usuarios = $m->searchAll();
		$data['usuarios'] = $usuarios; //Obs: o nome ['usuarios'] deve ser o mesmo nome na view (lista.php) e no controllers(Control.php)
		//"lista" é o nome da view
		//$data é o vetor das variáveis usuários
		$this->load->view("lista", $data);
	}
	
	public function listarNews(){
		//require_once APPPATH."models/ModelNews.php";
		$this->load->model('ModelNews');
		$m = $this->ModelNews;
		$news = $m->searchAll();
		$data['news'] = $news; 
		$this->load->view("listaNews", $data);
	}
	
	public function listarNot(){
		require_once APPPATH."models/user.php";
		$this->load->model('ModelProd');
		$m = $this->ModelProd;
		$produt = $m->searchAll();
		$data['produt'] = $produt; 
		$this->load->view("noticia", $data);
	}
	
}
