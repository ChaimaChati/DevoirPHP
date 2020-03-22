//Chati chaima
<?php

	$file = file("file.txt") or die("Impossible d'ouvrir le fichier!");
    $total = count($file);

    for($i = 0; $i < $total; $i++) {
   
    echo nl2br($file[$i]);
    }

 


?>
