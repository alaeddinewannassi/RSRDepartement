<?php
session_start();
include ("../inc/connex.php");
$idcom=connex("drsie","../inc/config.inc");
if(isset($_SESSION['username'])!="")
{
 header("Location: ../index.php");
};
if(isset($_POST['connexion']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $pass = mysql_real_escape_string($_POST['password']);
 $res=mysql_query(" SELECT * FROM administrateur WHERE username='$username';");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($pass))
 {
  $_SESSION['username'] = $row['id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('mauvais coordonnées de connexion , veuillez essayer de nouveau !');</script>
    <?php    
 }
 
}
?>
<html>
<head>
<title> Espace Administrateur </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="clear">

</div>
<div class="contenu2">
  <p style="text-align: center;"> ce site présente l'espace privé de l'administrateur au sein du département informatique </p>

</div>
<center>
<div class="formulaire" style="padding-right:100px ;padding-top: 300px;">
<form  method="post">

<fieldset>
<h1> Espace Administrateur </h1>
<table>  
    <tr>
       <th><label for="email"> username :</label></th>
       <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>   
       <th><label for="password">mot de passe :</label></th>
       <td><input type="password" name="password" id="password"/></td>	
       <td rowspan=2>	<input style="float:right; width: 100px; height:35px;"  type="submit" name="connexion" /> </td>
   	</tr>

	   	<tr>

	<td> </td>
		</tr>

</table>
</fieldset>
</form>
</div>
</center>

</body>
</html>