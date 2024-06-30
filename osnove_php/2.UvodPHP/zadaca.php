<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Domača zadača PHP</h1>
    <?php
        // Definiranje varijabli
        $cijeliBroj = 5;
        $realniBroj = 25.25;
        $textualniPodatak = "String";
        $logickaVrijednost = true;


        // Ispis definiranih varijabli
        echo "Cijeli Broj: " . $cijeliBroj;
        echo '<br>';
        echo "Realni Broj: " . $realniBroj;
        echo '<br>';
        echo "Textualni Podatak: " . $textualniPodatak;
        echo '<br>';
        echo "Logička Vrijednost: " . $logickaVrijednost;
        echo '<br>';
        echo '<br>';
        

        // Definiranje konstantnih varijabli
        define('OIB', 25468741684);
        const PI = 3.14;


        // Ispis konstantnih varijabli
        echo "OIB: " . OIB;
        echo '<br>';
        echo "PI: " . PI;
        echo '<br>';
        echo '<br>';

        
        // Zadatak
        $a = 5;
        $b = &$a;
        echo "B = " . $b;
        echo '<br>';
        $a = 7;
        echo "Novi B = " . $b;
    
    ?>
</body>
</html>

