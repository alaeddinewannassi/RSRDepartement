<?php
session_start();
include ("../inc/connex.php");
$idcom=connex("drsie","../inc/config.inc");
if(!isset($_SESSION['username']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM administrateur WHERE id=".$_SESSION['username']);
$userRow=mysql_fetch_array($res);



?>
<html>
<head>
<title> changer le mot de passe </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="contenu2">
  <p style="text-align: center;"> ce site présente un espace pour changer le mot de passe de l'administrateur au sein du département informatique </p>

</div>
<center>
<div class="formulaire" style="padding-right:300px ;padding-top: 300px;">
<form  method="post" action="traitement.php">

<fieldset>
<h1> changer votre mot de passe </h1>
<table>  
    <tr>
       <th><label for="email"> username :</label></th>
       <td><input type="hidden" name="username" id="username" /></td>
    </tr>
    <tr>   
       <th><label for="password1">ancien mot de passe :</label></th>
       <td><input type="password" name="password1" id="password1"/></td>  
       </tr>
       <tr>
       <th><label for="password2">nouveau mot de passe :</label></th>
       <td><input type="password" name="password2" id="password2"/></td> 

       <th><label for="password3">confirmer mot de passe :</label></th>
       <td><input type="password" name="password3" id="password3"/></td> 
       <td rowspan=2> <input style="float:right; width: 100px; height:35px;"  type="submit" name="connexion" /> </td>
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