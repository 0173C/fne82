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
</body>