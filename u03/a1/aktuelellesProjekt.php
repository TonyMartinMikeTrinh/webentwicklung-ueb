<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <title>ToDo</title>
</head>
<body>
<?php
    $name = "Aufgabenplaner: Todos (Aktuelles Projekt)";
    include "header.php";
?>

<div class="row">
    <div class="col-2">
        <?php
        $title = "aktuellesProjekt";
        include "menu.php";
        ?>

    </div>

    <div class="col-10 mt-2" style="min-width: max-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col">
                    <div class="card">
                        <div class="card-header" style="font-size: 1.2vw">ToDo</div>
                        <div class="list-group">
                            <?php
                            include "mitglieder.php";
                            foreach($Reiter as $value ): ?>

                                <?php if($value["Reiter"]=="ToDo"): ?>
                                    <div class="list-group-item" style="font-size: 1.2vw">
                                        <?php echo $value['Aufgabenbezeichnung']. " (".$value['Zuständig']['Name'].")"?>

                                    </div>
                                <?php endif;?>

                            <?php endforeach;?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-header" style="font-size: 1.2vw">Erledigt</div>
                        <div class="list-group">
                            <?php
                            include "mitglieder.php";
                            foreach($Reiter as $value ): ?>

                                <?php if($value["Reiter"]=="Erledigt"): ?>
                                    <div class="list-group-item" style="font-size: 1.2vw">
                                        <?php echo $value['Aufgabenbezeichnung']. " (".$value['Zuständig']['Name'].")"?>

                                    </div>
                                <?php endif;?>

                            <?php endforeach;?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-header" style="font-size: 1.2vw">Verschoben</div>
                        <div class="list-group">
                            <?php
                            include "mitglieder.php";
                            foreach($Reiter as $value ): ?>

                                <?php if($value["Reiter"]=="Verschoben"): ?>
                                    <div class="list-group-item" style="font-size: 1.2vw">
                                        <?php echo $value['Aufgabenbezeichnung']. " (".$value['Zuständig']['Name'].")"?>

                                    </div>
                                <?php endif;?>

                            <?php endforeach;?>
                        </div>
                </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



</body>
</html>