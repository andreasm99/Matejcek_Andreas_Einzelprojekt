<?php

    session_start();
	
	
    if(empty($_SESSION['userid'])){
        header('Location: login.php');

    }
    else{
        $userid = $_SESSION['userid'];
        
    }

$type = $_POST["type"];
$animal = $_POST["animal"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$weight = $_POST["weight"];
$date = $_POST["date"];
$time = $_POST["time"];

$db_host = "db";
$db_user = "admin";
$db_password = "admin";
$db_name = "revierplan";

$connection = new MySQLi($db_host, $db_user, $db_password, $db_name);

$namenabfrage = "SELECT vorname FROM a_user WHERE id='".$userid."'";
$result = $connection->query($namenabfrage);
$row = $result->fetch_assoc();
$name = $row["vorname"];

if(mysqli_connect_errno()){
    die("Verbindungsfehler: " . mysqli_connect_error());
}

$sql = "INSERT INTO a_abschuss (name, type, animal, gender, age, weight, date, time)
        VALUES ('".$name."','".$type."', '".$animal."', '".$gender."', '".$age."', '".$weight."', '".$date."', '".$time."')";

if ($connection->query($sql) === TRUE){
    header('Location: ../eintrag_anlegen.php');
} else {
    echo "Eintrag konnte nicht angelegt werden";
}

$connection->close();

?>