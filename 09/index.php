<!DOCTYPE html>
<html>
    <head>
        <title>Titel</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="bootstrap.css"/>
    </head>
    <body>
        <div class="site">
            <div class="header">Header</div>
            <div class="nav">Navigation</div>
            <div class="content">
            <h1>Ausgabe PHP:</h1>
                <div class="ausgabePHP">
                <?php
                    $variable_ganzzahl = 3;
                    $variable_kommazahl = 10.0;
                    $variable_boolean = TRUE;
                    $variable_leereMenge = NULL;
                    $variable_buchstaben = "Hallo Welt";
                    $variable_buchstabenHTML = "<p>Wie geht es dir?</p>";
                    echo $variable_ganzzahl;// echo-Befehl: Ausgabe variable_ganzzahl 
                    echo "<br>";//echo-Befehl: Ausgabe HTML-Tag
                    echo "Ganzzahl: " . $variable_ganzzahl;
                    echo $variable_kommazahl;

                    $variable_WoW = "10";   
                    echo "<br>"; 
                    echo "Ganzzahl: " . $variable_ganzzahl;
                    echo $variable_kommazahl;
                    echo $variable_kommazahl;
                    echo $variable_boolean;
                    echo $variable_leereMenge;
                    echo $variable_buchstaben;
                    echo $variable_WoW;
                    echo $variable_ganzzahl;


                    
                    
                    /**
                     * AUFGABE:
                     * 
                     * 1) Wende den echo-Befehl an und gib die Variable variable_kommazahl aus
                     * 2) Wende den echo-Befehl an und gib die Variable variable_kommazahl aus
                     * 3) Wende den echo-Befehl an und gib die Variable variable_boolean aus
                     * 4) Wende den echo-Befehl an und gib die Variable variable_leereMenge aus
                     * 5) Wende den echo-Befehl an und gib die Variable variable_buchstaben aus
                     * 6) Schreibe eine neue Variable zahl mit dem Wert 10 
                     * 7) Wende den echo-Befehl an und gib die Variable zahl aus
                     * */               
                ?>   
                </div>         
            </div>
            <div class="footer">Footer</div>        
        </div>
    </body>
</html>