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

<title>Control Panel </title>
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
            <li style="float:right; color:maroon;"><a href="logout.php" class="menu">Se déconnecter</a></li>
     </ul>

</table>


</div>
<div class="contenu">
<h1 style="color:maroon;"> bienvenue <?php echo $userRow["username"] ?> </h1>
</br>

<center> <?php  echo "<p> soyez la bienvenue </br> <span style=\"color:blue;\">".date(DATE_RFC2822)."</span></p>";
?>
</center>
</div>
<div class="sidebar">
<p>
derniére connexion : 
 <?php echo $userRow["last_activity"] ?> </p>
</div>

 <div class="clear"> </div>


<footer>
<span>
  <p>Copyright &copy; 2016 Ecole Nationale des Sciences de l'Informatique - Tous droits réservés</p>
  </span>
</footer>
</body>
</html>
