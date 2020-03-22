//Chati chaima
<!DOCTYPE html>
<html>
<head>
    <title>ex3</title>
</head>
<body>

    <h1>Centrale d'achats</h1>
    <h2>Commande Clients</h2>
        <table border=1 style="width: 800px;">
    <tr bgcolor='lightsteelblue'>
        <th>Numero de commande</th>
        <th>Numero Client</th>
        <th>Date de commande</th>
        <th>Désignation article/th>
        <th>Quantité</th>
        <th>prix unitaire</th>
        <th>Date de livraison</th>
        <th>Adresse client</th>
    </tr>
<?php
 $file = fopen("file.txt", "r") or die("Impossible d'ouvrir le fichier!");

    while (!feof($file)) {
        $ligne = fgets($file);
        echo"<tr>";
        $arr=explode("|",$ligne);

        foreach($arr as $cellule){
        echo "<td>".$cellule."</td>";
    }
    echo"</tr>";
    }

    fclose($file);

?>
</table>
</body>
</html>
