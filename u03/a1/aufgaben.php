<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <title>Aufgaben</title>
</head>
<body>
<?php
$name = "Aufgabenplaner: Aufgaben";
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
                    <th scope="col">Aufgabenbezeichnung:</th>
                    <th scope="col">Beschreibung der Aufgabe:</th>
                    <th scope="col">Reiter:</th>
                    <th scope="col">Zuständig:</th>
                    <th scope="col" style="align-items: end"> </th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "mitglieder.php";
                foreach($Reiter as $value ): ?>
                        <tr>
                        <td><?php   echo $value['Aufgabenbezeichnung']?></td>
                        <td><?php   echo $value['Beschreibung der Aufgabe'];?></td>
                        <td><?php   echo $value['Reiter']?></td>
                        <td><?php   echo $value['Zuständig']['Name']?></td>
                            <?php include "edit_delete.html"?>

                        </tr>
                    <?php endforeach;?>

                </tbody>
            </table>

            <label for="box" style="font-size:calc(1.5px + 1.5vw)">Bearbeiten/Ertellen</label>
            <div id="box">

                <div class="form-outline mb-4">
                    <label class="form-label" for="pName" >Aufgabenbezeichnung</label>
                    <input type="text" id="pName" class="form-control" placeholder="Aufgabe"/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="pDesc">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="pDesc" rows="3" placeholder="Beschreibung"></textarea>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="eDate" >Erstelldatum:</label>
                    <input type="date" id="eDate" class="form-control"/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="lDate" >fällig bis:</label>
                    <input type="date" id="lDate" class="form-control"/>
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
                    <label for="selectpicker2" >Zuständig:</label>
                    <select class="selectpicker form-control" aria-label=".form-select-lg example" id="selectpicker2">
                        <option selected>Max Mustermann</option>
                        <option>Max Mustermann</option>
                        <option>Petra Müller</option>
                    </select>
                </div>


                <div style="margin-top: 2vw">
                    <button type="button" class="btn btn-primary">Speichern</button>
                    <button type="button-solid" class="btn btn-primary" style="background-color: #0cc9ad; outline: none">Reset</button>
                </div>

            </div>

        </div>
    </div>

</div>

</body>
</html>
