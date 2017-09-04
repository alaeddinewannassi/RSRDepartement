<?php
session_start();
include ("inc/connex.php");
$idcom=connex("drsie","inc/config.inc");
unset($_SESSION["username"]); 
session_unset();
header("Location: index.php");
?>