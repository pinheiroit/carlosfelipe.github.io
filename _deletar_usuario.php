<?php 

include 'conexao.php';

$id_usuario = $_GET['id_usuario'];

$sql = "delete from usuario where id_usuario = $id_usuario";
$deletar = mysqli_query($conexao,$sql) 

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:400px">
    <center>
    header("location: aprovar_usuario.php"); //redireciona o usuário para a página de aprovação.

