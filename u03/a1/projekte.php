<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <title>Personen</title>
</head>
<body>

<?php
$name = "Aufgabenplaner: Projekte";
include "header.php";
?>

<div class="row">

    <div class="col-2">
        <?php include "menu.php"?>
    </div>

    <div class="col-8" style="min-width: max-content">


        <div class="container-fluid">



                <div class="form-group" >
                    <label for="selectpicker" style="font-size:calc(5px + 1.5vw)">Projekt Auswählen:</label>
                    <select class="selectpicker form-control" aria-label=".form-select-lg example" id="selectpicker" style="font-size: calc(2px + 1.5vw)">
                        <option selected>- bitte auwählen -</option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>

                    <div style="margin-top: 2vw">
                        <button type="button" class="btn btn-primary">Auswählen</button>
                        <button type="button" class="btn btn-primary">Bearbeiten</button>
                        <button type="button" class="btn btn-primary" style="background-color: #c92f0c; outline-color: #c92f0c">Löschen</button>
                    </div>


                    <div class="form-outline mb-4">
                        <label class="form-label" for="pName" style="font-size:calc(5px + 1.5vw)">Projektname:</label>
                        <input type="text" id="pName" class="form-control" placeholder="Projekt"/>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="pDesc" style="font-size:calc(5px + 1.5vw)">Projektbeschreibung:</label>
                        <textarea class="form-control" id="pDesc" rows="3" placeholder="Beschreibung"></textarea>
                    </div>

                    <div style="margin-top: 2vw">
                        <button type="button" class="btn btn-primary">Speichern</button>
                        <button type="button" class="btn btn-primary" style="background-color: #0cc9ad">Reset</button>
                    </div>


                </div>



        </div>



    </div>


</div>
</body>
</html>