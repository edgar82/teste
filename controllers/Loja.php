<?php

    class Loja extends CI_Controller{
        public function doPost(){
            require_once APPPATH."models/produto.php";
            $this->load->model('produtodao');
            $m = $this->model;
            $nome = $_POST["nome"];
            $preco = $_POST["preco"];
            $categoria = $_POST["cat"];
            $f = new Fabrica();
            $prod = $f->creatProd($categoria, $nome, $produto);
            $prod->catid = $prod->getCatId();
            $m->insert($prod);
        }
    }