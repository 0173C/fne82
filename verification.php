<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] !== "" && $_POST['password'] !== "") {
        if ($_POST['username'] != "root" && $_POST['password'] != "btssio32") {
            $count = 0;
        } else {
            $count = 1;
        }
        if ($count != 0) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['privilege'] = "admin";
            header('Location: index.php');
        } else {
            header('Location: login.php?erreur=1');
        }
    } else {
        header('Location: login.php?erreur=2');
    }
} else {
    header('Location: login.php');
}
mysqli_close($db);
?>