<?php
function connex($base,$param)
{
include_once($param.".php");
$idCon=mysql_connect(MYHOST,MYUSER,MYPASS);
if($idCon)
{
	$idBase=mysql_select_db($base);
	if(!$idBase)
	{
		die("impossible de se connecter à la base de données ");
	}
}
else
{
	die ("impossible de se connecter au serveur de base de données ");
}
return($idCon);
}
?>
