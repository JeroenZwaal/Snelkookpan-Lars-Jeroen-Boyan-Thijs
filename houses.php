
<?php session_start(); ?>

<!doctype html>
<html lang="nl">

<head>
    <title>Snelkookpan</title>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <main class="houses">
        <div class="filter">
            <p>Filter opties</p>
            <form action="">
                
            </form>

        </div>
    
        <div class="grid-container">
            <?php 
            require_once 'backend/conn.php';
            $query = "SELECT * FROM houses WHERE status = 0";
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
                            <p>&euro;<?php echo number_format($house['price'], 0, ",", "."); ?></p>
                        </div>
                        <div class="house-info-column">
                            <a class="reserve" href="">Reserveer</a>
                        </div>
                    </div>
                    
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>
