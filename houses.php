
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
        </div>

        <div class="grid-container">
            <?php 
            require_once 'backend/conn.php';
            $query = "SELECT * FROM houses";
            $statement = $conn->prepare($query);
            $statement->execute();
            $houses = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach($houses as $house)
            {
            ?>
                <div class="house-container">
                    <img src="<?php echo $house['image']; ?>" alt="">
                    <p><?php echo $house['zipcode']; ?> <?php echo $house['streetname']; ?></p>
                    <p><?php echo $house['area']; ?></p>
                    <p><?php echo $house['price']; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>
