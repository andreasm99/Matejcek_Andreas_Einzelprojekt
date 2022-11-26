<?php

$db_host = "db";
$db_user = "admin";
$db_password = "admin";
$db_name = "revierplan";

$connection = new MySQLi($db_host, $db_user, $db_password, $db_name);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['delete'])) {
    $id = $_POST['rowid'];
    $delete = "DELETE FROM a_abschuss WHERE id='$id'";

    if (mysqli_query($connection, $delete)) {
        header('Location: ../eintrag_anlegen.php');
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($connection);
    }
}

/*
if ($connection->query($delete) === TRUE) {
  echo "Zeile gelöscht";
} else {
  echo "Zeile konnte nicht gelöscht werden. Fehler: " . $connection->error;
}
*/
$connection->close();

?>