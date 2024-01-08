<?php

$frase = 'Frase: ciao mangio la pizza';
$parola = 'Parola da censurare: mangio';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>



<form action="frase.php" method="GET">
  <label for="frase">Frase:</label>
  <input type="text" id="frase" name="frase">
  <label for="parola">Parola da censurare:</label>
  <input type="text" id="parola" name="parola" >
  <button>Invia il modulo</button>
  


</form>

<p>
<?php
echo $frase;


?>
</p>


<p>
<?php
echo $parola;


?>
</p>
  
  
</body>
</html>