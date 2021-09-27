<?php

$fileSent = $_POST['fileSent'];


function getExtensionFile(string $fileSent)
{
    $extension = new SplFileInfo($fileSent);
    if ($fileSent != null)
    {
        echo 'l\'extension du fichier est .' . '<strong>' . $nomExtension = $extension->getExtension() . '</strong>';

        return $nomExtension;
    }else
    {
        echo "Aucun fichier n'a été téléchargé!";
    }

}
getExtensionFile($fileSent);
