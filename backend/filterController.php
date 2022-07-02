<?php

session_start();

$action = $_POST['action'];
if($action == "filter")
{
    $location = $_POST['location'];
    $rooms = $_POST['rooms'];
    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];


    $query = "SELECT * FROM houses WHERE status = 0";



    if (!empty($location))
    {
        $query = $query . " AND area = '$location'";
    }
    if (!empty($rooms))
    {
        $query = $query . " AND rooms = $rooms";
    }
    if (!empty($price_min))
    {
        $query = $query . " AND price > $price_min";
    }
    if (!empty($price_max))
    {
        $query = $query . " AND price < $price_max";
    }

    $_SESSION['query'] = $query;
    header("Location: ../houses.php");
        
}

?>