// Sélectionne toutes les cellules de la colonne "Nombre de jours avant fin de stock imminent"
const joursRestants = document.querySelectorAll("tbody td:nth-of-type(9)");

// Pour chaque cellule, vérifie si le nombre de jours est proche ou égal à zéro et ajoute une classe "alert" si nécessaire
joursRestants.forEach(function(cell) {
  if (parseInt(cell.textContent) <= 0) {
    cell.classList.add("alert");
  }
});
