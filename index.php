<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//  $search = Usuario::search("jo");
//  echo json_encode($search);

//Carrega um usuário usando o login e a senha
//   $usuario = new Usuario();
//   $usuario->login("joao", "qwerty");

//  echo $usuario;


//Criando um novo usuario
// $aluno = new Usuario("aluno","@lun0" );
// // $aluno->setDeslogin("aluno");
// // $aluno->setDessenha("@lun0");
// $aluno->insert();
// echo $aluno;


//Carregou um Usuario e fez a alteracao
$usuario = new Usuario();
$usuario->LoadbyId(8);
$usuario->update("professor","123!@#");
echo $usuario;

?>
