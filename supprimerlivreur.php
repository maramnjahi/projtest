<?php
	include '../Controller/livreurC.php';
	$livreurC=new livreurC();
	$livreurC->Supprimerlivreur($_GET["numlivreur"]);
	header("Location:afficherlivreur.php");
?>