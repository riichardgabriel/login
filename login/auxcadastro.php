<?php
include 'classe/Usuario.php';

echo "<pre>";
var_dump($_POST);
echo "</pre>";

//Se o campo NÃO estiver preenchido ele cadastra a info no banco de dados
if (empty($_POST['id_para_alterar'])){

    
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    
    $usuario = new Usuario();
    
    $resultado = $usuario->CadastroUsuario($user, $password, $passwordConfirm);
    
    echo $resultado;    
}

// Valida se o campo esta preenchido
// Se o campo estiver preenchido ele vai fazer um update no banco de dados
if(!empty($_POST['id_para_alterar'])) {

    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    $id_para_alterar = $_POST['id_para_alterar'];

    $usuario = new Usuario();

    $resultado = $usuario->AtualizarUsuario($id_para_alterar, $user, $password, $passwordConfirm);
    
}