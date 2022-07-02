<?php
session_start();
$action = $_POST['action'];

if($action == 'create')
{
    //Validatie
    $naam = $_POST['naam'];
    if(empty($naam))
    {
        $errors[] = "Vul een naam in!";
    }

    $adress = $_POST['adress'];
    if(empty($adress))
    {
        $errors[] = "Vul een adress in!";
    }

    $postcode = $_POST['postcode'];
    if(empty($postcode))
    {
        $errors[] = "Vul een postcode in!";
    }

    $postcode = $_POST['postcode'];
    if(empty($postcode))
    {
        $errors[] = "Vul een postcode in!";
    }

    $phone = $_POST['phone'];
    if(empty($phone))
    {
        $errors[] = "Vul een telefoon nummer in!";
    }

    $email = $_POST['email'];
    if(empty($email))
    {
        $errors[] = "Vul een email in!";
    }

    $begin_datum = $_POST['begin_datum'];
    if(empty($begin_datum))
    {
        $errors[] = "Vul een begin datum in!";
    }

    $eind_datum = $_POST['eind_datum'];
    if(empty($eind_datum))
    {
        $errors[] = "Vul een eind datum in!";
    }       
    //Evt. errors dumpen
    if(isset($errors))
    {
        var_dump($errors);
        die();
    }

    $user = $_SESSION['user_id'];

    require_once 'conn.php';

    $query = "INSERT INTO reserve (naam, adress, postcode, phone, email, begin_datum, eind_datum) VALUES (:naam, :adress, :postcode, :phone, :email, :begin_datum, :eind_datum)";
    
    //3. Zet query om naar statement
    $statement = $conn->prepare($query);

    //4. Voer statement uit, geef nu waarden mee voor de placeholders
    $statement->execute([
        ":naam" => $naam,
        ":adress" => $adress,
        ":postcode" => $postcode,
        ":phone" => $phone,
        ":email" => $email,
        ":begin_datum" => $begin_datum,
        ":eind_datum" => $eind_datum,
    ]);

    header("location: ../index.php");
}
