<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <title>Login</title>
</head>
<body>

<?php
    $name = 'Aufgabenplaner: Login';
    include ('header.php');
?>

<div class = "container-fluid">

    <div class="row">
        <div class="container-fluid" style="width: 70%" ><form>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email-Adresse:</label>
                    <input type="email" id="email" class="form-control" />
                </div>


                <div class="form-outline mb-4">
                    <label class="form-label" for="passwort">Passwort</label>
                    <input type="password" id="passwort" class="form-control" />
                </div>



                <div class="form-outline mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="agb" checked />
                        <label class="form-check-label" for="agb"> AGBs und Datenschutzbedingung akzeptieren </label>
                    </div>
                </div>



                <button type="button" class="btn btn-primary">Einloggen</button>


                <div class="form-outline mb-4">
                    Noch nicht registriert? <a href="">Registrierung</a>
                    <br>
                    <br>
                    Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="aktuelellesProjekt.php">Überspringen</a>
                </div>


            </form></div>


    </div>



</div>


</body>
</html>
