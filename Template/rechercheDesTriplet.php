<!DOCTYPE html>
<html>
<body>
<form method="post">
    <label>Informations client à afficher: </label><input type="number" name="hypothenus">
    <button type="submit">Afficher les triplet</button>
</form>

<?php
if (isset($_POST['hypothenus']))
{
    $n = $_POST['hypothenus'];

    $req = require('../Controller/triplet.php');
}
?>
<button><a href="http://localhost/testYPCI/Template/base.php">Retour à l'accueil</a></button>
</body>
</html>

