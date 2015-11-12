<?php

//tarefa
//fazer uma rota chamada nova que possua as seguintes funcionalidades:
//carregar uma view chamada comumview que mostra o nome do usuario e um link p/ logout
//carregar uma view para usuario visitar (visitanteview) com link para login
class Nova extends CI_Controller{
    
    public function comum(){
        $this->load->view("comumview");
    }
    
    public function visitar(){
        $this->load->view("visitanteview");
    }
}

?>