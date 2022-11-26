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
$id = $_GET['id'];

$db_host = "db";
$db_user = "admin";
$db_password = "admin";
$db_name = "revierplan";

$connection = new MySQLi($db_host, $db_user, $db_password, $db_name);

$change = "UPDATE a_abschuss SET type='$type', animal='$animal', gender='$gender', age='$age', weight='$weight', date='$date', time='$time' WHERE id = $id";
        $ergebnis = $connection->prepare($change);
        $ergebnis = $ergebnis->execute();


if ($change){
    header('Location: ../eintrag_anlegen.php');
    
} else {
    echo "Eintrag wurde nicht bearbeitet";
}

$connection->close();

?>