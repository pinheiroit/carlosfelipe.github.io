<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$emailusuario = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuario (nome_usuario,email_usuario,senha_usuario,nivel_usuario,status) values ('$nomeusuario','$emailusuario',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao,$sql);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:500px;margin-top:30px">
    <center>
        <h4>Usuário adicionado com sucesso.</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="cadastrar_usuario.php" role="button" class="btn btn-sm btn-primary"> Voltar para tela inicial</a>
        </center>
    </div>
</div>