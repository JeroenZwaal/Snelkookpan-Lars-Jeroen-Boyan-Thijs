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
    <?php require_once 'head.php'; ?>
</head>

<body>

    <?php require_once 'header.php'; ?>

    <div class="container">
        <h1>Nieuw huis toevoegen</h1>

        <form action="../backend/houseController.php" method="POST">
            <input type="hidden" name="action" value="create">
            <input type="hidden" name="id" value="<?php echo $id; ?>">	
            <div class="form-group">
                <label for="streetname">Straatnaam: </label>
                <input type="text" name="streetname" id="streetname" class="form-input">
            </div>
            <div class="form-group">
                <label for="image">Afbeelding: </label>
                <input type="file" name="image" id="image" class="form-input">
            </div>
            <div class="form-group">
                <label for="price">Prijs: </label>
                <input type="number" id="price" class="form-input"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Descriptie:</label>
                <textarea name="description" id="description" class="form-input" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="area">Omgeving:  </label>
                <input type="text" name="area" id="area" class="form-input">
            </div>
            <div class="form-group">
                <label for="zipcode">Postcode:  </label>
                <input type="text" name="zipcode" id="zipcode" class="form-input">
            </div>
            <div class="form-group">
                <label for="status">Status:  </label>
                <select>
                    <option value="">Kies uw status</option>
                    <option value="Vrij">Vrij</option>
                    <option value="Bezet">Bezet</option>
                </select>
            </div>
            <input type="submit" value="Verstuur huis">

        </form>
    </div>  

</body>

</html>
