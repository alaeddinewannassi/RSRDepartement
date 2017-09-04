<?php
session_start();
include ("inc/connex.php");
$idcom=connex("drsie","inc/config.inc");
if(isset($_SESSION['user'])!="")
{
 header("Location: profil.php");
}
if(isset($_POST['connexion']))
{
 $user = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['password']);
if($_POST['genre']=="etudiant")
{
 $query=("INSERT INTO `etudiant` (`id`, `username`, `email`, `password`) VALUES (NULL,'$user', '$email', '".md5($upass)."');");
}
else
{
  $query=("INSERT INTO `enseignant` (`id`, `username`, `email`, `password`) VALUES (NULL,'$user', '$email', '".md5($upass)."');");
} 

 $res=mysql_query($query);
 if($res){
 echo "<div class= \"phpmsg\"><h3>You are registered successfully.</h3><br/>Click here to <a href='membres.php'>Login</a></div> ";
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
              <li style="float:right;"><a href="membres.php">Espace Privé</a></li>
    </ul>
			</td>

		</tr>

		</table>

		
</div>

<div class="form2">
<form  method="post">

<fieldset>
<legend> Inscription </legend> 
<table>  
    <tr>
       <th><label for="username"> nom </label></th>
       <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>   
       <th><label for="username"> intitulé </label> </th>
       <td><select name="genre">
       <option name="etudiant"> Etudiant </option>
       <option name="enseignant"> Enseignant </option>
       </select>
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

       <td rowspan=2>	<input style="float:right; width: 100px; height:35px;"  type="submit" name="connexion" /> </td>
   	</tr>
	  

</table>
</fieldset>
</form>

</div>





<footer>
<span>
  <p>Copyright &copy; 2016 Ecole Nationale des Sciences de l'Informatique - Tous droits réservés</p>
  </span>
</footer>

</body>
</html>