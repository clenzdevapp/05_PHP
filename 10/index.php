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
                    $bedingung = TRUE;
                    if ($bedingung) {
                        echo "<p>Die Bedingung ist wahr!</p>";
                    } else {
                        echo "<p>Die Bedingung ist falsch!</p>";
                    }

                    $zahlengrenze = 7;
                    if ($zahlengrenze === 10) {
                        echo "<p>Die Zahlengrenze ist identisch 10</p>";
                    } else {
                        echo "<p>Die Bedingung ist nicht identisch 10</p>";
                    }

                    $zahlengrenze = 10;
                    if ($zahlengrenze > 5) {
                        echo "<p>Die Zahlengrenze ist größer als 5.</p>";
                    } else {
                        echo "<p>Die Bedingung ist kleiner als 5.</p>";
                    }                                       

                    if ($zahlengrenze > 5) {
                        echo "<p>Du bist verliebt</p>";
                        echo "<p>Der Pogrammierer gibt die Meldung zahlengrenze aus</p>" . $zahlengrenze ;
                    } else{
                        echo "<p>Du bist nicht verliebt.Der Pogrammierer gibt die Meldung zahlengrenze aus</p>";
                    }

                    $zahlengrenze = 10;
                    if ($zahlengrenze > 5) {
                        echo "<p>Die Zahlengrenze ist größer als 5.</p>";
                        echo $zahlengrenze;
                    }else {
                        echo "<p>Die Zahlengrenze ist kleiner als 5.</p>";
                        echo $zahlengrenze;
                    }
                    $zahlengrenze = 2;

                    if ($zahlengrenze < 5) {
                        echo "ngnjfb";
                    } elseif ($zahlengrenze >=5 && $zahlengrenze < 10) {
                        echo "gfb";
                    } else {
                        echo "<br>fdvfgnjbnfgb";
                    }
                    $zahlengrenze = 2;
                    if ($zahlengrenze % 2==0) {
                        echo "<br>Die Zahl " .$zahlengrenze ." ist gerade.";
                    } else {
                        echo "<br>Die Zahl" .$zahlengrenze ." ist nicht gerade.";
                    }
                    

                    /**
                     * AUFGABE:
                     * 1) Programmiere eine If-Else-Struktur. Die Bedingung ist > 5
                     * 2) Gib für den If-Zweig per echo-Befehl eine Meldung aus. 
                     * 3) Gib in einem zweiten echo-Befehl die Variable zahlengrenze mit aus
                     * 4) Mache für den Else-Zweig dasselbe
                     * 
                     * 5) Programmiere eine If-Else-Struktur Die Bedingung ist zahlengrenze > 5 und zahlengrenze < 10.
                     * 6) Programmiere in den If-Zweig per echo-Befehl eine Meldung aus
                     * 7) Programmiere für den Else-Zweige per echo-Befehl eine Meldung aus
                     * 
                     * 8) Programmiere eine mehrfache If-Else-Struktur
                     * 9) In dem ersten Zweig ist die Bedingung zahlengrenze < 5
                     * 10) In dem zweiten Zweig ist die Bedingung zahlengrenze >= 5 und zahlengrenze < 10
                     * 11) Der dritte Zweig ist der else-Zweig
                     * 
                     * 12) Programmiere eine If-Else-Struktur Die Bedingung ist, dass die zahlengrenze eine gerade Zahl sein soll.
                     * Gerade bedeutet, dass sie durch 2 teilbar ist.
                     * 13) Programmiere in den If-Zweig per echo-Befehl eine Meldung aus
                     * 14) Programmiere für den Else-Zweige per echo-Befehl eine Meldung aus
                     */                                    
                ?>       
                </div>     
            </div>
            <div class="footer">Footer</div>        
        </div>
    </body>
</html>