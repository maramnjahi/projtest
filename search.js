
function searchTable() {
    // Récupérer la zone de texte de recherche et le tableau HTML
    var input = document.getElementById("searchInput");
    var table = document.getElementById("myTable");
  
    // Récupérer les lignes du tableau
    var rows = table.getElementsByTagName("tr");
  
    // Parcourir les lignes du tableau et cacher celles qui ne correspondent pas à la recherche
    for (var i = 0; i < rows.length; i++) {
      var cells = rows[i].getElementsByTagName("td");
      var found = false;
      for (var j = 0; j < cells.length; j++) {
        if (cells[j].textContent.toUpperCase().indexOf(input.value.toUpperCase()) > -1) {
          found = true;
          break;
        }
      }
      if (found) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  }
  