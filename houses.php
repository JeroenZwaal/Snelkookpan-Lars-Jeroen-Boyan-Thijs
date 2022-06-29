
<?php session_start(); ?>

<!doctype html>
<html lang="nl">

<head>
    <title>Snelkookpan</title>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <?php require_once 'header.php';?>
    <main class="houses">
        <div class="filter">
            <p>Filter opties</p>
            <form action="backend/filterController.php" method="post">
                <div class="form-group">
                    <label for="location">Locatie</label>
                    <input class="input" type="text" name="location" id="location" placeholder="locatie">
                </div>
                <div class="form-group">
                    <label for="rooms">Kamers</label>
                    <input class="input" type="number" name="rooms" id="rooms" placeholder="kamers">
                </div>
                <div class="form-group">
                    <label for="price">Prijs</label>
                    <div>
                        <input class="price-input" type="number" name="price_min" id="price_min" placeholder="min">
                        <input class="price-input" type="number" name="price_max" id="price_max" placeholder="max">
                    </div>
                </div>
                <input type="hidden" name="action" value="filter">
                <input class="submit" type="submit">
            </form>

        </div>
    
        <div class="grid-container">
            <?php 
            require_once 'backend/conn.php';
            $query = $_SESSION['query'];
            $statement = $conn->prepare($query);
            $statement->execute();
            $houses = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach($houses as $house)
            {
            ?>
                <div class="house-container">
                    <img src="<?php echo $house['image']; ?>" alt="">
                    <div class="house-info">
                        <div class="house-info-column">
                            <p><?php echo $house['zipcode']; ?> <?php echo $house['streetname']; ?></p>
                            <p><?php echo $house['area']; ?></p>
                            <p>Kamers: <?php echo $house['rooms']; ?></p>
                            <p>&euro;<?php echo number_format($house['price'], 0, ",", ".") . "/week"; ?></p>
                        </div>
                        <div class="house-info-column">
                            <a class="reserve" href="">Reserveer</a>
                        </div>
                    </div>
                    <p><?php echo $house['description']; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>
