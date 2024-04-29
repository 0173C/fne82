<?php
session_start();
if (!isset($_SESSION['privilege'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fne82</title>
    <link rel="stylesheet" href="./style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1>FNE82</h1>
    <button id="evenements" onclick="events()">Accéder aux événements</button>
    <main>
        <?php
        include ("log_db.php");
        $request = "SELECT * FROM fne82.dossier_fne82";
        $result = $conn->query($request);
        if ($result && $result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $lieu = $row['lieu'];
                echo "<div id='" . $id . "' onclick='redirect_dossier(" . $id . ")' class='result'>";
                echo "<p>ID : " . $id . "</p>";
                echo "<p>Lieu : " . $lieu . "</p>";
                echo "</div>";
            }
        } else {
            echo "Aucun résultat";
        }
        ?>
    </main>
</body>