<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_login.css">
</head>

<body>
    <div id="container">

        <form action="verification.php" method="POST">
            <h1>Login</h1>

            <label for="username"><b>Nom de l'utilisateur</b></label>
            <input type="text" id="username" class="input-field" placeholder="Nom" name="username" required>

            <label for="password"><b>Mot de passe</b></label>
            <input type="password" id="password" class="input-field" placeholder="Mot de passe" name="password"
                required>

            <input type="submit" id='submit' value='Se connecter'>

            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2) {
                    echo "<p class='error-message'>Utilisateur ou Mot de passe incorrect</p>";
                }
            }
            ?>
        </form>

    </div>
</body>
</hmtl>