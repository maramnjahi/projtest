<?php
include '../controller/livreurC.php';
$livreurC = new livreurC();
$num=$_GET['num'];
if(!empty($num)){
$listelivreur = $livreurC->joinlivraison($num);}
else
{
$listelivreur = $livreurC->afficherlivreur();}
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
                        <a href="afficherlivraison.php" >
                             <span class="las la-tasks"></span>
                             <small>gestion des livraisons</small>
                         </a>
                     </li>
                     <li>
                        <a href="afficherlivreur.php" class="active" >
                             <span class="las la-tasks"></span>
                             <small>livreurs</small>
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
                        <div class="bg-img" style="background-image: url(2.jpg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>

      
 <button><a href="ajouterlivreur.php">Ajouter un livreur</a></button> 
    <center>
        <h1> Les livreurs disponibles </h1>
    </center>
    <div class="table-responsive"></div>
    <table border="1" align="center">
        <tr>
            <th style="color:rgb(100, 165, 187)">numlivreur</th>
            <th style="color:rgb(100, 165, 187)">nom </th>
            <th style="color:rgb(100, 165, 187)">prenom</th>
            <th style="color:rgb(100, 165, 187)">email</th>
            <th style="color:rgb(100, 165, 187)">adresse</th>
            <th style="color:rgb(100, 165, 187)">cin</th>
            <th style="color:rgb(100, 165, 187)">dateins</th>
            <th style="color:rgb(100, 165, 187)">Modifier</th>
            <th style="color:rgb(100, 165, 187)">Supprimer</th>
        </tr>
        <?php
		foreach ($listelivreur as $livreur) {
		?>
        <tr>
            <td><?php echo $livreur['numlivreur']; ?></td>
            <td><?php echo $livreur['nom']; ?></td>
            <td><?php echo $livreur['prenom']; ?></td>
            <td><?php echo $livreur['email']; ?></td>
            <td><?php echo $livreur['adresse']; ?></td>
            <td><?php echo $livreur['cin']; ?></td>
            <td><?php echo $livreur['dateins']; ?></td>
            <td>
            <a href="modifierlivreur.php?idd=<?php echo $livreur['numlivreur']; ?>">modifier</a> <img src="edit.png" weight="1" height="12">
            </td>
          
          
            <td>
                <a href="supprimerlivreur.php?numlivreur=<?php echo $livreur['numlivreur']; ?>">Supprimer</a> <img src="trash.png" weight="1" height="12">
                
            </td>
           
            
        </tr>
        <?php
		}
		?>
    </table>
    </div>
    </main>
</body>

</html>
         