<?php
// Configuration de la base de données
$host = "localhost";
$user = "utilisateur";
$password = "motdepasse";
$database = "stock";

// Connexion à la base de données
$mysqli = new mysqli($host, $user, $password, $database);

// Vérifie la connexion
if ($mysqli->connect_error) {
  die("Erreur de connexion à la base de données : " . $mysqli->connect_error);
}

// Récupère les informations sur les stocks
$query = "SELECT * FROM produits";
$result = $mysqli->query($query);

// Affiche les informations dans une table HTML
echo "<table>";
echo "<thead><tr><th>ID</th><th>Nom</th><th>Description</th><th>Prix unitaire</th><th>Seuil de réapprovisionnement</th><th>Stock disponible</th><th>Dernière commande</th><th>Dernière réception</th><th>Nombre de jours avant fin de stock imminent</th></tr></thead>";
echo "<tbody>";
while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row["ID"] . "</td>";
  echo "<td>" . $row["Nom"] . "</td>";
  echo "<td>" . $row["Description"] . "</td>";
  echo "<td>" . $row["Prix unitaire"] . "</td>";
  echo "<td>" . $row["Seuil de réapprovisionnement"] . "</td>";
  echo "<td>" . $row["Stock disponible"] . "</td>";
  echo "<td>" . $row["Dernière commande"] . "</td>";
  echo "<td>" . $row["Dernière réception"] . "</td>";
  echo "<td>" . $row["Nombre de jours avant fin de stock imminent"] . "</td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Ferme la connexion à la base de données
$mysqli->close();
?>
