<?php

// get frase
 $_GET['frase'];

//  get parola censurata
  $_GET['parola'];

  // lunghezza stringa
  strlen( $_GET['frase']);





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<p>
 frase completa:
  <?php
echo  $_GET['frase'];




?>
</p>

<p>
 lunghezza frase:
  <?php
  echo strlen( $_GET['frase']);




?>
</p>



<p>
  parola da censurare :
  <?php

  echo  $_GET['parola'];


?>
</p>


<p>
  parola censurata :
  <?php

  echo $_GET['parolacensurata'] = str_replace("mangio", "***",  $_GET['parola']);


?>
</p>

<p>
 frase censurata:
  <?php

  echo $_GET['parola'] = str_replace("mangio", "***",  $_GET['frase']);


?>
</p>

<p>
lunghezza frase censurata:
  <?php

  echo strlen( $_GET['parola'] = str_replace ("mangio", "***",  $_GET['frase']));
  


?>
</p>


  
</body>
</html>