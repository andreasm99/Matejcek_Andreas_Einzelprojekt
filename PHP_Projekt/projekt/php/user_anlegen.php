<?php

    require("con.php");

    $new_username = $_POST["username"];
    $new_password = $_POST["password"];
    $new_email = $_POST["email"];
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];

    $new_password = password_hash($new_password, PASSWORD_DEFAULT);

    $abfrage = "INSERT INTO a_user (username, password, email, vorname, nachname)
                VALUES('".$new_username."', '".$new_password."', '".$new_email."', '".$vorname."', '".$nachname."')";

    if($sql->query($abfrage) === TRUE){
        echo "Konto erfolgreich angelegt";
        echo "</br> Jetzt <a href = '../index.php'> anmelden </a>.";
    }
    else{
        echo "Benutzer konnte nicht angelegt werden";
    }

?>