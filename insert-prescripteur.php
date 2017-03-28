<?php

session_start();

require 'cnx.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$adresse = $_POST['adresse'];
$rue = $_POST['rue'];
$code_postal = $_POST['code-postal'];
$ville = $_POST['ville'];
$etablissement = $_POST['etablissement'];
$statut = utf8_decode($_POST['statut']);
$login = $_POST['login'];


$mdp = $_POST['mdp'];
$conf_mdp = $_POST['conf-mdp'];

if ($nom == "" || $prenom == "" || $email == "" || $tel == "" || $adresse == "" || $rue == "" || $code_postal == "" || $ville == "" || $etablissement == "" || $statut == "" || $login == "" || $mdp == "" || $conf_mdp == "") {
    echo 'Les champs marquer * sont réquis';
} else {

    $dossier = './image-person/';

    $fichier = basename($_FILES['photo']['name']);

    if ($fichier == "") {
        $reponse = $bdd->query("SELECT * FROM prescripteur WHERE email = '" . $email . "'");
        $reponse1 = $bdd->query("SELECT * FROM prescripteur WHERE login = '" . $login . "'");

        $isa = $reponse->rowCount();
        $isa1 = $reponse1->rowCount();

        if (($isa == "0") && ($isa1 == "0")) {
            if ($mdp == $conf_mdp) {
                $bdd->exec("INSERT INTO `prescripteur` (`photo`,`nom`,`prenom`,`tel`,`email`,`adresse`,`rue`,`code-postal`,`ville`,`etablissement`,`statut`,`login`,`mdp`) VALUES ('avatar.png','$nom','$prenom','$tel','$email','$adresse','$rue','$code_postal','$ville','$etablissement','$statut','$login','$mdp')") or die(print_r($bdd->ErrorInfo()));
                $_SESSION['login'] = $login;

                $_SESSION['photo'] = 'avatar.png';
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['tel'] = $tel;
                $_SESSION['email'] = $email;
                $_SESSION['adresse'] = $adresse;
                $_SESSION['rue'] = $rue;
                $_SESSION['code-postal'] = $code_postal;
                $_SESSION['ville'] = $ville;
                $_SESSION['etablissement'] = $etablissement;
                $_SESSION['statut'] = $statut;
                echo 'succes';
            } else {
                echo("Mot de passe non identique");
            }
        } else {
            echo("Email ou login déja  employée");
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
                $reponse = $bdd->query("SELECT * FROM prescripteur WHERE email = '" . $email . "'");
                $reponse1 = $bdd->query("SELECT * FROM prescripteur WHERE login = '" . $login . "'");

                $isa = $reponse->rowCount();
                $isa1 = $reponse1->rowCount();

                if (($isa == "0") && ($isa1 == "0")) {
                    if ($mdp == $conf_mdp) {
                        $bdd->exec("INSERT INTO `prescripteur` (`photo`,`nom`,`prenom`,`tel`,`email`,`adresse`,`rue`,`code-postal`,`ville`,`etablissement`,`statut`,`login`,`mdp`) VALUES ('$fichier','$nom','$prenom','$tel','$email','$adresse','$rue','$code_postal','$ville','$etablissement','$statut','$login','$mdp')") or die(print_r($bdd->ErrorInfo()));
                        $_SESSION['login'] = $login;
                        $donnees = $reponse->fetch();

                        $_SESSION['photo'] = $fichier;
                        $_SESSION['nom'] = $nom;
                        $_SESSION['prenom'] = $prenom;
                        $_SESSION['tel'] = $tel;
                        $_SESSION['email'] = $email;
                        $_SESSION['adresse'] = $adresse;
                        $_SESSION['rue'] = $rue;
                        $_SESSION['code-postal'] = $code_postal;
                        $_SESSION['ville'] = $ville;
                        $_SESSION['etablissement'] = $etablissement;
                        $_SESSION['statut'] = $statut;
                        echo 'succes';
                    } else {
                        echo("Mot de passe non identique");
                    }
                } else {
                    echo("Email ou login déja  employée");
                }
            } else {
                echo("Echec de l\'upload de l\'image. Veuillez choisir une image dont la taille est moins de 1Mo, ou dont le type est (png, gif, jpg, jpeg) !");
            }
        } else {
            echo($erreur);
        }
    }
}
?>  