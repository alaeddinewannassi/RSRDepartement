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

<title> gestion des membres </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<body>


    <div id="title">

    <center>
                <a href="./">Département Réseau et Sécurité Informatique</a>
        </center>
        <img src="../images/3.jpg" width="1366" height="255" />

            </div>
            
     


<table width="177" border="0" cellspacing="0" cellpadding="0">

  

      <ul>
            <li><a href="categories.php" class="menu">Gérer les membres</a></li>
            <li><a href="pages.php" class="menu">Gérer les pages</a></li>
            <li><a href="configuration.php" class="menu">Configuration </a></li>
            <li><a href="changepass.php">Changer mot de passe</a></li>
            <li style="float:right; "><a href="logout.php" class="menu">Se déconnecter</a></li>
     </ul>

</table>

<div class="contenu2">
  <p style="text-align: center;"> ce site présente un espace pour ajouter des administrateurs au sein du département informatique </p>


<form  method="post">

<fieldset>
<legend> Inscription </legend> 
<table>  
    <tr>
       <th><label for="username"> nom </label></th>
       <td><input type="text" name="username" id="username" /></td>
    </tr>

    <tr>
       <th><label for="email"> email </label></th>
       <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>   
       <th><label for="password">mot de passe :</label></th>
       <td><input type="password" name="password" id="password"/></td>
    </tr>
    <tr>    
       <th><label for="confirm_password">confirmer votre mot de passe :</label></th>
       <td><input type="password" name="pass" placeholder="Confirmer le mot de passe" id="confirm_password"/></td>

       <td rowspan=2> <input style="float:right; width: 100px; height:35px;"  type="submit" name="connexion" /> </td>
    </tr>
    

</table>
</fieldset>
</form>

</div>

 <div class="clear"> </div>


<footer>
<span>
  <p>Copyright &copy; 2016 Ecole Nationale des Sciences de l'Informatique - Tous droits réservés</p>
  </span>
</footer>
</body>
</html>
