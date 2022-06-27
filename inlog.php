
<?php session_start(); ?>

<!doctype html>
<html lang="nl">

<head>
    <title>Snelkookpan</title>
    <?php require_once 'head.php'; ?>
</head>

<body>
    
    
    
    <div class="container">
    
        <h1>Snelkookpan / Inloggen</h1>
        <?php
        if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        }
        ?>

        <form action="backend/loginController.php" method="POST">
            <div class="form-group">
                <label for="name">Gebruikersnaam:</label>
                <input type="text" name="name" id="name" placeholder="user1 t/m 3">
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="pass">
            </div>
            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>
