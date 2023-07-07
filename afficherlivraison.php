<?php
include '../Controller/livraisonC.php';
$livraisonC = new livraisonC();
$listelivraisons = $livraisonC->afficherlivraisons();
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
                        <a href="afficherlivraison.php" class="active">
                             <span class="las la-tasks"></span>
                             <small>gestion des livraisons</small>
                         </a>
                     </li>
                     <li>
                        <a href="#" >
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
                        <div class="bg-img" style="background-image: url(2.jpg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main class="main">
          
        



      
        
  <button><a href="ajouterlivraison.php">Ajouter des livraisons</a> <img src="plus.png"weight="1" height="12" ></button>   <br>
  <link rel="stylesheet" href="liv.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <br>

 
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Liste des livraisons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="liv.css">
</head>

       
<body>
    <style>
    input,
.form-control:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
    outline-width: 0;
    outline-color: transparent;
    box-shadow: none;
    outline-style: none;
}

    </style>
 <h1 class="mt-3 mb-3">Liste des livraisons</h1>
    <div class="container">
        <main role="main" class="pb-3">
     <label for="search"> 
        <img src="search.png" weight="25" height="25">
        </label>  
         <!--Rechercher Avancée-->
     <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search " title="Type in a name">
    
<script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<br>
   <!-- fin Rechercher Avancée-->

<label for="tri-par-id">Trier par id:</label>
<select id="tri-par-id" onchange="trierTableau(0, this.value)">
  <option value="asc">Croissant</option>
  <option value="desc">Décroissant</option>
</select>
<br>

<label for="tri-par-prix">Trier par prix total:</label>
<select id="tri-par-prix" onchange="trierTableau(6, this.value)">
  <option value="asc">Croissant</option>
  <option value="desc">Décroissant</option>
</select>

     
       
        
           
            <div class="table-responsive">

               

                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                        
                            <th style="color:rgb(100, 165, 187)">id</th>
                            <th style="color:rgb(100, 165, 187)">type de commande</th>
                            <th style="color:rgb(100, 165, 187)">nom du client</th>
                            <th style="color:rgb(100, 165, 187)">numéro de livraison</th>
                            <th style="color:rgb(100, 165, 187)">numéro de livreur</th>
                            <th style="color:rgb(100, 165, 187)">adresse</th>
                            <th style="color:rgb(100, 165, 187)">email</th>
                            <th style="color:rgb(100, 165, 187)">prix total</th>
                            <th style="color:rgb(100, 165, 187)">temps de livraison</th>
                            <th style="color:rgb(100, 165, 187)">modifier</th>
                            <th style="color:rgb(100, 165, 187)">supprimer</th>
                        </tr>
                    </thead>

                    
                    <tbody id="livraison-table-body">
                
            
                        <?php foreach ($listelivraisons as $livraison) { ?>
                            <tr>
                                <td><?php echo $livraison['id']; ?></td>
                                <td><?php echo $livraison['typecommande']; ?></td>
                                <td><?php echo $livraison['nomclient']; ?></td>
                                <td><?php echo $livraison['numlivraison']; ?></td>
                                <td><?php echo $livraison['numlivreur']; ?></td>
                                <td><?php echo $livraison['adresse']; ?></td>
                                <td><?php echo $livraison['email']; ?></td>
                                <td><?php echo $livraison['prixtotal']; ?></td>
                                <td><?php echo $livraison['dateliv']; ?></td>
                                <td>
                                    <a href="modifierlivraison.php?idd=<?php echo $livraison['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> modifier</a>
                                </td>
                                <td>
                                    <a href="supprimerlivraison.php?id=<?php echo $livraison['id']; ?>"><span class="glyphicon glyphicon-trash"></span> supprimer</a>
                                </td>
                                <td>
                                <a href="afficherlivreur.php?num=<?php echo $livraison['numlivreur']; ?>" >consulter</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
               </table>
               <!--fonction trie-->
               <?php

function trierLivraisons($livraisons, $colonne, $ordre) {
    usort($livraisons, function($a, $b) use ($colonne, $ordre) {
        if ($a[$colonne] == $b[$colonne]) {
            return 0;
        }
        if ($ordre == 'asc') {
            return $a[$colonne] < $b[$colonne] ? -1 : 1;
        } else {
            return $a[$colonne] > $b[$colonne] ? -1 : 1;
        }
    });
    return $livraisons;
}

?>
<script>
    function trierTableau(colonne, ordre) {
    var table, lignes, switching, i, x, y, shouldSwitch;
    table = document.getElementById("dataTable");
    switching = true;
    while (switching) {
        switching = false;
        lignes = table.rows;
        for (i = 1; i < (lignes.length - 1); i++) {
            shouldSwitch = false;
            x = lignes[i].getElementsByTagName("td")[colonne];
            y = lignes[i + 1].getElementsByTagName("td")[colonne];
            if (ordre == 'asc') {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            lignes[i].parentNode.insertBefore(lignes[i + 1], lignes[i]);
            switching = true;
        }
    }
}

</script>
 <!-- fin fonction trie-->
 </script>


    </table>
    <button class="btn btn-primary" id="btnExport" onclick="ExportToExcel('xlsx')"><i class="far fa-file-dataTable"></i> export To Excel</button>
    <script>
    function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('dataTable');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "livraison" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('gestiondeslivraisons.' + (type || 'xlsx')));
    }


</script>
<!-- Excel library-->
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>


</script>
<a href="indexmail.php" class="btn btn-sm bg-white btn-icon-text border">
  <i class="mdi mdi-email btn-icon-prepend"></i> Email
</a>


            </div>



        </main>
    </div>
</body>

</html>
