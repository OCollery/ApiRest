<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <label>Identifiant client à supprimer: </label><input type="text" name="idClient">
        <button type="submit">Supprimer</button>
    </form>
    <button><a href="http://localhost/testYPCI/Template/administrationDesClients.php">Retour à l'administration</a></button>
</body>
</html>

<?php
if (isset($_POST['idClient']))
{
    $id = $_POST['idClient'];

    require('../Controller/clientController.php');
    $req = delete($id);
}
?>





