<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cadastro de Usuário</title>
</head>
<body>


<div class="container" style="width:400px;">
<form action="_inserir_usuario.php" method="POST">
<div class="form-group">
<label> Nome do Usuário </label>
<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder ="Nome Completo">
</div>

<div class="form-group">
<label> E-mail</label>
<input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail">
</div>

<div class="form-group">
<label> Informe sua senha</label>
<input type="password" id="txtSenha" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
</div>

<div class="form-group">
<label> Repita sua senha</label>
<input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Por Segurança repita sua senha" oninput ="validaSenha(this)">
</div>
<small>Precisa ser igual a senha digitada acima.</small>

<div class="form-group">
<label>Nível de Acesso</label>
<select name="nivelusuario" class="form-control">
            <option value="1">Administrador</option>
            <option value="2">Funcionário</option>
            <option value="3">Conferente</option>
</select>
</div>

<div style="text-align:right;">
<button type="submit" class="btn btn-sm btn-success">Cadastrar Usuário</button>
</div>
</form>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
function validaSenha(input){
    if (input.value != document.getElementById('txtSenha').value) {
        input.setCustomValidity('Repita a Senha corretamente');
    } else {
        input.setCustomValidity('');
    }
}
</script>
</body>
</html>