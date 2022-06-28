<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg="Je moet eerst inloggen!";
        header("Location: ../login.php?msg=$msg");
        exit;
    }
?>
<!doctype html>
<html lang="nl">

<head>
    <title>Huis / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuw huis toevoegen</h1>

        <form action="../backend/houseController.php" method="POST">
            <input type="hidden" name="action" value="create">
            <input type="hidden" name="id" value="<?php echo $id; ?>">	
            <div class="form-group">
                <label for="huis">Naam huis: </label>
                <input type="text" name="huis" id="huis" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value=""> Kies het type </option>
                    <option value="Appartement"> Appartement </option>
                    <option value="Alleenstaand Huis"> Alleenstaand Huis </option>
                    <option value="Villa"> Villa </option>
                    <option value="Rijtjeshuis"> Rijtjeshuis </option>
                    <option value="Tweeonderéénkap"> Tweeonderéénkap </option>
                    <option value="Penthouse"> Penthouse </option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Datum beschikbaar:</label>
                <input type="date" name="date" id="date" class="form-input">
            </div>
            <div class="form-group">
                <label for="overig">Overig:</label>
                <textarea name="overige" id="overig" class="form-input" rows="4"></textarea>
            </div>
            
            <input type="submit" value="Verstuur huis">

        </form>
    </div>  

</body>

</html>
