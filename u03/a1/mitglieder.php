<?php
$mitglieder = array(
    array(  'id'=>1,
        'Name'=>'Max Mustermann',
        'Mail'=>'mustermann@muster.de',
        'In Projekt'=>'false'
    ),
    array(  'id'=>2,
        'Name'=>'Petra Müller',
        'Mail'=>'petra@mueller.de',
        'In Projekt'=>'false'
    )
);

$Reiter = array(
        array('Aufgabenbezeichnung'=>'HTML Datei erstellen',
            'Beschreibung der Aufgabe'=>'HTML Datei erstellen',
            'Zuständig'=>$mitglieder[0],
            'Reiter'=>"ToDo"
        ),
        array(  'Aufgabenbezeichnung'=>'CSS Datei erstellen',
            'Beschreibung der Aufgabe'=>'HTML Datei erstellen',
            'Zuständig'=>$mitglieder[0],
            'Reiter'=>"ToDo"
    ),
        array(  'Aufgabenbezeichnung'=>'PC eingeschalet',
            'Beschreibung der Aufgabe'=>'PC einschalten',
            'Zuständig'=>$mitglieder[0],
            'Reiter'=>"Erledigt"
        ),
        array(  'Aufgabenbezeichnung'=>'Kaffee trinken',
            'Beschreibung der Aufgabe'=>'Kaffee trinken',
            'Zuständig'=>$mitglieder[1],
            'Reiter'=>"Erledigt"
    ),
        array(  'Aufgabenbezeichnung'=>'Für die Uni lernen',
            'Beschreibung der Aufgabe'=>'Für die Uni lernen.',
            'Zuständig'=>$mitglieder[0],
            'Reiter'=>"Verschoben"
    )
);
?>