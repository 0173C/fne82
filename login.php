<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">

        <form action="verification.php" method="POST">
            <h1>Login</h1>

            <label><b>Nom de l'utilisateur</b></label>
            <input type="text" placeholder="Nom" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Mot de passe" name="password" required>

            <input type="submit" id='submit' value='Se connecter'>
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err = 2)
                    echo "<p style='color:red'>Utilisateur ou Mot de passe incorrect</p>";
            }
            ?>
    </div>
</body>
</hmtl>