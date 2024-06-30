<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP I HTML</title>
</head>
<body>
    <h1>PHP I HTML</h1>
    
    <?php
        // PHP code
        

        require_once "include_require.php";
        $ispis = "Ovo je ispisano pomoću PHP jezika.";
    ?>

    <section>
        <p><?php echo $ispis?></p>
    </section>

    <section>
        <p>
            <?php echo $ispis2?>
            
        </p>
        <p>
            <?= "Skraćeni PHP tag za ispis"?>
        </p>
    </section>
</body>
</html>