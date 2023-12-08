<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="../Css/admin/demande.css">
    </head>
    <body>
    <a class="back-button" href="dash.php">< Back</a>

<?php
include("dbconnect.php");

// Query the database
$sql = "SELECT * FROM demande";
$result = mysqli_query($conn, $sql);

// Output the table
echo "<h1>Gestion des demandes</h1><div class='container'>";
echo "<table>";
echo "<thead><tr><th>ID</th><th>Idinscription</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Idvoiture</th><th>Marque</th><th>Modèle</th><th>Détails</th><th>Date</th><th>Heure</th><th>Status1</th><th>Action</th></tr><thead>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody><tr>";
    echo "<td>" . $row["ID_demande"] . "</td>"; // Replace "ID" with the appropriate column name from your database
    echo "<td>" . $row["idinscription"] . "</td>";
    echo "<td>" . $row["nom"] . "</td>";
    echo "<td>" . $row["prenom"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["Id_Voiture"] . "</td>";
    echo "<td>" . $row["marque"] . "</td>";
    echo "<td>" . $row["modele"] . "</td>";
    echo "<td>" . $row["details"] . "</td>";
    echo "<td>" . $row["date1"] . "</td>";
    echo "<td>" . $row["heure1"] . "</td>";
    echo "<td>" . $row["Status1"] . "</td>";
    echo "<td><a href='edit_demande.php?ID_demande=" . $row["ID_demande"] . "'><img src='../Image/edit.png' width='15px'></a> | <a href='delete_demande.php?ID_demande=" . $row["ID_demande"] . "'><img src='../Image/delete.png' width='17px' onclick='return confirm(\"Etes vous sûre de vouloir supprimer la demande?\");'></a></td>";
    echo "</tr></tbody>";
}
echo "</table>";
echo "</div>";

// Close connection
mysqli_close($conn);
?>
    </body>
</html>
