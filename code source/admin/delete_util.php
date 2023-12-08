<?php
include("dbconnect.php");

// Check if idinscription parameter is set
if (isset($_GET['idinscription'])) {
    $idinscription = $_GET['idinscription'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM inscription WHERE idinscription = $idinscription";

    if (mysqli_query($conn, $sql)) {
        echo "utilisateur effacé avec succès.";
    } else {
        echo "Error deleting contact: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Redirect back to the page where you display the table
header("Location: admin_utilisateur.php"); // Change 'admin.php' to your actual page name
?>
