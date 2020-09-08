<?php 

include 'conexao.php';

$usuario = $_POST['usuario'];
$senhausuario   = $_POST['senha'];


$sql = "SELECT email_usuario from usuario where email_usuario = '$usuario'";
$buscar = mysqli_query($conexao,$sql);

echo $total = mysqli_num_rows($buscar);

if ($total > 0) {
    #conferir senha
    } else {
        header('Location: erro.php');
    }




?>