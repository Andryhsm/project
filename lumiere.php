<?php
require './protection.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>modification prescripteur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/cerulean.css">
        <style>
            body
            {
                background: url("img/bg5.jpg") no-repeat fixed;
                background-size: cover;    
                color: #fff;
                font-family: "Calibri"; 
                font-size: 20px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./page.php">Insulinothérapie</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="#">Inscription Patient</a></li>-->
                        <!--                        <li><a href="#about">About</a></li>
                                                <li><a href="#contact">Contact</a></li>-->

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./lumiere.php"><img width="33px" src="./img/help.png" /></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img width="33px" src="./img/pignon.png" /> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./modification.php">Modifier mon profil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./logout.php">Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="well" style="margin-top: 50px;">
                <center><h2 style="color: white;"> Rappel de la méthode / Gestion des données / Gestion des déchets </h2></center>
                <ul style="list-style: none;">
                    <li>1- Avant tout prélèvement, vérifier l'état du matériel :
                        Fonctionnement du lecteur, date de péremption des bandelettes ou électrodes, le fonctionnement de l'auto piqueur, propreté du matériel...</li>
                    <li>2- Se laver les mains au savon et à l’eau chaude (pour favoriser l’arrivée du sang). Ne pas utiliser de désinfectant, de crème ou de lotion, cela fausserait les résultats.</li>
                    <li>3- Bien se sécher les mains pour obtenir un prélèvement de bonne qualité.</li>
                    <li>4- Laisser pendre la main pour favoriser l’irrigation sanguine ou masser légèrement le doigt.</li>
                    <li>5- Insérer la lancette dans l'emplacement prévu sur l'auto piqueur.</li>
                    <li>6- Prélever ensuite une gouttelette de sang (piquer sur le côté du doigt) et approcher la bandelette ou l’électrode (elle-même insérée dans le lecteur) de l’échantillon de sang. Le sang monte par capillarité et le lecteur affiche la glycémie en quelques secondes. N'hésitez pas à solliciter votre équipe soignante pour vous aider à effectuer les bons gestes.</li>
                    <li>7- Consigner ensuite ces résultats sur un carnet d'auto surveillance glycémique en indiquant vos commentaires. Si vous disposez d’un logiciel, vous pouvez télécharger automatiquement ces résultats à partir de votre lecteur. Votre médecin pourra analyser ces résultats lors de chaque consultation.</li>
                    <li>8- Attention : jeter les aiguilles et les bandelettes dans des collecteurs prévus à cet effet et non directement à la poubelle.</li>
                </ul>
            </div>
        </div>
        <script src="./bootstrap/js/jquery.js"></script>   
        <script src="./bootstrap/js/bootstrap.min.js"></script> 

    </body>
</html>


