<div class="container-fluid">
    <fieldset class="well" id="field">
        <center><font><h4>HABITUDE DE VIE</h4></font></center><br/>
        <div class="row">
            <div class="col-lg-6">

                <label for="activitephysique">Activité physique (type/frequence) :</label>
                <textarea type="text" rows="3" class="form-control" id="activitephysique" name="activitephysique" placeholder="activité physique"/></textarea>
                <label for="profession">Profession : </label>
                <input type="text" class="form-control" id="profession" name="profession" placeholder="profession"/>
                <label for="situationfamiliale">Situation familiale :</label>
                <input type="text" class="form-control" id="situationfamiliale" name="situationfamiliale" placeholder="situation familiale"/>
                <label for="observation">Observations:</label>
                <textarea type="text" rows="3" class="form-control" id="observation" name="observation" placeholder="observations"/></textarea>

            </div>
            <div class="col-lg-6">

                <label for="hygienealimentaire">Hygiène alimentaire (habitude/régime):	</label>
                <textarea type="text" rows="3" class="form-control" id="hygienealimentaire" name="hygienealimentaire" placeholder="hygiène alimentaire"/></textarea>

                <div class="radio">
                    <label for="stabilitehoraires">Stabilités des horraires : </label>
                    <label>
                        <input type="radio" name="stabilitehoraires" id="radio" value="oui" checked="checked">
                        Oui
                    </label>
                    <label>
                        <input type="radio" name="stabilitehoraires" id="radio" value="non" checked="checked">
                        Non
                    </label>
                </div>
                <label for="details">Details:	</label>
                <textarea name="details" id="inputDetails" class="form-control" rows="3"></textarea>
                <label for="environnement">Environnement social :	</label>
                <textarea type="text" rows="3" class="form-control" id="environnement" name="environnement" placeholder="environement social"/></textarea>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <label for="etatcutane">Etat cutané au point injection :	</label>
                <input type="text" class="form-control" id="etatcutane" name="etatcutane" placeholder="etat cutané au point injection"/>
            </div>
            <div class="col-lg-6">
                <label for="choixpoint">Choix des points d'injection :	</label>
                <input type="text" class="form-control" id="choixpoint" name="choixpoint" placeholder="choix des points d'injection"/>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="rougeur" name="rougeur">
                    : Rougeur /
                </label>
                <label>
                    <input type="checkbox" value="lypodystrophie" name="rougeur">
                    : Douleur /
                </label>
                <label>
                    <input type="checkbox" value="lypodystrophie" name="rougeur">
                    : Inflammation /
                </label>
                <label>
                    <input type="checkbox" value="lypodystrophie" name="rougeur">
                    : Lypodystrophie 
                </label>
            </div>
        </div>
    </fieldset><br/><br/>


    <fieldset class="well" id="field">
        <center><font><h4>INSULUNOTHERAPIE FONCTIONNELLE</h4></font>
            <div class="form-group">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" style="color: white;">
                        <thead>
                            <tr style="color: white;">
                                <th></th>
                                <th>Horaires</th>
                                <th>Ration Insuline/glucide</th>
                                <th>Objectif glicémique</th>
                                <th>Sensibilité à  l'insuline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Matin</td>
                                <td><input type="time" class="form-control date" name="horairematin" id="horaire"></td>
                                <td><input type="text" class="form-control" name="rotationmatin" id="rotation"></td>
                                <td><input type="text" class="form-control" name="objectifmatin" id="objectif"></td>
                                <td><input type="text" class="form-control" name="sensibilitematin" id="sensibilite"></td>
                            </tr>
                            <tr>
                                <td>Midi</td>
                                <td><input type="time" class="form-control date" name="horairemidi" id="horaire"></td>
                                <td><input type="text" class="form-control" name="rotationmidi" id="rotation"></td>
                                <td><input type="text" class="form-control" name="objectifmidi" id="objectif"></td>
                                <td><input type="text" class="form-control" name="sensibilitemidi" id="sensibilite"></td>	
                            </tr>
                            <tr>
                                <td>Collation</td>
                                <td><input type="time" class="form-control date" name="horairecollation" id="horaire"></td>
                                <td><input type="text" class="form-control" name="rotationcollation" id="rotation"></td>
                                <td><input type="text" class="form-control" name="objectifcollation" id="objectif"></td>
                                <td><input type="text" class="form-control" name="sensibilitecollation" id="sensibilite"></td>
                            </tr>
                            <tr>
                                <td>Soir</td>
                                <td><input type="time" class="form-control date" name="horairesoir" id="horaire"></td>
                                <td><input type="text" class="form-control" name="rotationsoir" id="rotation"></td>
                                <td><input type="text" class="form-control" name="objectifsoir" id="objectif"></td>
                                <td><input type="text" class="form-control" name="sensibilitesoir" id="soir"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </fieldset>
    <br/><br/>




    <fieldset class="well" id="field">
        <center><font><h4>HABITUDES ALIMENTAIRES</h4></font></center><br/>


        <div class="radio">	
            <label>SUIVI DE POIDS </label>
            <label>
                <input type="radio" name="regime" id="inputRegime" value="oui" checked="checked">
                Oui
            </label>
            <label>
                <input type="radio" name="regime" id="inputRegime2" value="non" checked="checked">
                Non 
            </label>
        </div>
        <br>
        <label for="observation2">Observation :  </label>
        <textarea rows="3" type="text" name="observation2" class="form-control" id="" placeholder="observation"></textarea>
        <br>
        <label for="survenue">Survenue de compilations :  </label>
        <textarea rows="3" type="text" name="survenue" class="form-control" id="" placeholder="survenue de compilations"></textarea>
        <br>
        <label for="atcd">ATCD/ autre pathologies :  </label>
        <textarea rows="3" type="text" name="atcd" class="form-control" id="" placeholder="ATCD/ autre pathologies"></textarea>
        <br>
        <label for="traitement">Traitement :  </label>
        <textarea rows="3" type="text" name="traitement" class="form-control" id="traitement" placeholder="traitement"></textarea>
        <br>
        <!-- <label for="observation2">Suivi de poids :  </label>
        <input type="text" name="observation2" class="form-control" id="" placeholder="suivi de poids"> -->
        <br>
        <div class="table-responsive">
            <table id="table_habitude" class="table table-bordered table-hover" style="color: white;">
                <tr>
                    <th>Date</th>
                    <th><input type="text" id="date1" class="col-lg-12 form-control datepickerAll" name="date1"></th>
                    <th><input type="text" id="date2" class="col-lg-12 form-control datepickerAll" name="date2"></th>
                    <th><input type="text" id="date3" class="col-lg-12 form-control datepickerAll" name="date3"></th>
                    <th><input type="text" id="date4" class="col-lg-12 form-control datepickerAll" name="date4"></th>
                    <th><input type="text" id="date5" class="col-lg-12 form-control datepickerAll" name="date5"></th>
                    <th><input type="text" id="date6" class="col-lg-12 form-control datepickerAll" name="date6"></th>
                    <th><input type="text" id="date7" class="col-lg-12 form-control datepickerAll" name="date7"></th>
                    <th><input type="text" id="date8" class="col-lg-12 form-control datepickerAll" name="date8"></th>
                    <th><input type="text" id="date9" class="col-lg-12 form-control datepickerAll" name="date9"></th>
                </tr>
                <tr>
                    <td>Taille</td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="taille1" name="taille1">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille2" name="taille2">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille3" name="taille3">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille4" name="taille4">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille5" name="taille5">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille6" name="taille6">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille7" name="taille7">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille8" name="taille8">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille9" name="taille9">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Poids</td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids1" name="poids1">
                            <span class="input-group-addon">kg</span>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids2" name="poids2">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids3" name="poids3">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids4" name="poids4">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids5" name="poids5">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids6" name="poids6">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids7" name="poids7">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids8" name="poids8">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids9" name="poids9">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>IMC</td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc1" name="imc1"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc2" name="imc2"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc3" name="imc3"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc4" name="imc4"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc5" name="imc5"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc6" name="imc6"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc7" name="imc7"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc8" name="imc8"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc9" name="imc9"></td>
                </tr>
            </table>	
        </div>


        <div class="row">
            <div id="graphe" class="col-lg-10">
                <canvas id="bar"/>
            </div>
        </div>
        <br/>

        <!-- <div class="radio">
            <label for="activitephysique2">Activité physique : </label>
            <label>
                <input type="radio" name="activitephysique2" id="inputActivitephysique2" value="oui" checked="checked">
                Oui
            </label>
            <label>
                <input type="radio" name="activitephysique2" id="inputActivitephysique2" value="non" checked="checked">
                Non
            </label>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="type">Type :  </label>
                <input type="text"  name="type" class="form-control" id="type" placeholder="type">
            </div>
            <div class="col-lg-6">
                <label for="frequence2">Fréquence :  </label>
                <input type="text" name="frequence2" class="form-control" id="frequence2" placeholder="fréquence">
            </div>
        </div> -->
    </fieldset><br/><br/>
</div>