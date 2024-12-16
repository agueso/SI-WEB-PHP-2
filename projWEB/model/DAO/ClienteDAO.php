<?php
   include './config/Conexao.php';

class ClienteDAO{
    private $pdo;

    public function __construct(){
        $this->pdo = Conexao :: conectar();
    }
    public function inserir ($cliente){
        //$id = $cliente -> getId();
        $nome = $cliente->getNome();
        $dt_nasc = $cliente -> getData();

        $sql = "INSERT INTO Clientes (nome, dt_nasc) VALUES(:nome,:dt_nasc)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dt_nasc', $dt_nasc);
        $ok = $stmt->execute();
        return $ok;
    }
    public function mostrar_tudo(){
        $sql = "SELECT * FROM clientes";
        $stmt = $this->pdo->query($sql);
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        for($i = 0; $i< $stmt->rowCount();$i++){
            $clientes[$i] = new Cliente();
            $clientes[$i]->setNome($result[$i]['nome']);
            $clientes[$i]->setData($result[$i]['dt_nasc']);

        }
        return $clientes;

    }
}