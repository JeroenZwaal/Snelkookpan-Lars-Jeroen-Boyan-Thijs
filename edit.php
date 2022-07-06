<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg="Je moet eerst inloggen!";
        header("Location: ../login.php?msg=$msg");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update status</title>
    <?php require_once 'head.php'; ?>
</head>

<body>
<?php require_once 'header.php'; ?>
<div class="container">
        <h1>Aanpassen status</h1>

        <?php
        require_once 'backend/conn.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM houses WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $houses = $statement->fetch(PDO::FETCH_ASSOC);
        ?>


        <form action="backend/houseController.php" method="post" >
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $houses['id']; ?>">
            <label for="status">Status:</label>	
                                <select name="status" id="status">
                                    <option value="0"> Vrij </option>
                                    <option value="1"> Bezet </option>
                                    </select>
                                    <input type="submit" value="Submit" id="submit">
        </form>
                <div class="houses-container">
                    <img src="<?php echo $houses['image']; ?>" alt="">
                    <div class="houses-info">
                        <div class="houses-info-column">
                            <p><?php echo $houses['zipcode']; ?> <?php echo $houses['streetname']; ?></p>
                            <p><?php echo $houses['area']; ?></p>
                            <p>Kamers: <?php echo $houses['rooms']; ?></p>
                            <p>&euro;<?php echo number_format($houses['price'], 0, ",", ".") . "/week"; ?></p>
                        </div>
                    </div>
                    <p><?php echo $houses['description']; ?></p>
                </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>

</body>

</html>

