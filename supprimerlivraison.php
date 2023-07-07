<?php
	include '../Controller/livraisonC.php';
	$livraisonC=new livraisonC();
	$livraisonC->supprimerlivraison($_GET["id"]);
	header('Location:afficherlivraison.php');
?>