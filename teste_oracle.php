class MyConect{
#conexÃ£com banco de Dados
var $host; #qual é servidor
var $db; # qual é banco de dados
var $user; # qual é o usuario
var $pass; #qual é a senha
function conect($host="192.168.0.253",$db="oracle",$user="lgbrasil",$pass="ls16br"){
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