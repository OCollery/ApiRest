<!DOCTYPE html>
<html>
<body>
<form method="post">
    <label>Informations client à afficher: </label><input type="text" name="idClient">
    <button type="submit">Afficher infos client</button>
</form>

<?php
if (isset($_POST['idClient']))
{
    $id = $_POST['idClient'];

    require('../Controller/clientController.php');
    $req = getById($id);
}
?>

<button><a href="http://localhost/testYPCI/Template/administrationDesClients.php">Retour à l'administration</a></button>
</body>
</html>

















