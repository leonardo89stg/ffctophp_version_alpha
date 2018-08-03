<?php
require 'engine/engine.php';
$dart =  mysqli_connect($host->host,$user->user,$pass->pass)or die('Erro de conexão verfique com o web designer');
mysqli_set_charset($dart,"utf8");
$DB = mysqli_select_db($dart,$db->data) or die('Data not search');



if($dart && $DB)
{

	echo 'Conection server and seek data base  ok!';
}
else
{
	echo'nada ok verfique';
}
?>