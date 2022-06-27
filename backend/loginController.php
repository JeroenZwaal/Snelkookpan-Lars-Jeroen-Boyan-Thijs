<?php 
session_start();

$name = $_POST['name'];
$password = $_POST['password'];

require_once 'conn.php';

$query = "SELECT * FROM users WHERE name = :name";

$statement = $conn->prepare($query);
$statement->execute([":name" => $name]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1){
	die("Error: account bestaat niet");
}

if(!password_verify($password, $user['password'])){
	die("Error: wachtwoord niet juist");
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['name'] = $user['name'];
header("location: ../index.php");
?>
