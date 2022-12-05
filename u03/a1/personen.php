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
$name = "Aufgabenplaner: Personen";
include "header.php";
?>

<div class="row">

<div class="col-2">
    <?php include "menu.php"?>
</div>

<div class="col-8" style="min-width: max-content">

    <div class="container-fluid">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">In Projekt</th>
                    <th scope="col" style="align-items: end"> </th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "mitglieder.php";
                foreach($mitglieder as $value ): ?>
                <tr>
                    <td><?php   echo $value['Name']?></td>
                    <td><?php   echo $value['Mail']?></td>
                    <td><input type="checkbox"></td>
                    <?php include "edit_delete.html"?>

                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <label for="box" style="font-size:calc(1.5px + 1.5vw)">Bearbeiten/Ertellen</label>
        <div id="box">

            <div class="form-outline mb-4">
                <label class="form-label" for="uName" >Username:</label>
                <input type="text" id="uName" class="form-control" placeholder="Username"/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="mail" >E-Mail-Adresse:</label>
                <input type="email" id="mail" class="form-control" placeholder="E-Mail-Adresse angeben"/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="passwort" >Passwort:</label>
                <input type="password" id="passwort" class="form-control" placeholder="Passwort angeben"/>
            </div>

            <div class="form-outline mb-4">
                <label for="selectpicker" >Zugehöriger Reiter:</label>
                <select class="selectpicker form-control" aria-label=".form-select-lg example" id="selectpicker">
                    <option selected>ToDo</option>
                    <option>HTML Datei erstellen</option>
                    <option>CSS Datei erstellen</option>
                </select>
            </div>

            <div class="form-outline mb-4">
                <input type="checkbox"> Dem Projekt zugeordnet
            </div>

            <div>
                <button type="button" class="btn btn-primary">Speichern</button>
                <button type="button" class="btn btn-primary" style="background-color: #0cc9ad">Reset</button>
            </div>

        </div>

    </div>


</div>

</div>

<?php

?>

</body>
</html>