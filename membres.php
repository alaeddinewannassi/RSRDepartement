
<?php
session_start();
include ("inc/connex.php");
$idcom=connex("drsie","inc/config.inc");
if(isset($_SESSION['username'])!="")
{
 header("Location: espace_etudiant.php");
};
if(isset($_POST['connexion']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $pass = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM etudiant WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($pass))
 {
  $_SESSION['username'] = $row['id'];
  header("Location: espace_etudiant.php");
 }
 else
 {
  ?>
        <script>alert('mauvais coordonnées de connexion , veuillez essayer de nouveau !');</script>
    <?php    
 }
 
}
if(isset($_POST['connexion_1']))
{
 $email = mysql_real_escape_string($_POST['email_1']);
 $pass = mysql_real_escape_string($_POST['password_1']);
 $res=mysql_query("SELECT * FROM enseignant WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($pass))
 {
  $_SESSION['username'] = $row['id'];
  header("Location: espace_enseignant.php");
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
<title> Département Réseau et Sécurité Informatique - ENSI</title>
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
              <li class="active li-no-hover" style="float:right;"><a href="membres.php">Espace Privé</a></li>
    </ul>
			</td>

		</tr>

		</table>

		
</div>
<div class="contenu2">
  <p style="text-align: center;"> ce site présente l'espace privé des étudiants et des professeurs au sein du département informatique </p>

</div>
<div class="formulaire" style="float:left;">
<form  method="post">

<fieldset>
<h1> Espace Etudiant </h1>
<table>  
    <tr>
       <th><label for="email"> email :</label></th>
       <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>   
       <th><label for="password">mot de passe :</label></th>
       <td><input type="password" name="password" id="password"/></td>	
       <td rowspan=2>	<input style="float:right; width: 100px; height:35px;"  type="submit" name="connexion" /> </td>
   	</tr>

	   	<tr>

	<td><a href="inscription.php"> <p> pas encore inscrit ? </p></a></td>
		</tr>

</table>
</fieldset>
</form>

</div>

<div class="formulaire" style="float:right;">
<form  method="post">

<fieldset>
<h1> Espace Enseignant </h1>
<table>  
    <tr>
       <th><label for="email"> email :</label></th>
       <td><input type="text" name="email_1" id="email" /></td>
    </tr>
    <tr>   
       <th><label for="password">mot de passe :</label></th>
       <td><input type="password" name="password_1" id="password"/></td>  
       <td rowspan=2> <input style="float:right; width: 100px; height:35px;"  type="submit" name="connexion_1" /> </td>
    </tr>

      <tr>

  <td></td>
    </tr>

</table>
</br>
</fieldset>
</form>

</div>
<div class="clear"></div>
<footer>
<span>
  <p>Copyright &copy; 2016 Ecole Nationale des Sciences de l'Informatique - Tous droits réservés</p>  </span>
</footer>


</body>
</html>



