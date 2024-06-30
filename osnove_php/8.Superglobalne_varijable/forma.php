<?php

$podaci = $_POST;

// var_dump($_POST);

if( !empty($podaci) ){
    echo 'Kliknuto na Posalji<br><br>';

    $ime = $podaci['first_name'];
    $prezime = $podaci['last_name'];

    echo "Vase ime je $ime a przime $prezime.";

}else{
    echo 'Nije Kliknuto na Posalji';
}

?>


<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="forma.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Pošalji">
</form> 

</body>
</html>