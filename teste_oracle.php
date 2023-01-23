class MyConect{
#conexÃ£com banco de Dados
var $host; #qual é servidor
var $db; # qual é banco de dados
var $user; # qual é o usuario
var $pass; #qual é a senha
function conect($host="XXXXXXXX",$db="oracle",$user="XXXXXX",$pass="XXXXX"){    
$this->socket = @ociplogon($user,$pass,$host);
IF ( $this->socket == false ){
echo @OCIError($this->socket)."
";
echo "Problemas";
exit;
} else {
ECHO "Conectado com sucesso.!!!";
}
}
function CloseDB(){
return $this->CloseData = @oci_close($this->socket);
}
}
$Conexao = new MyConect;
$Conexao-
