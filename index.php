
<?php 
require_once 'Class_aplication/calss_msg.php';
$style = new user();
$aviso2 = new user();
echo'
<!DOCTYPE html>
<html>
<head>
	<title>




	</title>
'.$style -> estilo('body:color:#fff;').'
</head>
<body onload="myFunction()">

<form method="POST" class="form-eng">
<input type="text" name="host" placeholder="HOST"><br>
<input type="text" name="user" placeholder="USER"><br>
<input type="text" name="PASSWORD" placeholder="PASSWORD"><br>
<input type="text" name="DB" placeholder="Data Base Name"><br>
<input type="submit" name="bts" value="Create"><br>

'.

$aviso2 ::send_msg("OBs:").
  $aviso2 ->msg .

'





</form>


</body>
</html>












';

if(isset($_POST['bts']))
{


$host_user = $_POST['host'];
$user_user = $_POST['user'];
$pass_user = $_POST['PASSWORD'];
$db_user = $_POST['DB'];
$sgbd_data = array(	"host "=>$host_user,	"user"=>$user_user, "pass"=>$pass_user, "db"=>$db_user  );

$create =    json_encode($sgbd_data );

$file = fopen("config/config.json","w");
 fwrite($file,$create);
fclose($file);
clearstatcache();
echo'ok criado';


}
else
{

$aviso = new user();
echo$aviso ->send_msg("texto");
echo $aviso ->msg = "icnlua dados do seu SGBD:como usuário Senha e Host  ";

}





 ?>



