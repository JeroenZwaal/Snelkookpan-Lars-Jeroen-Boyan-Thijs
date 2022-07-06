<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg="Jemoeteerstinloggen!";
        header("Location: ../login.php?msg=$msg");
        exit;
    }
?>
<?php

$action = $_POST["action"];
$id = $_POST["id"];
if ($action == "create")
{
$streetname = $_POST['streetname'];
if(empty($streetname))
{
	$errors[] = "Vul de streetname-naam in";
}
//
$image = $_POST['image'];
if(empty($image))
{
	$errors[] = "Kies de afbeelding";
}
//
$price = $_POST['price'];
if(!isset($price))
{
    $errors[] = "Vul de prijs in";
}
$description = $_POST['description'];
if(isset($errors))
{
	var_dump($errors);
	die();
}
//
$area = $_POST['area'];
if(empty($area))
{
    $errors[] = "Vul de omgeving in";
}
//
$zipcode = $_POST['zipcode'];
if(empty($zipcode))
{
    $errors[] = "Vul de postcode in";
}
//
$status = $_POST['status'];
if(($status = "Vrij"))
{
    $status = 1;
}
elseif(($status = "Bezet"))
{
    $status = 0;
}



require_once 'conn.php';
$query = "INSERT INTO houses (streetname, image, price, description, area, zipcode, status) VALUES(:streetname, :image, :price, :description, :area, :zipcode, :status)";
$statement = $conn->prepare($query);
$statement->execute([
	":streetname" => $streetname,
	":image" => $image,
    ":price" => $price,
	":description" => $description,
    ":area" => $area,
    ":zipcode" => $zipcode,
    ":status" => $status
]);
header("Location:../houses.php?msg=Huis opgeslagen");
}

if($action == "update")
{
    $id = $_POST['id'];
    $status = $_POST['status'];
    if(($status = "Vrij"))
    {
        $status = 0;
    }
    elseif(($status = "Bezet"))
    {
        $status = 1;
    }

    require_once 'conn.php';
    $query = "UPDATE houses SET status = :status WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":status" => $status,
    ]);
    header("Location:index.php?msg=Status opgeslagen");
}