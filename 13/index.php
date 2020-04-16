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
            <form action="" method="GET">
                <h1>GET-Methode</h1>
                <input type="number" name="zahleneingabe" placeholder="Gib eine Zahl ein"/>
                </br>
                <button type="submit">Starte Verarbeitung</button>
            </form>       
            <?php
                if(isset($_GET["zahleneingabe"])){                
                    echo "Eingegebene Zahl = " . $_GET["zahleneingabe"];                       
                }                
            ?>     
            <form action="" method="POST">                
                <h1>POST-Methode</h1>
                <input type="number" name="zahleneingabe" placeholder="Gib eine Zahl ein"/>
                </br>
                <button type="submit">Starte Verarbeitung</button>
            </form>    
            <?php
                if(isset($_POST["zahleneingabe"])){
                    echo "Eingegebene Zahl = " . $_POST["zahleneingabe"];
                    echo "</br>";
                    
                    /**
                     * AUFGABE:
                     * 1) Speichere den Wert von $_POST["zahleneingabe"] in die Variable zahleneingabe
                     * 2) Überprüfe mit einer If-Else Struktur ob diese Variable größer als 5 ist
                     *
                     * 3) Überprüfe per empty()-Funktion ob der Wert von $_POST["zahleneingabe"] leer ist und gib eine Meldung aus, wenn dieser leer ist                     
                     * 
                     * BONUS AUFGABE 1:
                     * 4) Baue den vereinfachten Taschenrechner mit zwei Eingabefeldern
                     * 5) Es soll per echo-Befehl ausgegeben werden die Summe der zwei Eingabefelder
                     * 
                     * BONUS AUFGABE 2:
                     * 6) Baue den fortgeschrittenen Taschenrechner mit drei Eingabefeldern
                     * 7) In zwei Eingabefelder werden Zahlen eingegeben
                     * 8) In das dritte Eingabefeld wird die Rechenoperation eingegeben
                     * 9) Das Ergebnis wird ausgegebn per echo-Befehl
                     */                    
                }
            ?>       
            </div>
            <div class="footer">Footer</div>        
        </div>
    </body>
</html>