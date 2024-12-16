<?php

include 'model/Cliente.php';
include 'model/DAO/ClienteDAO.php';

class ClienteController {

    private $cliente;
    private $cliente_dao;

public function __construct() {
    $this->cliente = new Cliente();
    $this->cliente_dao = new ClienteDAO();
}

public function index() {
    //echo "oi";
    header('Location: ./view/cliente/mostrar-tudo.php');
}

public function create() {
     header('Location: view/cliente/inserir.php');
    // echo 'inserir';
}

public function store() {
    $this->cliente->setNome($_POST['nome']);
    $this->cliente->setData($_POST['dt_nasc']);
    $resp = $this->cliente_dao->inserir($this->cliente);
    if($resp){
        echo 'sucesso';
    }

}

public function edit($id) {
    header('Location: view/cliente/atualizar.php');
}

public function delete() {

}

public function update() {

}

public function show() {

}

}