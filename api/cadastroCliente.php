<?php

include_once("../configs/conexao.php");
include_once("Usuarios.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNasc = $_POST['dataNasc'];
$idGenero = $_POST['genero'];

$usuario = new Usuarios();
$usuario->setNome($nome);
$usuario->setSobrenome($sobrenome);
$usuario->setData($dataNasc);
$usuario->setIdGenero($idGenero);

$pdo = Database::conexao();
$cadastrar = $pdo->prepare("CALL cadastrarCliente(:nome, :sobrenome, :data_nasc, :id_genero, 1)");
$cadastrar->bindParam(":nome", $nome);
$cadastrar->bindParam(":sobrenome", $sobrenome);
$cadastrar->bindParam(":data_nasc", $dataNasc);
$cadastrar->bindParam(":id_genero", $idGenero);
$cadastrar->execute();

if($cadastrar) {
    $msg = array("cod" => 0, "msg" => "Cliente cadastrado com sucesso.");
    echo  json_encode($msg);
} else {
    $msg = array("cod" => 1, "msg" => "Erro ao cadastrar paciente.");
    echo json_encode($msg);
}