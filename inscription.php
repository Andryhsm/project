<!DOCTYPE html>

<html>
    <head>
        <title>inscription prescripteur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/cerulean.css">
        <style>
            body
            {
                background: url("img/bgm.jpg") no-repeat fixed;
                background-size: cover;    
                color: #fff;
                font-family: "Calibri"; 
            }
            .loko{
                color: red; font-size: 20px;
            }
        </style>
    </head>
    <body>

        <div class="container" style="margin-top: 20px;">
            <form method="POST" action="insert-prescripteur.php" id="form-filter" class="form-horizontal" enctype="multipart/form-data">
                <fieldset class="well">
                    <div class="form-group">
                        <label class="control-label col-md-3" id="label-photo">Photo:</label>
                        <div class="col-md-8">
                            <input name="photo" id="photo" type="file" accept="image/*; capture=camera">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="row col-lg-offset-3 col-md-offset-3">
                        <div id="image_preview">
                            <img class="thumbnail img-responsive hidden" style="vertical-align: center;" width="300px" heigth="300px">
                            <figcaption id="titre"></figcaption>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-sm-3 control-label">Nom:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="nom" required="" class="form-control" name="nom" id="nom">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="col-sm-3 control-label">Prenom:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="prenom" required="" class="form-control" name="prenom" id="prenom">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="col-sm-3 control-label">Téléphone:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="number" placeholder="téléphone" required="" class="form-control" name="tel" id="tel">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="email" placeholder="email" required="" class="form-control" name="email" id="email">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse" class="col-sm-3 control-label">Adresse:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="adresse" required="" class="form-control" name="adresse" id="adresse">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rue" class="col-sm-3 control-label">Numéro et nom de rue:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="numéro et nom de rue" required="" class="form-control" name="rue" id="rue">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="code-postal" class="col-sm-3 control-label">Code postal:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="number" placeholder="code postal" required="" class="form-control" name="code-postal" id="code-postal">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ville" class="col-sm-3 control-label">Ville:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="ville" required="" class="form-control" name="ville" id="ville">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="etablossement" class="col-sm-3 control-label">Etablissement d’exercice:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="etablissement d’exercice" required="" class="form-control" name="etablissement" id="etablissement">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="statut" class="col-sm-3 control-label">Statut:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <select name="statut" id="statut" required="" class="form-control">
                                    <option value="">-----choisir-----</option>
                                    <option value="Diabétologue prescripteur">Diabétologue prescripteur</option>
                                    <option value="Diabétologue libéral">Diabétologue libéral</option>
                                    <option value="Médecin traitant">Médecin traitant</option>
                                    <option value="Diététicienne">Diététicienne</option>
                                </select>      
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="well">
                    <div class="form-group">
                        <label for="login" class="col-sm-3 control-label">Nom d'utilisateur:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="nom d'utilisateur" required="" class="form-control" name="login" id="login">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mdp" class="col-sm-3 control-label">Mot de passe:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="password" placeholder="mot de passe" required="" class="form-control" name="mdp" id="mdp">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conf-mdp" class="col-sm-3 control-label">Confirmer mot de passe:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="password" placeholder="confirmer mot de passe" required="" class="form-control" name="conf-mdp" id="conf-mdp">
                                <span class="input-group-addon loko">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inscr" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8">

                            <button type="submit" id="valider" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Valider </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="./index.html"> <button type="button" class="btn btn-primary"> <i class="glyphicon glyphicon-check"></i> Se connecter </button></a>
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
                            <div class="warning" id="erreur_inscription"></div>
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

            $('#valider').click(function (e)
            {
                e.preventDefault();
                var form = $('#form-filter').get(0);
                var formData = new FormData(form);// get the form data
                // on envoi formData vers mail.php
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'insert-prescripteur.php', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'text', // what type of data do we expect back from the server
                    processData: false,
                    contentType: false,
                    success: function (server_response)
                    {
                        if (server_response === "succes  ")
                        {
                            window.location.href = "page.php";
                        }
                        else
                        {
                            $('#erreur_inscription').html('<p>' + server_response + '</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 4000);
                        }
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
