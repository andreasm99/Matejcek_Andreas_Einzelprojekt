<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; background: rgb(59,25,0); background: linear-gradient(43deg, rgba(59,25,0,1) 0%, rgba(121,60,9,1) 47%, rgba(119,52,0,1) 100%);">
        <!-- Linke Seite -->
        <div class="col-6 d-flex justify-content-center align-items-center bg-white" style="height: 100vh;" >
            <div class="col-6 d-flex justify-content-center align-items-center" style="height: 70vh;" >
                <div class="col-10">
                    <div class="col d-flex justify-content-start">
                        <h1>Registrieren</h1>
                    </div>
                  <form action="php/user_anlegen.php" method="post">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Benutzername</label>
                        <input name="username" type="text" id="username" class="form-control" placeholder="Benutzername"/>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Passwort</label>
                        <input name="password" type="password" id="password" class="form-control" placeholder="********" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">E-Mail Adresse</label>
                        <input name="email" type="email" id="email" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="vorundnachname">Vorname und Nachname</label>
                        <input style="margin-bottom: 2%;" name="vorname" type="text" id="vorname" class="form-control" placeholder="Vorname"/>
                        <input style="margin-top: 2%;" name="nachname" type="text" id="nachname" class="form-control" placeholder="Nachname"/>
                    </div>
                    <input name="submit" id="submit"  type="submit" value="Registrieren">
                    <div class="text-center">
                      <p style="margin-top: 5%;">Bereits Mitglied? <a href='index.php'>Anmelden</a></p>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <!-- Rechte Seite -->
        <div class="col-6 d-flex justify-content-center">
            <div class="col-8 d-flex justify-content-center align-items-center" >
                <img src="src/img/reg.jpg" class="img-fluid" alt="Rehwild" style="height: 85vh; border-radius: 5%;">
            </div>
        </div>
    </div>
</body>
</html>