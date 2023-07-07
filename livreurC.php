<?php
include '../config.php';
include_once '../Model/livreur.php';
class livreurC
{
	function afficherlivreur()
	{
		$sql = "SELECT * FROM livreur";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
	function supprimerlivreur($numlivreur)
	{
		$sql = "DELETE FROM livreur WHERE numlivreur=:numlivreur";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':numlivreur', $numlivreur);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
	function ajouterlivreur($livreur)
	{
		$sql = "INSERT INTO livreur (numlivreur,nom,prenom,email,adresse,cin,dateins) 
			VALUES ( :numlivreur, :nom, :prenom, :email, :adresse, :cin, :dateins) ";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				 'numlivreur' => $livreur->getnumlivreur(), 
				 'nom' => $livreur->getnom(),
				 'prenom' => $livreur->getprenom(),
				 'email' => $livreur->getemail(),
				 'adresse' => $livreur->getadresse(),
				 'cin' => $livreur->getcin(),
				
				
				
				
				'dateins' => $livreur->getdateins()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function recupererlivreur($num)
	{
		$sql="SELECT * FROM livreur INNER JOIN livraison on livreur.numlivreur = livraison.numlivreur WHERE  numlivreur=$num";
    $db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$livreur = $query->fetch();
			return $livreur;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierlivreur($livreur, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE livreur SET 
						nom= :nom,
						prenom= :prenom,
						email= :email,
						adresse= :adresse,
						cin= :cin,
					    dateins= :dateins
					WHERE numlivreur= :numlivreur'
			);
			$query->execute([
				'nom' => $livreur->getnom(),
				'prenom' => $livreur->getprenom(),
				'email' => $livreur->getemail(),
				'adresse' => $livreur->getadresse(),
				'cin' => $livreur->getcin(),
				
				
				
				
				'dateins' => $livreur->getdateins(),
				'numlivreur' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
	
	   
	function joinlivraison($id){
		$sql=("SELECT * FROM livreur INNER JOIN   livraison on livreur.numlivreur = livraison.numlivreur WHERE livreur.numlivreur= $id");
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:' . $e->getMessage());
		}
	}
	
	}

	