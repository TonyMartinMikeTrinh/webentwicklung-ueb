<div class="container-fluid mt-1 ms-3 p-2">
    <div class="list-group" style="min-width: max-content">

        <div class="list-group-item" style="font-size:calc(4px + 1.2vw)">
            <a href="login.php" style="text-decoration: none">Login</a>
        </div>

        <div class="list-group-item" style="font-size:calc(4px + 1.2vw)">
            <a href="" style="text-decoration: none">Projekte</a>
        </div>

        <div class="list-group-item" style="font-size:calc(4px + 1.2vw)">
            <a href="aktuelellesProjekt.php" style="text-decoration: none">Aktuelles Projekt</a>
        </div>

        <div class="list-group-item" style="font-size:calc(4px + 1.2vw); margin-left: 2vw">
            <a href="reiter.html" style="text-decoration: none">Reiter</a>
        </div>

        <div class="list-group-item" style="font-size:calc(4px + 1.2vw); margin-left: 2vw">
            <a href="aufgaben.html" style="text-decoration: none">Aufgaben</a>
        </div>

        <div class="list-group-item" style="font-size:calc(4px + 1.2vw); margin-left: 2vw">
            <a href="mitglieder.html" style="text-decoration: none">Mitglieder</a>
        </div>

    </div>


</div>

<?php
    function activeLabel(){
        $array = array(
            1=>"login",
            2=>"projekte",
            3=>"ToDo",
            4=>"reiter",
            5=>"aufgaben",
            6=>"mitglieder",
        );
            return "list-group-item";
    }
?>

