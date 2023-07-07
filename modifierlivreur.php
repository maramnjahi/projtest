<?php
include_once "../Controller/livreurC.php";


$host = "localhost";
$dbname = "khstore";
$username = "root";
$password = "";
$id=$_GET['idd'];
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$message = '';
$livreurC= new livreurC();
if(isset($_GET['idd'])) {
  $id=$_GET['idd'];
  
} else {
  header('location:afficherlivreur.php');
}

if(isset($_POST['update_pack'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $cin = $_POST['cin'];
    $dateins = $_POST['dateins'];

    if(empty($nom) || empty($prenom) || empty($email) || empty($adresse) || empty($cin) || empty($dateins)){
        $message = 'Please fill out all fields';
    } else {
      $livreur = new livreur(                                                    
        $id,  
        $_POST['nom'],
          $_POST['prenom'],
          $_POST['email'],
          $_POST['adresse'],
          
          $_POST['cin'],
          $_POST['dateins']
      );
      $livreur=$livreurC->modifierlivreur($livreur,$id);
      header('Location:afficherlivreur.php');
        if($stmt->rowCount() > 0){
            header("location:modifierlivreur.php?idd=$id");
        } else {
            $message = 'Error updating data';
        }
    }
}
//$livreur=$livreurC->recupererlivreur($id);
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
    varnumlivreur = document.forms["livreurForm"]["id"];               
    var nom = document.forms["livreurForm"]["nom"];    
    var prenom = document.forms["livreurForm"]["prenom"];  
    var email = document.forms["livreurForm"]["email"];  
    var adresse = document.forms["livreurForm"]["adresse"];  
    var cin = document.forms["livreurForm"]["cin"];  
    var dateins =  document.forms["livreurForm"]["dateins"];  
    
    if (id.value == "") { 
        alert("Mettez l'ID de la commande."); 
        numlivreur.focus(); 
        return false; 
    }    
    if (nom.value == "") { 
        alert("Mettez le nom."); 
        nom.focus(); 
        return false; 
    }        
    if (prenom.value == "") { 
        alert("Mettez le nom du client."); 
        prenom.focus(); 
        return false; 
    }    
  
    if (cin.value == "") { 
        alert("Mettez cin livreur."); 
        cin.focus(); 
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
    if (dateins.value == "") { 
        alert("Mettez la date de livraison."); 
        dateins.focus(); 
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
        $stmt = $pdo->prepare("SELECT * FROM livreur WHERE numlivreur = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($rows as $row){
      ?>
   
   <form action="" method="post" enctype="multipart/form-data" name="livreurForm"onsubmit="return validateForm(event)">
      <h3 class="title">Modifier livreur</h3>
      <input type="text" class="box" name="nom" value="<?php echo $row['nom']; ?>" placeholder="entrer nom de livreur">
      <input type="text" class="box" name="prenom" value="<?php echo $row['prenom']; ?>" placeholder="entrer nom de livreur">
      <input type="text" class="box" name="email" value="<?php echo $row['email']; ?>" placeholder="entrer adresse mail">
      
      <input type="text" class="box" name="adresse" value="<?php echo $row['adresse']; ?>" placeholder="entrer adresse">
    
      <input type="text" class="box" name="cin" value="<?php echo $row['cin']; ?>" placeholder="entrer adresse">
      <input type="date" class="box" name="dateins" value="<?php echo $row['dateins']; ?>" placeholder="entrer le date d'inscription d'un livreur">

      
     
      
      
      
      <input type="submit" value="update pack" name="update_pack" class="btn">
      <a href="afficherlivreur.php" class="btn">go back!</a>
   </form>

   <?php } ?>

</div>


</div>

</body>


</html>






