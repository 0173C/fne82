<?php
session_start();
if (!isset($_SESSION['privilege'])) {
    header("Location: login.php");
}

echo ('
    <title>Fne82</title>
    <link rel="stylesheet" href="./style.css">
    <script src="script.js"></script>
');

include ("log_db.php");
$request = "SELECT * FROM fne82.evenements";
$result = $conn->query($request);
if ($result && $result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $nom = $row['nom'];
        $date = $row['date'];
        $animateur = $row['animateur'];
        echo ("
        <div class='event'>
        Nom : $nom - Animateur : $animateur - date : $date
        </div>
        ");
    }
} else {
    echo "Aucun résultat";
}

?>