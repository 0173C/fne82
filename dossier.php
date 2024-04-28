<?php
session_start();
if (!isset($_SESSION['privilege'])) {
    header("Location: login.php");
}
?>