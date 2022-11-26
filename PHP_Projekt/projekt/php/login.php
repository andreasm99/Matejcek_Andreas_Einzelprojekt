<?php
    session_start();
    $login_user = $_POST["username"];
    $login_password = $_POST["password"];

    require("con.php");

    $login_user = $_POST["username"];

    $abfrage = "SELECT * FROM a_user WHERE username = '" . $login_user . "' ";
    $ergebnis = $sql->query($abfrage);
    $user = $ergebnis->fetch_assoc();

    if($user){
        // Benutzer gefunden
        if(password_verify($login_password, $user['password'])){

            $_SESSION['userid'] = $user['id'];
            
			/*
			echo "Du bist eingeloggt.<br/>
				<a href='../eintrag_anlegen.php'> Du wirst jetzt weitergeleitet</a>.";
			*/
            
			header('Location: ../eintrag_anlegen.php');
			exit();
            
        }
        else{
            echo '<script type="text/javascript">
                window.onload = function () { alert("Passwort falsch"); } 
                </script>';
        }

    }
    else{
        echo '<script type="text/javascript">
        window.onload = function () { alert("Benutzer nicht gefunden"); } 
        </script>';
    }
?>