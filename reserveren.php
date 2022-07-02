<?php session_start(); ?>

<!doctype html>
<html lang="nl">

<head>
    <title>Snelkookpan</title>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <main>
    <?php require_once 'header.php'; ?>
    <div class="container">

        <h1>Snelkookpan / Reserveren / Nieuw</h1>

        <form action="backend/reserveController.php" method="POST">
            <input type="hidden" name="action" value="create">
        
            <div class="form-group">
                <label for="naam">Name:</label>
                <input type="text" name="naam" id="naam" class="form-input" placeholder="firstname lastname" >
            </div>

            <div class="form-group">
                <label for="adress">Adress:</label>
                <input type="text" name="adress" id="adress" class="form-input" placeholder="straatnaam 0">
            </div>

            <div class="form-group">
                <label for="postcode">Postcode:</label>
                <input type="postcode" name="postcode" id="postcode" class="form-input" placeholder="0000 AA">
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" id="phone" class="form-input" placeholder="0612345678">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-input" placeholder="pan@pan.com">
            </div>

            <div class="form-group">
                <label for="begin_datum">begin_datum:</label>
                <input type="date" name="begin_datum" id="begin_datum" class="form-input">
            </div>

            <div class="form-group">
                <label for="eind_datum">eind_datum:</label>
                <input type="date" name="eind_datum" id="eind_datum" class="form-input">
            </div>

            <input type="submit" value="Reservering maken">


    </div>
    </main>
</body>

</html>
