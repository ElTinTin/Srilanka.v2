<?php include "connexion.php"; ?>
<?php include "fonctions.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails</title>
</head>
<body>
    <?php foreach (pays($connexion) as $key=>$value) {
       if ($key == $_GET["val"]) { ?>
        
        <h2>Détails sur <?php echo $value["nom"]; ?></h2>
        <ul>
            <li>Latitude : <?php echo $value["lat"]; ?></li>
            <li>Longitude : <?php echo $value["long"]; ?></li>
            <li>Population : <?php echo $value["pop"]; ?></li>
        </ul>
        
    <?php } } ?>
</body>
</html>