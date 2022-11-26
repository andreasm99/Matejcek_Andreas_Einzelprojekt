<?php
    session_start();
	
	
    if(empty($_SESSION['userid'])){
        header('Location: login.php');
        echo    '<script type="text/javascript">
                window.onload = function () { alert("Anmeldung fehlgeschlagen!"); } 
                </script>';
    }
    else{
        $userid = $_SESSION['userid'];
        $id = $_GET["id"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eintrag bearbeiten</title>
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center bg-white" style="height: 100vh;">
<div class="col-6 d-flex justify-content-center align-items-center bg-body shadow p-3 mb-5 rounded" id="con-leftside" >
            <div class="col-12" style="height: 80vh; margin: 8%;" >
                <div class="col-10">
                    <h4 class="headerfont">Eintrag bearbeiten</h4>
                    <hr class="headerline">
                </div>
                <!-- Form Eintrag hinzufügen -->
                <form action="php/eintrag_updaten.php?id=<?php echo $id; ?>" method="post">
                    <!-- Name des Users -->
                    
                    <!-- Art des Eintrags -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <span class="entry-label">
                            Art des Eintrags
                        </span>
                        <div class="col-12 d-flex justify-content-left align-items-center">
                            <input type="radio" class="btn-check" name="type" id="abschuss-radio" autocomplete="off" value="Abschuss" checked>
                            <label class="btn btn-success" for="abschuss-radio" id="abschuss">
                                <span class="material-symbols-outlined">
                                    add
                                </span>Abschuss
                            </label>
                            <input type="radio" class="btn-check" name="type" id="sichtung" autocomplete="off" value="Sichtung">
                            <label class="btn btn-success" for="sichtung">
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>Sichtung
                            </label>
                        </div>
                    </div>
                    <!-- Wildart -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <span class="entry-label">Wildart</span>
                        <div class="col-12 d-flex justify-content-left align-items-center">
                            <div class="dropdown">
                                <select name="animal" class="form-select" aria-label="Wildart auswählen">
                                    <option selected value="Rehwild">Rehwild</option>
                                    <option value="Schwarzwild">Schwarzwild</option>
                                    <option value="Rotwild">Rotwild</option>
                                    <option value="Muffelwild">Muffelwild</option>
                                    <option value="Fuchs">Fuchs</option>
                                    <option value="Waschbär">Waschbär</option>
                                    <option value="Fasan">Fasan</option>
                                    <option value="Rebhuhn">Rebhuhn</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Geschlecht -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <span class="entry-label">Geschlecht</span>
                        <div class="col-12 d-flex justify-content-left align-items-center ">
                            <div class="col-12 d-flex justify-content-left align-items-center">
                                <input type="radio" class="btn-check" name="gender" id="maennlich-radio" autocomplete="off" value="🔵" checked>
                                <label class="btn btn-success" for="maennlich-radio" id="maennlich">
                                    <span class="material-symbols-outlined">
                                        male
                                    </span>Männlich
                                </label>

                                <input type="radio" class="btn-check" name="gender" id="weiblich" autocomplete="off" value="🟣">
                                <label class="btn btn-success" for="weiblich">
                                    <span class="material-symbols-outlined">
                                        female
                                    </span>Weiblich
                                </label>

                                <input type="radio" class="btn-check" name="gender" id="ungewiss" autocomplete="off" value="⚫">
                                <label class="btn btn-success" for="ungewiss">
                                    Ungewiss
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Alter -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <span class="entry-label">Alter</span>
                        <div class="col-12 d-flex justify-content-left align-items-center ">
                            <input type="number" placeholder="0" name="age"/>
                        </div>
                    </div>
                    <!-- Gewicht -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <span class="entry-label">Gewicht</span>
                        <div class="col-12 d-flex justify-content-left align-items-center ">
                            <input type="number" placeholder="0" name="weight"/>
                        </div>
                    </div>
                    <!-- Datum und Uhrzeit -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <span class="entry-label">Datum & Uhrzeit</span>
                        <div class="col-10 d-flex justify-content-left align-items-center ">
                                <div class="col-7" style="margin-right: 5%;">
                                <div class="input-group date" id="datepicker">
                                    <input type="date" class="form-control" id="date" name="date"/>
                                </div>
                                </div>
                            <div class="cs-form">
                                <input type="time" class="form-control" value="10:05" name="time"/>
                            </div>
                        </div>
                    </div>
                    <!-- Submitbutton -->
                    <div class="col-10 " style="margin-top: 2%; height: 8vh;">
                        <div class="col-12 d-flex justify-content-left align-items-center ">
                            <input name="submit" id="submit" type="submit" value="Eintrag bearbeiten">
                        </div>
                    </div>
                </form>
                <!-- Aktiver User -->
                <div class="col-10 bg-light d-flex justify-content-center align-items-center" style="margin-top: 2%; height: 8vh; position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden;">
                    <div class="col-2 d-flex justify-content-center align-items-center" style="padding-left: 5%; height: 5vh;">
                        <img src="src/img/Avatar.png" class="img-fluid" alt="Profilbild" style="height: 100%; border-radius: 5%;">
                    </div>
                    <div class="col-10 d-flex justify-content-between align-items-center " style="padding-left: 5%; padding-right: 5%;">
                        <span id="nametag-left">
                            <?php   
                                    $db_host = "db";
                                    $db_user = "admin";
                                    $db_password = "admin";
                                    $db_name = "revierplan";

                                    $connection = new MySQLi($db_host, $db_user, $db_password, $db_name);
									

                                    if($connection->connect_error){
                                        die("Connection failed: " . $connection->connect_error);
                                    }

                                    $sql = "SELECT vorname, nachname FROM a_user WHERE id='".$userid."'";
                                    $result = $connection->query($sql);

                                    if(!$result){
                                        die("Invalid query: " . $connection->error);
                                    }

                                    while($row = $result->fetch_assoc()){
                                        echo "<span>
                                                <p style='margin-bottom: 0rem;'>" . $row["vorname"] . "</p>
                                                <p style='margin-bottom: 0rem;'>" . $row["nachname"] . "</p>
                                            </span>";
                                    }
                              ?>
                              </span>
                        <span>Revierinhaber</span>
                        <button class="btn btn-danger"><a style="text-decoration: none; color: white;" href='eintrag_anlegen.php'>Abbrechen</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>