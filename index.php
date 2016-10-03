<?php include "connexion.php"; ?>
<?php include "fonctions.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Srilanka</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <div>
    <?php foreach (pays($connexion) as $key=>$value) {?>
        <ul>
            <li><a href="detail.php?val=<?php echo $key ?>"><?php echo $value["nom"]; ?></a></li>
        </ul>
    <?php } ?>
    </div>
</body>
</html>