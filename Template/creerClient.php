<!DOCTYPE html>
<html>
<body>
<form method="post">
    <div>
        <label>Nom: </label><input type="text" name="nom">
    </div>
    <div>
        <label>Siret: <input type="text" name="siret"></label>
    </div>
    <button type="submit">Valider</button>
</form>
<button><a href="http://localhost/testYPCI/Template/administrationDesClients.php">Retour à l'administration</a></button>
</body>
</html>

<?php
if (isset($_POST['nom']) && isset($_POST['siret']))
{
    $nom = $_POST['nom'];
    $siret = $_POST['siret'];

    require('../Controller/clientController.php');
    $req = createClient($nom,$siret);
}
?>