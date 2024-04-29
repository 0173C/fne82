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
$request = "SELECT * FROM fne82.dossier_fne82";
$result = $conn->query($request);

if ($result && $result->num_rows > 0) {
    echo '<div id="dossier">';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        foreach ($row as $key => $value) {
            echo "<p>$key : $value</br></p>";
        }
        echo "\n";
    }
    echo '</div>';
} else {
    echo "Aucun résultat";
}


?>