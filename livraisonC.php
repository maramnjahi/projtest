<?php

include_once("../config.php");
include_once("../model/livraison.php");

class LivraisonC
{
    public function afficherlivraisons()
    {
        $sql = "SELECT * FROM livraison";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
    function recherche($id){  
        try{
            $sql="SELECT * FROM livraison WHERE id = '$id' ";
            $db=config::getConnexion();
           return $db->query($sql);
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    
    }
   

    public function supprimerlivraison($id)
    {
        $sql = "DELETE FROM livraison WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

    public function ajouterlivraison($livraison)
    {
        $sql = "INSERT INTO livraison VALUES (NULL,:typecommande,:nomclient,:numlivraison, :numlivreur, :adresse, :email,:prixtotal, :dateliv)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'typecommande'=>$livraison->gettypecommande(),
                'nomclient' => $livraison->getnomclient(),
                'numlivraison' => $livraison->getnumlivraison(),
                'numlivreur' => $livraison->getnumlivreur(),
                'adresse' => $livraison->getadresse(),
                'email' => $livraison->getemail(),
                'prixtotal' => $livraison->getprixtotal(),
                'dateliv' => $livraison->getdateliv()->format('Y-m-d')
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function recupererlivraison($id)
    {
        $sql = "SELECT * FROM livraison WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();

            $livraison = $query->fetch();
            return $livraison;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function modifierlivraison($livraison, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livraison SET 
                typecommande =:typecommande,
                nomclient=:nomclient,
                numlivraison=:numlivraison,
                numlivreur = :numlivreur,
                adresse = :adresse, 
                email = :email, 
                prixtotal =:prixtotal,
                dateliv = :dateliv    
                WHERE id = :id'
            );
            $query->execute([
                'typecommande'=>$livraison->gettypecommande(),
                'nomclient' => $livraison->getnomclient(),
                'numlivraison' => $livraison->getnumlivraison(),
                'numlivreur' => $livraison->getnumlivreur(),
                'adresse' => $livraison->getadresse(),
                'email' => $livraison->getemail(),
                'prixtotal' => $$livraison->getprixtotal(),
                 'dateliv' => $livraison->getdateliv()->format('Y-m-d'),
                 'id' => $id

                
               
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
}
?>
