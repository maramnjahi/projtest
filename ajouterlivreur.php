<?PHP
include_once "../Controller/livreurC.php";
include_once "../Model/livreur.php";


$error = "";

$livreur = null;

$livreurC = new livreurC();
if (
    isset($_POST["numlivreur"])
) {
    if (
        !empty($_POST["numlivreur"])
    ) {
        $livreur = new livreur(                                                    
          $_POST['numlivreur'],  
          $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['adresse'],
            
            $_POST['cin'],
            $_POST['dateins']
        );
        $livreurC->ajouterlivreur($livreur);
        header('Location:afficherlivreur.php');
    } else
        $error = "Missing information";
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
                        <a href="2.html" class="active">
                             <span class="las la-tasks"></span>
                             <small>liste des livreurs</small>
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
                        <div class="bg-img" style="background-image: url(1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
        <script>
function validateForm(event) {
             
    var numlivreur = document.forms["LivreurForm"]["numlivreur"];  
    var nom = document.forms    ["LivreurForm"]["nom"]; 
    var prenom = document.forms["LivreurForm"]["prenom"];  
    var email =  document.forms["LivreurForm"]["email"];  
    var adresse = document.forms["LivreurForm"]["adresse"];  
    var cin =  document.forms["LivreurForm"]["cin"];  
    var dateins = document.forms["LivreurForm"]["dateins"];  

    if (numlivreur.value == "") { 
        alert("Mettez le numéro du livreur."); 
        numlivreur.focus(); 
        return false; 
    }      
    if (nom.value == "") { 
        alert("Mettez votre adresse."); 
        nom.focus(); 
        return false; 
    }  
    
    if (prenom.value == "") { 
        alert("Mettez votre adresse."); 
        prenom.focus(); 
        return false; 
    }    
    if (email.value == "") { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    } 
    if (adresse.value == "") { 
        alert("Mettez votre adresse."); 
        adresse.focus(); 
        return false; 
    }    
   
    if (cin.value == "") { 
        alert("Mettez cin valide."); 
        cin.focus(); 
        return false; 
    } 
    if (dateins.value == "") { 
        alert("Mettez la date d'inscription ."); 
        dateins.focus(); 
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



<table class="table table-striped">
                        
                        <tbody> 
                            <form action="ajouterlivreur.php" method="POST" name="LivreurForm" onsubmit="return validateForm(event)">
                           

                            <div>
        <label for="numlivreur">Numero Livreur</label>
        <input type="number" id="numlivreur" name="numlivreur">
    </div>
                           

	<div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>

	<div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>




	<div>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
    </div>

	<div>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse">
    </div>
    

    <div>
        <label for="cin">CIN :</label>
        <input type="number" id="cin" name="cin">
    </div>
    <div>
        <label for="dateins">Date inscription :</label>
        <input type="date" id="dateins" name="dateins">
    </div>

	
                                <input type="submit" class="btn" value="Ajouter">
                                <input type="reset" class="btn" value="Annuler">
                            </form>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
               
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
            
              </div>
              <div class="col-lg-12 stretch-card">
           
              </div>
            </div>
          </div>
          
       
          </div>
                    
          </html>