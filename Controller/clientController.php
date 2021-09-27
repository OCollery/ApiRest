<?php

function createClient(string $nom, int $siret)
{
    if (isset($nom) && isset($siret))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=testYPCI','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $requete = $bdd->prepare('INSERT INTO client(nom,siret) VALUES (?,?)');
        $requete->execute(array($_POST['nom'],$_POST['siret']));

        header('location:http://localhost/testYPCI/Template/creerClient.php');
    }
}


function delete($idClient)
{
    if (isset($_POST['idClient']))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=testYPCI','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $requete = $bdd->prepare('DELETE FROM client WHERE ID=?');
        $requete->execute(array($_POST['idClient']));

        header('location:http://localhost/testYPCI/Template/supprimerClient.php');
    }
    return $idClient;
}



function getById($idClient)
{
    if (isset($_POST['idClient']))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=testYPCI','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $requete = $bdd->prepare('SELECT * FROM client WHERE id= ?');
        $requete->bindValue(1,$_POST['idClient']);
        $requete->execute();
        $arr = $requete->fetch();

        echo    'id: '.$arr['id'].'<br>'.
                'Nom: '.$arr['nom'].'<br>'.
                'Siret: '.$arr['siret'];
    }
    return $idClient;
}


function getAll()
{
    $bdd = new PDO('mysql:host=localhost;dbname=testYPCI','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->query('SELECT * FROM Client');

    while ($donnees = $requete->fetch())
    {
        ?>
        <div>
            <ul>
                <li id="id">Id: <?php echo htmlspecialchars($donnees['id']) ?></li>
                <li id="nom">Nom: <?php echo htmlspecialchars($donnees['nom'])?></li>
                <li>N° Siret: <?php echo htmlspecialchars($donnees['siret'])?></li>
            </ul>
        </div>
        <?php
    }
    return $requete;
}

function update(int $id, string $nom, int $siret)
{
    if (isset($nom) && isset($siret))
    {
        $bdd = $bdd = new PDO('mysql:host=localhost;dbname=testYPCI','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $requete = $bdd->prepare('UPDATE client SET nom=?,siret=? WHERE id=?');
        $requete->execute(array($nom,$siret,$id));
    }
}


