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
            <form method="POST" action="modifier-prescripteur.php" id="form-filter" class="form-horizontal" enctype="multipart/form-data">

                <?php
                require 'cnx.php';

                $reponse = $bdd->query("SELECT * FROM prescripteur WHERE login = '" . $_SESSION['login'] . "'");

                while ($donnees = $reponse->fetch()) {
                    ?>

                    <fieldset class="well">

                        <div class="col-lg-4 col-lg-offset-3">
                            <div id="image_preview">
                                <img class="thumbnail img-responsive" style="vertical-align: center;" width="200px" heigth="200px" src="./image-person/<?php echo $donnees['photo']; ?>">
                                <figcaption id="titre"><?php echo $donnees['photo']; ?></figcaption>
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label class="control-label col-md-3" id="label-photo"></label>
                            <div class="col-md-6">
                                <input name="photo" id="photo" type="file" style="visibility:hidden" accept="image/*; capture=camera">
                                <input type="button" class="btn btn-success" onclick="$('#photo').click();" value="Modifier mon photo de profil"/>
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="well">
                        <div class="form-group">
                            <label for="nom" class="col-sm-3 control-label">Nom:</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="nom" required="" class="form-control" name="nom" id="nom" value="<?php echo $donnees['nom']; ?>">
                                <input type="hidden" placeholder="login" required="" class="form-control" name="login" id="login" value="<?php echo $donnees['login']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-sm-3 control-label">Prenom:</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="prenom" required="" class="form-control" name="prenom" id="prenom" value="<?php echo $donnees['prenom']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-sm-3 control-label">Téléphone:</label>
                            <div class="col-sm-8">
                                <input type="number" placeholder="téléphone" required="" class="form-control" name="tel" id="tel" value="<?php echo $donnees['tel']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="col-sm-3 control-label">Adresse:</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="adresse" required="" class="form-control" name="adresse" id="adresse" value="<?php echo $donnees['adresse']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rue" class="col-sm-3 control-label">Numéro et nom de rue:</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="numéro et nom de rue" required="" class="form-control" name="rue" id="rue" value="<?php echo $donnees['rue']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="code-postal" class="col-sm-3 control-label">Code postal:</label>
                            <div class="col-sm-8">
                                <input type="number" placeholder="code postal" required="" class="form-control" name="code-postal" id="code-postal" value="<?php echo $donnees['code-postal']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville" class="col-sm-3 control-label">Ville:</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="ville" required="" class="form-control" name="ville" id="ville" value="<?php echo $donnees['ville']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="etablossement" class="col-sm-3 control-label">Etablissement d’exercice:</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="etablissement d’exercice" required="" class="form-control" name="etablissement" id="etablissement" value="<?php echo $donnees['etablissement']; ?>">
                            </div>
                        </div>
                        
                    </fieldset>
                    <?php
                }
                ?>
                <fieldset class="well">

                    <div class="form-group">
                        <label for="mdp" class="col-sm-3 control-label">Nouveau mot de passe:</label>
                        <div class="col-sm-8">
                            <input type="password" placeholder="mot de passe" class="form-control" name="mdp" id="mdp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conf-mdp" class="col-sm-3 control-label">Confirmer mot de passe:</label>
                        <div class="col-sm-8">
                            <input type="password" placeholder="confirmer mot de passe" class="form-control" name="conf-mdp" id="conf-mdp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inscr" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8">

                            <button type="submit" id="modifier" class="btn btn-success"> Modifier <i class="glyphicon glyphicon-edit"></i></button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <button class="btn btn-primary btn-lg hidden" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
            <div class="modal" id="loginerror">
                <div class="modal-dialog">
                    <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                            <h4 class="modal-title" style="text-align: center;">Message</h4>
                        </div>
                        <div class="modal-body">
                            <div class="warning" id="erreur_modification"></div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./bootstrap/js/jquery.js"></script>   
        <script src="./bootstrap/js/bootstrap.min.js"></script> 
        <script type="text/javascript">
                                    $(function () {
                                        // A chaque sélection de fichier
                                        $('#form-filter').find('input[name="photo"]').on('change', function (e) {
                                            var files = $(this)[0].files;

                                            if (files.length > 0) {
                                                var file = files[0],
                                                        $image_preview = $('#image_preview');

                                                // Ici on injecte les informations recoltées sur le fichier pour l'utilisateur
                                                $image_preview.find('.thumbnail').removeClass('hidden');
                                                $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
                                                $image_preview.find('h4').html(file.name);
                                                $image_preview.find('#titre').html(file.name);
                                            }
                                        });
                                    });

                                    $('#modifier').click(function (e)
                                    {
                                        e.preventDefault();
                                        var form = $('#form-filter').get(0);
                                        var formData = new FormData(form);// get the form data
                                        // on envoi formData vers mail.php
                                        $.ajax({
                                            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                            url: 'modifier-prescripteur.php', // the url where we want to POST
                                            data: formData, // our data object
                                            dataType: 'text', // what type of data do we expect back from the server
                                            processData: false,
                                            contentType: false,
                                            success: function (server_response)
                                            {

                                                $('#erreur_modification').html('<p>' + server_response + '</p>');
                                                $('#triggerwarning').trigger('click');
                                                setTimeout(function () {
                                                    $('#ferme').trigger('click');
                                                }, 4000);

                                            },
                                            error: function (server_response)
                                            {
                                                alert(server_response);
                                            }
                                        });
                                    });
        </script>
    </body>
</html>


