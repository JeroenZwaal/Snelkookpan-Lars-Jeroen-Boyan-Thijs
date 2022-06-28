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
$huis = $_POST['huis'];
if(empty($huis))
{
	$errors[] = "Vul de huis-naam in";
}
//
$type = $_POST['type'];
if(empty($type))
{
	$errors[] = "Kies uw type";
}
//
$date = $_POST['date'];
if(empty($date))
{
    $errors[] = "Vul de datum in";
}
$overig = $_POST['overig'];
if(isset($errors))
{
	var_dump($errors);
	die();
}


//1. Verbinding
require_once 'conn.php';
$query = "INSERT INTO houses (huis, type, date, overig) VALUES(:huis, :type, :date, :overig)";
$statement = $conn->prepare($query);
$statement->execute([
	":huis" => $huis,
	":type" => $type,
    ":date" => $date,
	":overig" => $overige
]);
header("Location:../meldingen/index.php?msg=Huis opgeslagen");
}