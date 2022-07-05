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
if(empty($price))
{
    $errors[] = "Vul de datum in";
}
//
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
if(empty($status))
{
    $errors[] = "Vul de status in";
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
    if(empty($status))
    {
        $errors[] = "Vul een status in";
    }

    require_once 'conn.php';
    $query = "UPDATE houses SET status = :status, WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":status" => $status,
    ]);
    header("Location:index.php?msg=Taak opgeslagen");
}