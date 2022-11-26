<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; background: rgb(3,70,4); background: linear-gradient(43deg, rgba(3,70,4,1) 0%, rgba(9,121,67,1) 47%, rgba(22,163,0,1) 100%);">
        <div class="col-6 d-flex justify-content-center align-items-center bg-white" style="height: 100vh;" >
            <div class="col-6 d-flex justify-content-center align-items-center" style="height: 70vh;" >
                <div class="col-10">
                    <div class="col d-flex justify-content-start">
                        <h1>Anmelden</h1>
                    </div>
                  <form action="php/login.php" method="post">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Benutzername</label>
                        <input name="username" type="text" id="username" class="form-control" placeholder="Benutzername"/>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Passwort</label>
                        <input name="password" type="password" id="password" class="form-control" placeholder="********" />
                    </div>
                    <input name="submit" id="submit"  type="submit" value="Einloggen">
                    <div class="text-center">
                      <p style="margin-top: 5%;">Noch kein Mitglied? <a href='registrierung.php'>Registrieren</a></p>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="col-8 d-flex justify-content-center align-items-center" >
                <img src="src/img/reh.jpg" class="img-fluid" alt="Rehwild" style="height: 85vh; border-radius: 5%;">
            </div>
        </div>
    </div>
</body>
</html>