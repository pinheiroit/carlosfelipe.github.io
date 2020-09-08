<?php 

include 'conexao.php';

$id = $_GET['id_usuario'];
$nivel = $_GET['nivel'];

if ($nivel ==1) {

    $update = "UPDATE usuario SET status='Ativo',nivel_usuario= 1 WHERE id_usuario = $id";
    mysqli_query($conexao,$update);
    echo "Administrador Aprovado.";
}

if ($nivel ==2) {

    $update = "UPDATE usuario SET status='Ativo',nivel_usuario= 2 WHERE id_usuario = $id";
    mysqli_query($conexao,$update);
    echo "Funcionário Aprovado."; 
}

if ($nivel ==3) {

    $update = "UPDATE usuario SET status='Ativo',nivel_usuario= 3 WHERE id_usuario = $id";
    mysqli_query($conexao,$update);
    echo "Fiscal";
}

header("location: aprovar_usuario.php"); //redireciona o usuário para a página de aprovação.
