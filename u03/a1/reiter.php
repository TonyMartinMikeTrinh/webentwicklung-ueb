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
$name = "Aufgabenplaner: Reiter";
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
                    <th scope="col">Beschreibung</th>
                    <th scope="col" style="align-items: end"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ToDo</td>
                    <td>Dinge die erledigt werden müssen.</td>
                    <?php include "edit_delete.html"?>

                </tr>
                <tr>
                    <td>Erledigt</td>
                    <td>Dinge die erledigt sind.</td>
                    <?php include "edit_delete.html"?>

                </tr>
                <tr>
                    <td>Verschoben</td>
                    <td>Dinge die später erledigt werden.</td>
                    <?php include "edit_delete.html"?>

                </tr>
                </tbody>
            </table>

        </div>

    </div>

</div>

</body>
</html>