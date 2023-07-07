<?php
    include_once '../Model/livraison.php';
    include_once '../Controller/livraisonC.php';

    $error = "";
   
    // create livraison
    $livraison = null;

    // create an instance of the controller
    $livraisonC = new livraisonC();
    if (
        isset($_POST["typecommande"]) &&
        isset($_POST["nomclient"]) &&
        isset($_POST["numlivraison"]) &&
        isset($_POST["numlivreur"]) &&
        isset($_POST["adresse"]) && 
        isset($_POST["email"]) && 
        isset($_POST["prixtotal"]) &&
        isset($_POST["dateliv"])
    ) {
        if (
            !empty($_POST["typecommande"]) && 
            !empty($_POST["nomclient"]) && 
            !empty($_POST["numlivraison"]) && 
            !empty($_POST["numlivreur"]) && 
            !empty($_POST["adresse"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["prixtotal"]) && 
            !empty($_POST["dateliv"])
        ) {
            $livraison = new livraison(
                null,
                $_POST['typecommande'],
                $_POST['nomclient'],
                $_POST['numlivraison'],
                $_POST['numlivreur'],
                $_POST['adresse'],
                $_POST['email'],
                floatval($_POST['prixtotal']),
                date_create($_POST['dateliv'])
            );
            $livraisonC->ajouterlivraison($livraison);
            header('Location:afficherlivraison.php');
        }
        else {
            $error = "Missing information";
        }
    }
?>



  

<html>
        <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin Dashboard | Keyframe Effects</title>
    <link rel="stylesheet" href="sub.css">
    
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        </head>
        <body>



        <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>L<span>ogo</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(2.jpg)"></div>
                <h4>Maram Njahi</h4>
               
                <small>CatGpt CEO</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="index.html" >
                             <span class="las la-home"></span>
                             <small>Dashboard</small>
                         </a>
                     </li>
                     <li>
                        <a href="profil.html" >
                             <span class="las la-user-alt"></span>
                             <small>Profile</small>
                         </a>
                     </li>
                     <li>
                        <a href="sub.html" >
                             <span class="las la-tasks"></span>
                             <small>subscription</small>
                         </a>
                     </li>
                     <li>
                        <a href="1.html" >
                             <span class="las la-envelope"></span>
                             <small>1</small>
                         </a>
                     </li>
                     <li>
                        <a href="ajouterlivraison.php" class="active">
                             <span class="las la-tasks"></span>
                             <small>livraisons</small>
                         </a>
                     </li>
                     <li>
                        <a href="3.html" >
                             <span class="las la-tasks"></span>
                             <small>3</small>
                         </a>
                     </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>
                    
                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>
                    
                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(maram.jpg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
       

<script>
function validateForm(event) {
    var id = document.forms["LivraisonForm"]["id"];               
    var typecommande = document.forms["LivraisonForm"]["typecommande"];    
    var nomclient = document.forms["LivraisonForm"]["nomclient"];  
    var numlivraison = document.forms["LivraisonForm"]["numlivraison"];  
    var numlivreur = document.forms["LivraisonForm"]["numlivreur"];  
    var adresse = document.forms["LivraisonForm"]["adresse"];  
    var email =  document.forms["LivraisonForm"]["email"];  
    var prixtotal = document.forms["LivraisonForm"]["prixtotal"];  
    var dateliv = document.forms["LivraisonForm"]["dateliv"];  

    if (id.value == "") { 
        alert("Mettez l'ID de la commande."); 
        id.focus(); 
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

<style>
    /* Form table */
.form-table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

.form-table td {
    padding: 10px;
}

.form-table td label {
    font-weight: bold;
}

.form-table input[type="text"],
.form-table input[type="number"],
.form-table input[type="email"],
.form-table input[type="date"] {
    padding: 5px;
    border: none;
    border-radius: 3px;
    box-shadow: 0 0 3px #ccc;
    width: 100%;
}

/* Add button */
.btn-add {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn-add:hover {
    background-color: #3e8e41;
}

/* Container and title */
.container {
    max-width: 600px;
    margin: 
}
</style>







<button><a href="afficherlivraison.php" class="link-info">retour page listes</a></button> 
<br>
<link rel="stylesheet" href="liv.css">
         
<!DOCTYPE html>
<html>

<head>
    <title>Ajouter une livraison</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="title">Ajouter une livraison</h1>
        <form action="ajouterlivraison.php" method="POST" name="LivraisonForm" onsubmit="return validateForm(event)">
            <table class="form-table">
                <tr>
                    <td><label>Type de commande:</label></td>
                    <td><input type="text" name="typecommande" placeholder="Type de commande" required></td>
                </tr>
                <tr>
                    <td><label>Nom du client:</label></td>
                    <td><input type="text" name="nomclient" placeholder="Nom du client" required></td>
                </tr>
                <tr>
                    <td><label>Numéro de livraison:</label></td>
                    <td><input type="number" name="numlivraison" placeholder="Numéro de livraison" required></td>
                </tr>
                <tr>
                    <td><label>Numéro du livreur:</label></td>
                    <td><input type="number" name="numlivreur" placeholder="Numéro du livreur" required></td>
                </tr>
                <tr>
                    <td><label>Adresse:</label></td>
                    <td><input type="text" name="adresse" placeholder="Adresse" required></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td><label>Prix total:</label></td>
                    <td><input type="number" name="prixtotal" placeholder="Prix total" required></td>
                </tr>
                <tr>
                    <td><label>Date de livraison:</label></td>
                    <td><input type="date" name="dateliv" placeholder="Date de livraison" required></td>
                </tr>
            </table>
            <button type="submit" class="btn-add">Ajouter</button>
        </form>
    </div>
</body>

</html>
