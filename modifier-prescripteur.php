<?php

require 'cnx.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$adresse = $_POST['adresse'];
$rue = $_POST['rue'];
$code_postal = $_POST['code-postal'];
$ville = $_POST['ville'];
$etablissement = $_POST['etablissement'];
$login = $_POST['login'];


$mdp = $_POST['mdp'];
$conf_mdp = $_POST['conf-mdp'];



$dossier = './image-person/';

$fichier = basename($_FILES['photo']['name']);

if ($fichier == "") {
    
    if ($mdp == "" && $conf_mdp == "") {
                $bdd->exec("UPDATE `prescripteur` SET `nom`='$nom',`prenom`='$prenom', `tel`='$tel',`adresse`='$adresse',`rue`='$rue',`code-postal`='$code_postal',`ville`='$ville',`etablissement`='$etablissement' WHERE `login`='$login'") or die(print_r($bdd->ErrorInfo()));

                echo 'Modification reussi';
            } elseif ($mdp == $conf_mdp) {
                $bdd->exec("UPDATE `prescripteur` SET `nom`='$nom',`prenom`='$prenom', `tel`='$tel',`adresse`='$adresse',`rue`='$rue',`code-postal`='$code_postal',`ville`='$ville',`etablissement`='$etablissement',`mdp`='$mdp' WHERE `login`='$login'") or die(print_r($bdd->ErrorInfo()));

                echo 'Modification reussi';
            } else {
                echo("Mot de passe non identique");
            }
    
} else {

    $taille_maxi = 5000000;
    $taille = filesize($_FILES['photo']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.PNG', '.JPG', '.JPEG', '.GIF');
    $extension = strrchr($_FILES['photo']['name'], '.');

    if (!in_array($extension, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
    }
    if ($taille > $taille_maxi) {
        $erreur = 'Le fichier est trop gros!';
    }

    if (!isset($erreur)) {
        $fichier = strtr($fichier, 'Ã€Ã�Ã‚ÃƒÃ„Ã…Ã‡ÃˆÃ‰ÃŠÃ‹ÃŒÃ�ÃŽÃ�Ã’Ã“Ã”Ã•Ã–Ã™ÃšÃ›ÃœÃ�Ã Ã¡Ã¢Ã£Ã¤Ã¥Ã§Ã¨Ã©ÃªÃ«Ã¬Ã­Ã®Ã¯Ã°Ã²Ã³Ã´ÃµÃ¶Ã¹ÃºÃ»Ã¼Ã½Ã¿', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) {

            if ($mdp == "" && $conf_mdp == "") {
                $bdd->exec("UPDATE `prescripteur` SET `photo`='$fichier',`nom`='$nom',`prenom`='$prenom', `tel`='$tel',`adresse`='$adresse',`rue`='$rue',`code-postal`='$code_postal',`ville`='$ville',`etablissement`='$etablissement' WHERE `login`='$login'") or die(print_r($bdd->ErrorInfo()));

                echo 'Modification reussi';
            } elseif ($mdp == $conf_mdp) {
                $bdd->exec("UPDATE `prescripteur` SET `photo`='$fichier',`nom`='$nom',`prenom`='$prenom', `tel`='$tel',`adresse`='$adresse',`rue`='$rue',`code-postal`='$code_postal',`ville`='$ville',`etablissement`='$etablissement',`mdp`='$mdp' WHERE `login`='$login'") or die(print_r($bdd->ErrorInfo()));

                echo 'Modification reussi';
            } else {
                echo("Mot de passe non identique");
            }
        } else {
            echo("Echec de l\'upload de l\'image. Veuillez choisir une image dont la taille est moins de 1Mo, ou dont le type est (png, gif, jpg, jpeg) !");
        }
    } else {
        echo($erreur);
    }
}
?>  