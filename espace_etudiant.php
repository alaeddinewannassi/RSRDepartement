<?php
session_start();
include ("inc/connex.php");
$idcom=connex("drsie","config.inc");
if(!isset($_SESSION['username']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM etudiant WHERE id=".$_SESSION['username']);
$userRow=mysql_fetch_array($res);
?>
<html>
<head>
<title> Département Réseau et Sécurité Informatique - ENSI </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"> </script>
</head>
<body>


<div>
        

        <table>

        <tr>
        	<td>
            

            </td>
            
            <td>
		<ul  id="menu">
		<div id="title">

		<center>
                <a href="./">Département Réseau et Sécurité Informatique</a>
        </center>
        <img src="images/3.jpg" width="1300" height="255" />

            </div>
		          <li><a href="index.php">Accueil</a></li>
		          <li><a href="apropos.html">Apropos</a></li>
		          <li><a href="formation.html">Formation</a></li>
		          <li><a href="contact.html">Contact</a></li>
		          <li><a href="recrutement.html">Recrutement</a></li>
		          <li style="float:right;" class="active li-no-hover"><a href="membres.php">Espace Privé</a></li>
		</ul>
			</td>

		</tr>

		</table>

		
</div>

<div class="sidebar1">

<p align="center" style="color:olive; font-size: 20px">  Bonjour <?php echo $userRow["username"] ; ?> </p>
</br>

<dl>
<dt><a href="formation.php"> Votre formation </a></dt>
<dt><a href="formation.php">  </a></dt> 
<dt><a href="actualites.html"> Les actualités </a></dt> 
<dt><a href="compte.php"> Mes coordonnées </a></dt>
</dl>

<dl>
<a style="float:right; font-size: 18px; padding-top: 80px; color:maroon;"  href="logout.php"> se déconnecter </a>
</dl>

</div>
<div class="contenu1">

<?php  echo "<p> soyez la bienvenue </br> <span style=\"color:blue;\">".date(DATE_RFC2822)."</span></p>";
?>

</div>
 
 
<div class="clear"> </div>
        <footer>
<span>
  <p>Copyright &copy; 2016 Ecole Nationale des Sciences de l'Informatique  - Tous droits réservés</p>
  </span>
</footer>

</body>
</html>
