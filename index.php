<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuaários buscando pelo  login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "110371@");

echo $usuario;

?>