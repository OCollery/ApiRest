<html>
<body>
    <form method="post">
        <div>
            <label>Id: <input type="text" name="idClient"></label>
        </div>
        <div>
            <label>Nom: <input type="text" name="nouveauNom"></label>
        </div>
        <div>
            <label>Siret: <input type="text" name="nouveauSiret"></label>
        </div>
        <button type="submit">Modifier</button>
    </form>
    <button><a href="http://localhost/testYPCI/Template/administrationDesClients.php">Retour à l'administration</a></button>
</body>
</html>


<?php
if (isset($_POST['idClient']) && isset($_POST['nouveauNom']) && isset($_POST['nouveauSiret']))
{
    $id = $_POST['idClient'];
    $nom = $_POST['nouveauNom'];
    $siret = $_POST['nouveauSiret'];

    require('../Controller/clientController.php');
    $req = update($id,$nom,$siret);
}
?>



<?php
    if (isset($_POST['nouveauNom']) && isset($_POST['nouveauSiret']))
    {
        $bdd = $bdd = new PDO('mysql:host=localhost;dbname=testYPCI','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $requete = $bdd->prepare('UPDATE client SET nom=?,siret=? WHERE id=?');
        $requete->execute(array($_POST['nouveauNom'],$_POST['nouveauSiret'],$_POST['idClient']));



    }
?>
