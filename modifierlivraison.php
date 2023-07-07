<?php
$host = 'localhost';
$dbname = 'khstore';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$message = '';

if(isset($_GET['idd'])) {
  $id = $_GET['idd'];
} else {
  header('location: afficherlivraison.php');
  exit;
}

if(isset($_POST['update_pack'])){
  $typecommande = $_POST['typecommande'];
  $nomclient = $_POST['nomclient'];
  $numlivraison = $_POST['numlivraison'];
  $numlivreur = $_POST['numlivreur'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];
  $prixtotal = $_POST['prixtotal'];
  $dateliv = $_POST['dateliv'];

  if(empty($typecommande) || empty($nomclient) || empty($numlivraison) || empty($numlivreur) || empty($adresse) || empty($email) || empty($prixtotal) || empty($dateliv)){
    $message = 'Please fill out all fields';
  } else {
    $update_data = "UPDATE livraison SET typecommande=:typecommande, nomclient=:nomclient, numlivraison=:numlivraison, numlivreur=:numlivreur, adresse=:adresse, email=:email, prixtotal=:prixtotal, dateliv=:dateliv WHERE id=:id";
    $stmt = $pdo->prepare($update_data);
    $stmt->bindParam(':typecommande', $typecommande); 
    $stmt->bindParam(':nomclient', $nomclient);
    $stmt->bindParam(':numlivraison', $numlivraison);
    $stmt->bindParam(':numlivreur', $numlivreur);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':prixtotal', $prixtotal);
    $stmt->bindParam(':dateliv', $dateliv);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('location: afficherlivraison.php');
    if($stmt){
      header('location: afficherlivraison.php?idd='.$id);
      exit;
    } else {
      $message = 'Error updating data';
    }
  }
}

?>


     

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Update Product</title>
</head>
<script>
function validateForm(event) {
    var numlivraison = document.forms["LivraisonForm"]["id"];               
    var typecommande = document.forms["LivraisonForm"]["typecommande"];    
    var nomclient = document.forms["LivraisonForm"]["nomclient"];  
    var numlivraison = document.forms["LivraisonForm"]["numlivraison"];  
    var numlivreur = document.forms["LivraisonForm"]["numlivreur"];  
    var adresse = document.forms["LivraisonForm"]["adresse"];  
    var email =  document.forms["LivraisonForm"]["email"];  
    var prixtotal = document.forms["LivraisonForm"]["prixtotal"];  
    var dateliv = document.forms["LivraisonForm"]["dateliv"];  

    if (numlivraison.value == "") { 
        alert("Mettez l'ID de la commande."); 
        numlivraison.focus(); 
        return false; 
    }    
    if (typecommande.value == "") { 
        alert("Mettez le type de commande."); 
        typecommande.focus(); 
        return false; 
    }        
    if (nomclient.value == "") { 
        alert("Mettez le nom du client."); 
        nomclient.focus(); 
        return false; 
    }    
    if (numlivraison.value == "") { 
        alert("Mettez le numéro de livraison."); 
        numlivraison.focus(); 
        return false; 
    }    
    if (numlivreur.value == "") { 
        alert("Mettez le numéro du livreur."); 
        numlivreur.focus(); 
        return false; 
    }    
    if (adresse.value == "") { 
        alert("Mettez votre adresse."); 
        adresse.focus(); 
        return false; 
    }    
    if (email.value == "") { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf("@", 0) < 0) { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0) { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }
    if (prixtotal.value == "") { 
        alert("Mettez le prix total de la commande."); 
        prixtotal.focus(); 
        return false; 
    }    
    if (dateliv.value == "") { 
        alert("Mettez la date de livraison."); 
        dateliv.focus(); 
        return false; 
    }    
    return true; 
}
</script>


<body>
  <div class="container">
    <div class="admin-product-form-container centered">
     
      <?php if(!empty($message)): ?>
        <span class="message"><?php echo $message; ?></span>
      <?php endif; ?>

      <?php
        $stmt = $pdo->prepare("SELECT * FROM livraison WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($rows as $row){
      ?>
   
   <form action="" method="post" enctype="multipart/form-data" name="LivraisonForm"onsubmit="return validateForm(event)>
      <h3 class="title">Modifier livraisons</h3>
      <input type="text" class="box" name="typecommande" value="<?php echo $row['typecommande']; ?>" placeholder="entrer nom de livreur">
      <input type="text" class="box" name="nomclient" value="<?php echo $row['nomclient']; ?>" placeholder="entrer nom de livreur">
      <input type="text" class="box" name="numlivraison" value="<?php echo $row['numlivraison']; ?>" placeholder="entrer prenom de livreur">
      <input type="text" class="box" name="numlivreur" value="<?php echo $row['numlivreur']; ?>" placeholder="entrer nom de livreur">
      <input type="text" class="box" name="adresse" value="<?php echo $row['adresse']; ?>" placeholder="entrer adresse">
      <input type="text" class="box" name="email" value="<?php echo $row['email']; ?>" placeholder="entrer adresse mail">
      <input type="text" class="box" name="prixtotal" value="<?php echo $row['prixtotal']; ?>" placeholder="entrer adresse">
      <input type="date" class="box" name="dateliv" value="<?php echo $row['dateliv']; ?>" placeholder="entrer le date d'inscription d'un livreur">

      
     
      
      
      
      <input type="submit" value="update pack" name="update_pack" class="btn">
      <a href="afficherlivraison.php" class="btn">go back!</a>
   </form>

   <?php } ?>

</div>


</div>

</body>
</html>








