<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="file" name="fileSent">
        <button type="submit">Valider</button>
    </form>

<?php
    if (isset($_POST['fileSent']))
    {
        $myFile = $_POST['fileSent'];

        $req = require('../Controller/fonctionExtension.php');
    }
?>

    <button><a href="http://localhost/testYPCI/Template/base.php">Retour à l'accueil</a></button>
</body>
</html>