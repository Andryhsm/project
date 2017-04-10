<?php

require './cnx.php';


$activitephysique = ($_POST["activitephysique"]);
$profession = ($_POST["profession"]);
$situationfamiliale = ($_POST["situationfamiliale"]);
$observation = ($_POST["observation"]);
$hygienealimentaire = ($_POST["hygienealimentaire"]);
$stabilitehoraires = ($_POST["stabilitehoraires"]);
$details = ($_POST["details"]);
$environnement = ($_POST["details"]);
$etatcutane = ($_POST["etatcutane"]);
$choixpoint = ($_POST["choixpoint"]);
$horairematin = ($_POST["horairematin"]);
$rotationmatin = ($_POST["rotationmatin"]);
$objectifmatin = ($_POST["objectifmatin"]);
$sensibilitematin = ($_POST["sensibilitematin"]);
$horairemidi = ($_POST["horairemidi"]);
$rotationmidi = ($_POST["rotationmidi"]);
$objectifmidi = ($_POST["objectifmidi"]);
$sensibilitemidi = ($_POST["sensibilitemidi"]);
$horairecollation = ($_POST["horairecollation"]);
$rotationcollation = ($_POST["rotationcollation"]);
$objectifcollation = ($_POST["objectifcollation"]);
$sensibilitecollation = ($_POST["sensibilitecollation"]);
$horairesoir = ($_POST["horairesoir"]);
$rotationsoir = ($_POST["rotationsoir"]);
$objectifsoir = ($_POST["objectifsoir"]);
$sensibilitesoir = ($_POST["sensibilitesoir"]);
$regime = ($_POST["regime"]);
$observation2 = ($_POST["observation2"]);
$survenue = ($_POST["survenue"]);
$atcd = ($_POST["atcd"]);
$traitement = ($_POST["traitement"]);
$date1 = ($_POST["date1"]);
$date2 = ($_POST["date2"]);
$date3 = ($_POST["date3"]);
$date4 = ($_POST["date4"]);
$date5 = ($_POST["date5"]);
$date6 = ($_POST["date6"]);
$date7 = ($_POST["date7"]);
$date8 = ($_POST["date8"]);
$date9 = ($_POST["date9"]);
$taille1 = ($_POST["taille1"]);
$taille2 = ($_POST["taille2"]);
$taille3 = ($_POST["taille3"]);
$taille4 = ($_POST["taille4"]);
$taille5 = ($_POST["taille5"]);
$taille6 = ($_POST["taille6"]);
$taille7 = ($_POST["taille7"]);
$taille8 = ($_POST["taille8"]);
$taille9 = ($_POST["taille9"]);
$poids1 = ($_POST["poids1"]);
$poids2 = ($_POST["poids2"]);
$poids3 = ($_POST["poids3"]);
$poids4 = ($_POST["poids4"]);
$poids5 = ($_POST["poids5"]);
$poids6 = ($_POST["poids6"]);
$poids7 = ($_POST["poids7"]);
$poids8 = ($_POST["poids8"]);
$poids9 = ($_POST["poids9"]);
$imc1 = ($_POST["imc1"]);
$imc2 = ($_POST["imc2"]);
$imc3 = ($_POST["imc3"]);
$imc4 = ($_POST["imc4"]);
$imc5 = ($_POST["imc5"]);
$imc6 = ($_POST["imc6"]);
$imc7 = ($_POST["imc7"]);
$imc8 = ($_POST["imc8"]);
$imc9 = ($_POST["imc9"]);
//$activitephysique2 = ($_POST["activitephysique2"]);
//$type = ($_POST["type"]);
//$frequence2 = ($_POST["frequence2"]);
//Enregistrement dans la table habitudevie



$typediabete = ($_POST['typediabete']);
$datediagnostic = ($_POST['datediagnostic']);
$circonstancedecouverte = ($_POST['circonstancedecouverte']);
$antecedentfamiliaux = ($_POST['antecedentfamiliaux']);
$datepremieremisesouspompe = ($_POST['datepremieremisesouspompe']);
$hba1c = ($_POST['hba1c']);
$poidsactuel = ($_POST['poidsactuel']);
$poidsforme = ($_POST['poidsforme']);
$taille = ($_POST['taille']);
$imc = ($_POST['imc']);
$nombreglycemieparjour = ($_POST['nombreglycemieparjour']);
$typelecteur = ($_POST['typelecteur']);
$dateprescription = ($_POST['dateprescription']);
$styloautopiqueur = ($_POST['styloautopiqueur']);
$nombreinjectionjour = ($_POST['nombreinjectionjour']);
//$schemamultiinjection = ($_POST['schemamultiinjection']);
$stylo = ($_POST['stylo']);
$autrestylo = ($_POST['autrestylo']);
$aiguillestylo = ($_POST['aiguillestylo']);
$autreaiguille = ($_POST['autreaiguille']);
$insulinelentematin = ($_POST['insulinelentematin']);
$insulinerapidematin = ($_POST['insulinerapidematin']);
//$quantitetotal = ($_POST['quantitetotal']);
$insulinelentemidi = ($_POST['insulinelentemidi']);
$insulinerapidemidi = ($_POST['insulinerapidemidi']);
$insulinelentesoir = ($_POST['insulinelentesoir']);
$insulinerapidesoir = ($_POST['insulinerapidesoir']);
$totalinsulinelente = ($_POST['totalinsulinelente']);
$totalinsulinerapide = ($_POST['totalinsulinerapide']);
$specialite1 = ($_POST['specialite1']);
$posologie1 = ($_POST['posologie1']);
$specialite2 = ($_POST['specialite2']);
$posologie2 = ($_POST['posologie2']);
$specialite3 = ($_POST['specialite3']);
$posologie3 = ($_POST['posologie3']);
$specialite4 = ($_POST['specialite4']);
$posologie4 = ($_POST['posologie4']);
$Horaire1 = ($_POST['Horaire1']);
$Debit1 = ($_POST['Debit1']);
$Horaire2 = ($_POST['Horaire2']);
$Debit2 = ($_POST['Debit2']);
$Horaire3 = ($_POST['Horaire3']);
$Debit3 = ($_POST['Debit3']);
$Horaire4 = ($_POST['Horaire4']);
$Debit4 = ($_POST['Debit4']);
$Horaire5 = ($_POST['Horaire5']);
$Debit5 = ($_POST['Debit5']);
$Horaire6 = ($_POST['Horaire6']);
$Debit6 = ($_POST['Debit6']);
$Horaire7 = ($_POST['Horaire7']);
$Debit7 = ($_POST['Debit7']);
$Horaire8 = ($_POST['Horaire8']);
$Debit8 = ($_POST['Debit8']);
$Horaire9 = ($_POST['Horaire9']);
$Debit9 = ($_POST['Debit9']);
$Horaire10 = ($_POST['Horaire10']);
$Debit10 = ($_POST['Debit10']);
$Horaire11 = ($_POST['Horaire11']);
$Debit11 = ($_POST['Debit11']);
$Horaire12 = ($_POST['Horaire12']);
$Debit12 = ($_POST['Debit12']);
$Horaire13 = ($_POST['Horaire13']);
$Debit13 = ($_POST['Debit13']);
$Horaire14 = ($_POST['Horaire14']);
$Debit14 = ($_POST['Debit14']);
$Horaire15 = ($_POST['Horaire15']);
$Debit15 = ($_POST['Debit15']);
$Horaire16 = ($_POST['Horaire16']);
$Debit16 = ($_POST['Debit16']);
$Horaire21 = ($_POST['Horaire21']);
$Debit21 = ($_POST['Debit21']);
$Horaire22 = ($_POST['Horaire22']);
$Debit22 = ($_POST['Debit22']);
$Horaire23 = ($_POST['Horaire23']);
$Debit23 = ($_POST['Debit23']);
$Horaire24 = ($_POST['Horaire24']);
$Debit24 = ($_POST['Debit24']);
$Horaire25 = ($_POST['Horaire25']);
$Debit25 = ($_POST['Debit25']);
$Horaire26 = ($_POST['Horaire26']);
$Debit26 = ($_POST['Debit26']);
$Horaire27 = ($_POST['Horaire27']);
$Debit27 = ($_POST['Debit27']);
$Horaire28 = ($_POST['Horaire28']);
$Debit28 = ($_POST['Debit28']);
$Horaire29 = ($_POST['Horaire29']);
$Debit29 = ($_POST['Debit29']);
$Horaire210 = ($_POST['Horaire210']);
$Debit210 = ($_POST['Debit210']);
$Horaire211 = ($_POST['Horaire211']);
$Debit211 = ($_POST['Debit211']);
$Horaire212 = ($_POST['Horaire212']);
$Debit212 = ($_POST['Debit212']);
$Horaire213 = ($_POST['Horaire213']);
$Debit213 = ($_POST['Debit213']);
$Horaire214 = ($_POST['Horaire214']);
$Debit214 = ($_POST['Debit214']);
$Horaire215 = ($_POST['Horaire215']);
$Debit215 = ($_POST['Debit215']);
$Horaire216 = ($_POST['Horaire216']);
$Debit216 = ($_POST['Debit216']);

$ValGlycemique1 = ($_POST['ValGlycemique1']);
$ValGlycemique2 = ($_POST['ValGlycemique2']);
$ValGlycemique3 = ($_POST['ValGlycemique3']);
$ValGlycemique4 = ($_POST['ValGlycemique4']);
$ValGlycemique5 = ($_POST['ValGlycemique5']);
$ValGlycemique6 = ($_POST['ValGlycemique6']);
$ValGlycemique7 = ($_POST['ValGlycemique7']);

$ValGlyMatin1 = ($_POST['ValGlyMatin1']);
$ValGlyMatin2 = ($_POST['ValGlyMatin2']);
$ValGlyMatin3 = ($_POST['ValGlyMatin3']);
$ValGlyMatin4 = ($_POST['ValGlyMatin4']);
$ValGlyMatin5 = ($_POST['ValGlyMatin5']);
$ValGlyMatin6 = ($_POST['ValGlyMatin6']);
$ValGlyMatin7 = ($_POST['ValGlyMatin7']);

$ValGlyMid1 = ($_POST['ValGlyMid1']);
$ValGlyMid2 = ($_POST['ValGlyMid2']);
$ValGlyMid3 = ($_POST['ValGlyMid3']);
$ValGlyMid4 = ($_POST['ValGlyMid4']);
$ValGlyMid5 = ($_POST['ValGlyMid5']);
$ValGlyMid6 = ($_POST['ValGlyMid6']);
$ValGlyMid7 = ($_POST['ValGlyMid7']);

$ValGlyCollation1 = ($_POST['ValGlyCollation1']);
$ValGlyCollation2 = ($_POST['ValGlyCollation2']);
$ValGlyCollation3 = ($_POST['ValGlyCollation3']);
$ValGlyCollation4 = ($_POST['ValGlyCollation4']);
$ValGlyCollation5 = ($_POST['ValGlyCollation5']);
$ValGlyCollation6 = ($_POST['ValGlyCollation6']);
$ValGlyCollation7 = ($_POST['ValGlyCollation7']);

$ValGlySoir1 = ($_POST['ValGlySoir1']);
$ValGlySoir2 = ($_POST['ValGlySoir2']);
$ValGlySoir3 = ($_POST['ValGlySoir3']);
$ValGlySoir4 = ($_POST['ValGlySoir4']);
$ValGlySoir5 = ($_POST['ValGlySoir5']);
$ValGlySoir6 = ($_POST['ValGlySoir6']);
$ValGlySoir7 = ($_POST['ValGlySoir7']);

$ValGlyAutre1 = ($_POST['ValGlyAutre1']);
$ValGlyAutre2 = ($_POST['ValGlyAutre2']);
$ValGlyAutre3 = ($_POST['ValGlyAutre3']);
$ValGlyAutre4 = ($_POST['ValGlyAutre4']);
$ValGlyAutre5 = ($_POST['ValGlyAutre5']);
$ValGlyAutre6 = ($_POST['ValGlyAutre6']);
$ValGlyAutre7 = ($_POST['ValGlyAutre7']);

$objectifglycemiquepreprandial = ($_POST['objectifglycemiquepreprandial']);
$objectifglycemiquepostprandial = ($_POST['objectifglycemiquepostprandial']);

$ValDatesHemGlyc1 = ($_POST['ValDatesHemGlyc1']);
$ValDatesHemGlyc2 = ($_POST['ValDatesHemGlyc2']);
$ValDatesHemGlyc3 = ($_POST['ValDatesHemGlyc3']);
$ValDatesHemGlyc4 = ($_POST['ValDatesHemGlyc4']);
$ValDatesHemGlyc5 = ($_POST['ValDatesHemGlyc5']);
$ValDatesHemGlyc6 = ($_POST['ValDatesHemGlyc6']);
$ValDatesHemGlyc7 = ($_POST['ValDatesHemGlyc7']);
$ValDatesHemGlyc8 = ($_POST['ValDatesHemGlyc8']);
$ValDatesHemGlyc9 = ($_POST['ValDatesHemGlyc9']);

$ValHbA1cHemGlyc1 = ($_POST['ValHbA1cHemGlyc1']);
$ValHbA1cHemGlyc2 = ($_POST['ValHbA1cHemGlyc2']);
$ValHbA1cHemGlyc3 = ($_POST['ValHbA1cHemGlyc3']);
$ValHbA1cHemGlyc4 = ($_POST['ValHbA1cHemGlyc4']);
$ValHbA1cHemGlyc5 = ($_POST['ValHbA1cHemGlyc5']);
$ValHbA1cHemGlyc6 = ($_POST['ValHbA1cHemGlyc6']);
$ValHbA1cHemGlyc7 = ($_POST['ValHbA1cHemGlyc7']);
$ValHbA1cHemGlyc8 = ($_POST['ValHbA1cHemGlyc8']);
$ValHbA1cHemGlyc9 = ($_POST['ValHbA1cHemGlyc9']);






try {
    
      $bdd->exec("INSERT INTO infobastide(nomresp, prenomresp, mobileresp, coordonnee) VALUES('" . $_POST["nomresp"] . "','" . $_POST["prenomresp"] . "','" . $_POST["mobileresp"] . "','" . $_POST["coordonnee"] . "')") or die(print_r($bdd->ErrorInfo()));

      $bdd->exec("INSERT INTO infopatient(nompatient, prenompatient, datenaissance, agepatient, telpatient, mobilepatient, adressepatient, codepostalpatient, villepatient) VALUES('" . $_POST["nompatient"] . "','" . $_POST["prenompatient"] . "','" . $_POST["datenaissance"] . "','" . $_POST["agepatient"] . "','" . $_POST["telpatient"] . "','" . $_POST["mobilepatient"] . "','" . $_POST["adressepatient"] . "','" . $_POST["codepostalpatient"] . "','" . $_POST["villepatient"] . "')")or die(print_r($bdd->ErrorInfo()));

      $bdd->exec("INSERT INTO infoprescripteur(etablissementprescripteur, serviceep, diabetologueprescripteur, teldp, mobiledp, villedp, maildp, diabetologueliberal, teldl, mobiledl, villedl, maildl, medecintraitant, telmt, mobilemt, villemt, mailmt,dieteticienne, teld, mobiled, villed, maild, membrereseau, nomreseau) VALUES ('" . $_POST["etablissementprescripteur"] . "', '" . $_POST["serviceep"] . "', '" . $_POST["diabetologueprescripteur"] . "','" . $_POST["teldp"] . "','" . $_POST["mobiledp"] . "','" . $_POST["villedp"] . "','" . $_POST["maildp"] . "','" . $_POST["diabetologueliberal"] . "','" . $_POST["teldl"] . "','" . $_POST["mobiledl"] . "','" . $_POST["villedl"] . "','" . $_POST["maildl"] . "','" . $_POST["medecintraitant"] . "','" . $_POST["telmt"] . "','" . $_POST["mobilemt"] . "','" . $_POST["villemt"] . "','" . $_POST["mailmt"] . "','" . $_POST["dieteticienne"] . "','" . $_POST["teld"] . "','" . $_POST["mobiled"] . "','" . $_POST["villed"] . "','" . $_POST["maild"] . "','" . $_POST["membrereseau"] . "','" . $_POST["nomreseau"] . "')") or die(print_r($bdd->errorInfo()));

      $bdd->exec("INSERT INTO choixmateriel(pompe, dateinstallation, typecatheter, modele, longueurcanule, longueurtubulure, inserteur, reservoir, spp, observation) VALUES('" . $_POST["pompe"] . "','" . $_POST["dateinstallation"] . "','" . $_POST["catheter"] . "','" . $_POST["modele"] . "','" . $_POST["longueurcanule"] . "','" . $_POST["longueurtubulure"] . "','" . $_POST["inserteur"] . "','" . $_POST["reservoir"] . "','" . $_POST["spp"] . "','" . $_POST["observation"] . "')")or die(print_r($bdd->ErrorInfo()));

      $bdd->exec("INSERT INTO bolus(ValGlycemique1, ValGlycemique2, ValGlycemique3, ValGlycemique4, ValGlycemique5, ValGlycemique6, ValGlycemique7, ValGlyMatin1, ValGlyMatin2, ValGlyMatin3, ValGlyMatin4, ValGlyMatin5, ValGlyMatin6, ValGlyMatin7, ValGlyMid1, ValGlyMid2, ValGlyMid3, ValGlyMid4, ValGlyMid5, ValGlyMid6, ValGlyMid7, ValGlyCollation1, ValGlyCollation2, ValGlyCollation3, ValGlyCollation4, ValGlyCollation5, ValGlyCollation6, ValGlyCollation7, ValGlySoir1, ValGlySoir2, ValGlySoir3, ValGlySoir4, ValGlySoir5, ValGlySoir6, ValGlySoir7, ValGlyAutre1, ValGlyAutre2, ValGlyAutre3, ValGlyAutre4, ValGlyAutre5, ValGlyAutre6, ValGlyAutre7, objectifglycemiquepreprandial, objectifglycemiquepostprandial, ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9)  VALUES('".$ValGlycemique1."', '".$ValGlycemique2."', '".$ValGlycemique3."', '".$ValGlycemique4."', '".$ValGlycemique5."', '".$ValGlycemique6."', '".$ValGlycemique7."', '".$ValGlyMatin1."', '".$ValGlyMatin2."', '".$ValGlyMatin3."', '".$ValGlyMatin4."', '".$ValGlyMatin5."', '".$ValGlyMatin6."', '".$ValGlyMatin7."', '".$ValGlyMid1."', '".$ValGlyMid2."', '".$ValGlyMid3."', '".$ValGlyMid4."', '".$ValGlyMid5."', '".$ValGlyMid6."', '".$ValGlyMid7."', '".$ValGlyCollation1."', '".$ValGlyCollation2."', '".$ValGlyCollation3."', '".$ValGlyCollation4."', '".$ValGlyCollation5."', '".$ValGlyCollation6."', '".$ValGlyCollation7."', '".$ValGlySoir1."', '".$ValGlySoir2."', '".$ValGlySoir3."', '".$ValGlySoir4."', '".$ValGlySoir5."', '".$ValGlySoir6."', '".$ValGlySoir7."', '".$ValGlyAutre1."', '".$ValGlyAutre2."', '".$ValGlyAutre3."', '".$ValGlyAutre4."', '".$ValGlyAutre5."', '".$ValGlyAutre6."', '".$ValGlyAutre7."', '".$objectifglycemiquepreprandial."', '".$objectifglycemiquepostprandial."', '".$ValDatesHemGlyc1."', '".$ValDatesHemGlyc2."', '".$ValDatesHemGlyc3."', '".$ValDatesHemGlyc4."', '".$ValDatesHemGlyc5."', '".$ValDatesHemGlyc6."', '".$ValDatesHemGlyc7."', '".$ValDatesHemGlyc8."', '".$ValDatesHemGlyc9."', '".$ValHbA1cHemGlyc1."', '".$ValHbA1cHemGlyc2."', '".$ValHbA1cHemGlyc3."', '".$ValHbA1cHemGlyc4."', '".$ValHbA1cHemGlyc5."', '".$ValHbA1cHemGlyc6."', '".$ValHbA1cHemGlyc7."', '".$ValHbA1cHemGlyc8."', '".$ValHbA1cHemGlyc9."')");

      $bdd->exec("INSERT INTO habitudevie(activitephysique, profession, situationfamiliale, observation, hygienealimentaire, stabilitehoraires, details, environnement, etatcutane, choixpoint) VALUES('" . $activitephysique . "','" . $profession . "','" . $situationfamiliale . "','" . $observation . "','" . $hygienealimentaire . "','" . $stabilitehoraires . "','" . $details . "','" . $environnement . "','" . $etatcutane . "','" . $choixpoint . "')") or die(print_r($bdd->ErrorInfo()));


      $bdd->exec("INSERT INTO insulunotherapiefonctionnelle(horairematin, rotationmatin, objectifmatin, sensibilitematin, horairemidi, rotationmidi, objectifmidi, sensibilitemidi, horairecollation, rotationcollation, objectifcollation, sensibilitecollation, horairesoir, rotationsoir, objectifsoir, sensibilitesoir) VALUES('" . $horairematin . "','" . $rotationmatin . "','" . $objectifmatin . "','" . $sensibilitematin . "','" . $horairemidi . "','" . $rotationmidi . "','" . $objectifmidi . "','" . $sensibilitemidi . "','" . $horairecollation . "','" . $rotationcollation . "','" . $objectifcollation . "','" . $sensibilitecollation . "','" . $horairesoir . "','" . $rotationsoir . "','" . $objectifsoir . "','" . $sensibilitesoir . "')");


      $bdd->exec("INSERT INTO habitudealimentaire(regime, observation2, survenue, atcd, traitement, date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9, imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9) VALUES ('" . $regime . "','" . $observation2 . "', '" . $survenue . "', '" . $atcd . "','" . $traitement . "','" . $date1 . "','" . $date2 . "','" . $date3 . "','" . $date4 . "','" . $date5 . "','" . $date6 . "','" . $date7 . "','" . $date8 . "','" . $date9 . "','" . $taille1 . "','" . $taille2 . "','" . $taille3 . "','" . $taille4 . "','" . $taille5 . "','" . $taille6 . "','" . $taille7 . "','" . $taille8 . "','" . $taille9 . "','" . $poids1 . "','" . $poids2 . "','" . $poids3 . "','" . $poids4 . "','" . $poids5 . "','" . $poids6 . "','" . $poids7 . "','" . $poids8 . "','" . $poids9 . "','" . $imc1 . "','" . $imc2 . "','" . $imc3 . "','" . $imc4 . "','" . $imc5 . "','" . $imc6 . "','" . $imc7 . "','" . $imc8 . "','" . $imc9 . "')") or die(print_r($bdd->errorInfo()));
 
      $bdd->exec("INSERT INTO manipulationdelapompe(date1, date2, date3, date4, commentaire1, date5, date6, date7, date8, commentaire2, date9, date10, date11, date12, commentaire3, date13, date14, date15, date16, commentaire4, date17, date18, date19, date20, commentaire5, date21, date22, date23, date24, commentaire6, date25, date26, date27, date28, commentaire7, date29, date30, date31, date32, commentaire8, date33, date34, date35, date36, commentaire9) VALUES ('" . $_POST["pmpdate1"] . "','" . $_POST["pmpdate2"] . "','" . $_POST["pmpdate3"] . "','" . $_POST["pmpdate4"] . "','" . $_POST["pmpcommentaire1"] . "','" . $_POST["pmpdate5"] . "','" . $_POST["pmpdate6"] . "','" . $_POST["pmpdate7"] . "','" . $_POST["pmpdate8"] . "','" . $_POST["pmpcommentaire2"] . "','" . $_POST["pmpdate9"] . "','" . $_POST["pmpdate10"] . "','" . $_POST["pmpdate11"] . "','" . $_POST["pmpdate12"] . "','" . $_POST["pmpcommentaire3"] . "','" . $_POST["pmpdate13"] . "','" . $_POST["pmpdate14"] . "','" . $_POST["pmpdate15"] . "','" . $_POST["pmpdate16"] . "','" . $_POST["pmpcommentaire4"] . "','" . $_POST["pmpdate17"] . "','" . $_POST["pmpdate18"] . "','" . $_POST["pmpdate19"] . "','" . $_POST["pmpdate20"] . "','" . $_POST["pmpcommentaire5"] . "','" . $_POST["pmpdate21"] . "','" . $_POST["pmpdate22"] . "','" . $_POST["pmpdate23"] . "','" . $_POST["pmpdate24"] . "','" . $_POST["pmpcommentaire6"] . "','" . $_POST["pmpdate25"] . "','" . $_POST["pmpdate26"] . "','" . $_POST["pmpdate27"] . "','" . $_POST["pmpdate28"] . "','" . $_POST["pmpcommentaire7"] . "','" . $_POST["pmpdate29"] . "','" . $_POST["pmpdate291"] . "','" . $_POST["pmpdate292"] . "','" . $_POST["pmpdate293"] . "','" . $_POST["pmpcommentaire8"] . "','" . $_POST["pmpdate294"] . "','" . $_POST["pmpdate295"] . "','" . $_POST["pmpdate296"] . "','" . $_POST["pmpdate297"] . "','" . $_POST["pmpcommentaire1"] . "')") or die(print_r($bdd->ErrorInfo()));

      $bdd->exec("INSERT INTO alarmesetprecautions(alarmedate1, alarmedate2, alarmedate3, alarmedate4, commentaire1, alarmedate5, alarmedate6, alarmedate7, alarmedate8, commentaire2, alarmedate9, alarmedate10, alarmedate11, alarmedate12, commentaire3, alarmedate13, alarmedate14, alarmedate15, alarmedate16, commentaire4, alarmedate17, alarmedate18, alarmedate19, alarmedate20, commentaire5, alarmedate21, alarmedate22, alarmedate23, alarmedate24, commentaire6, alarmedate25, alarmedate26, alarmedate27, alarmedate28, commentaire7) VALUES ('" . $_POST["alarmedate1"] . "','" . $_POST["alarmedate2"] . "','" . $_POST["alarmedate3"] . "','" . $_POST["alarmedate4"] . "','" . $_POST["alarmecommentaire1"] . "','" . $_POST["alarmedate5"] . "','" . $_POST["alarmedate6"] . "','" . $_POST["alarmedate7"] . "','" . $_POST["alarmedate8"] . "','" . $_POST["alarmecommentaire2"] . "','" . $_POST["alarmedate9"] . "','" . $_POST["alarmedate10"] . "','" . $_POST["alarmedate11"] . "','" . $_POST["alarmedate12"] . "','" . $_POST["alarmecommentaire3"] . "','" . $_POST["alarmedate13"] . "','" . $_POST["alarmedate14"] . "','" . $_POST["alarmedate15"] . "','" . $_POST["alarmedate16"] . "','" . $_POST["alarmecommentaire4"] . "','" . $_POST["alarmedate17"] . "','" . $_POST["alarmedate18"] . "','" . $_POST["alarmedate19"] . "','" . $_POST["alarmedate20"] . "','" . $_POST["alarmecommentaire5"] . "','" . $_POST["alarmedate21"] . "','" . $_POST["alarmedate22"] . "','" . $_POST["alarmedate23"] . "','" . $_POST["alarmedate24"] . "','" . $_POST["alarmecommentaire6"] . "','" . $_POST["alarmedate25"] . "','" . $_POST["alarmedate26"] . "','" . $_POST["alarmedate27"] . "','" . $_POST["alarmedate28"] . "','" . $_POST["alarmecommentaire7"] . "')") or die(print_r($bdd->ErrorInfo()));

    
    $bdd->exec("INSERT INTO manipulations
		(
			date1, date2, date3, date4, 
			commentaire1, 
			date5, date6, date7, date8,
			commentaire2, 
			date9, date10, date11, date12,
			commentaire3, 
			date13, date14, date15, date16,
			commentaire4, 
			date17, date18, date19, date20,
			commentaire5
		) VALUES 
		('"
                    . $_POST["manipdate1"] . "','"
                    . $_POST["manipdate2"] . "','"
                    . $_POST["manipdate3"] . "','"
                    . $_POST["manipdate4"] . "','"
                    . $_POST["manipcommentaire1"] . "','"
                    . $_POST["manipdate5"] . "','"
                    . $_POST["manipdate6"] . "','"
                    . $_POST["manipdate7"] . "','"
                    . $_POST["manipdate8"] . "','"
                    . $_POST["manipcommentaire2"] . "','"
                    . $_POST["manipdate9"] . "','"
                    . $_POST["manipdate10"] . "','"
                    . $_POST["manipdate11"] . "','"
                    . $_POST["manipdate12"] . "','"
                    . $_POST["manipcommentaire3"] . "','"
                    . $_POST["manipdate13"] . "','"
                    . $_POST["manipdate14"] . "','"
                    . $_POST["manipdate15"] . "','"
                    . $_POST["manipdate16"] . "','"
                    . $_POST["manipcommentaire4"] . "','"
                    . $_POST["manipdate17"] . "','"
                    . $_POST["manipdate18"] . "','"
                    . $_POST["manipdate19"] . "','"
                    . $_POST["manipdate20"] . "','"
                    . $_POST["manipcommentaire5"] .
                    "')") or die(print_r($bdd->ErrorInfo()));


    $bdd->exec("INSERT INTO poseducatheter
		(
			date1, date2, date3, date4, 
			commentaire1, 
			date5, date6, date7, date8,
			commentaire2, 
			date9, date10, date11, date12,
			commentaire3, 
			date13, date14, date15, date16,
			commentaire4, 
			date17, date18, date19, date20,
			commentaire5,
			date21, date22, date23, date24,
			commentaire6,
			date25, date26, date27, date28,
			commentaire7,
			date29, date30, date31, date32,
			commentaire8,
			date33, date34, date35, date36,
			commentaire9,
			date37, date38, date39, date40,
			commentaire10,
			date41, date42, date43, date44,
			commentaire11
		) VALUES 
		('"
                    . $_POST["cathdate1"] . "','"
                    . $_POST["cathdate2"] . "','"
                    . $_POST["cathdate3"] . "','"
                    . $_POST["cathdate4"] . "','"
                    . $_POST["cathcommentaire1"] . "','"
                    . $_POST["cathdate5"] . "','"
                    . $_POST["cathdate6"] . "','"
                    . $_POST["cathdate7"] . "','"
                    . $_POST["cathdate8"] . "','"
                    . $_POST["cathcommentaire2"] . "','"
                    . $_POST["cathdate9"] . "','"
                    . $_POST["cathdate10"] . "','"
                    . $_POST["cathdate11"] . "','"
                    . $_POST["cathdate12"] . "','"
                    . $_POST["cathcommentaire3"] . "','"
                    . $_POST["cathdate13"] . "','"
                    . $_POST["cathdate14"] . "','"
                    . $_POST["cathdate15"] . "','"
                    . $_POST["cathdate16"] . "','"
                    . $_POST["cathcommentaire4"] . "','"
                    . $_POST["cathdate17"] . "','"
                    . $_POST["cathdate18"] . "','"
                    . $_POST["cathdate19"] . "','"
                    . $_POST["cathdate20"] . "','"
                    . $_POST["cathcommentaire5"] . "','"
                    . $_POST["cathdate21"] . "','"
                    . $_POST["cathdate22"] . "','"
                    . $_POST["cathdate23"] . "','"
                    . $_POST["cathdate24"] . "','"
                    . $_POST["cathcommentaire6"] . "','"
                    . $_POST["cathdate25"] . "','"
                    . $_POST["cathdate26"] . "','"
                    . $_POST["cathdate27"] . "','"
                    . $_POST["cathdate28"] . "','"
                    . $_POST["cathcommentaire7"] . "','"
                    . $_POST["cathdate29"] . "','"
                    . $_POST["cathdate211"] . "','"
                    . $_POST["cathdate212"] . "','"
                    . $_POST["cathdate213"] . "','"
                    . $_POST["cathcommentaire8"] . "','"
                    . $_POST["cathdate214"] . "','"
                    . $_POST["cathdate215"] . "','"
                    . $_POST["cathdate216"] . "','"
                    . $_POST["cathdate217"] . "','"
                    . $_POST["cathcommentaire9"] . "','"
                    . $_POST["cathdate218"] . "','"
                    . $_POST["cathdate219"] . "','"
                    . $_POST["cathdate221"] . "','"
                    . $_POST["cathdate222"] . "','"
                    . $_POST["cathcommentaire10"] . "','"
                    . $_POST["cathdate223"] . "','"
                    . $_POST["cathdate224"] . "','"
                    . $_POST["cathdate225"] . "','"
                    . $_POST["cathdate226"] . "','"
                    . $_POST["cathcommentaire11"] .
                    "')") or die(print_r($bdd->ErrorInfo()));


    $req = $bdd->prepare("INSERT INTO DonneMedicale(typediabete, datediagnostic, circonstancedecouverte, antecedentfamiliaux, datepremieremisesouspompe, hba1c, poidsactuel, poidsforme, taille, imc, nombreglycemieparjour, typelecteur, dateprescription, styloautopiqueur, nombreinjectionjour, stylo, autrestylo, aiguillestylo, autreaiguille, insulinelentematin, insulinerapidematin, insulinelentemidi, insulinerapidemidi, insulinelentesoir, insulinerapidesoir, totalinsulinelente, totalinsulinerapide, specialite1, posologie1, specialite2, posologie2, specialite3, posologie3, specialite4, posologie4, Horaire1, Debit1, Horaire2, Debit2, Horaire3, Debit3, Horaire4, Debit4, Horaire5, Debit5, Horaire6, Debit6, Horaire7, Debit7, Horaire8, Debit8, Horaire9, Debit9, Horaire10, Debit10, Horaire11, Debit11, Horaire12, Debit12, Horaire13, Debit13, Horaire14, Debit14, Horaire15, Debit15, Horaire16, Debit16, Horaire21, Debit21, Horaire22, Debit22, Horaire23, Debit23, Horaire24, Debit24, Horaire25, Debit25, Horaire26, Debit26, Horaire27, Debit27, Horaire28, Debit28, Horaire29, Debit29, Horaire210, Debit210, Horaire211, Debit211, Horaire212, Debit212, Horaire213, Debit213, Horaire214, Debit214, Horaire215, Debit215, Horaire216, Debit216) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");

    $req->execute(array($typediabete, $datediagnostic, $circonstancedecouverte, $antecedentfamiliaux, $datepremieremisesouspompe, $hba1c, $poidsactuel, $poidsforme, $taille, $imc, $nombreglycemieparjour, $typelecteur, $dateprescription, $styloautopiqueur, $nombreinjectionjour, $stylo, $autrestylo, $aiguillestylo, $autreaiguille, $insulinelentematin, $insulinerapidematin, $insulinelentemidi, $insulinerapidemidi, $insulinelentesoir, $insulinerapidesoir, $totalinsulinelente, $totalinsulinerapide, $specialite1, $posologie1, $specialite2, $posologie2, $specialite3, $posologie3, $specialite4, $posologie4, $Horaire1, $Debit1, $Horaire2, $Debit2, $Horaire3, $Debit3, $Horaire4, $Debit4, $Horaire5, $Debit5, $Horaire6, $Debit6, $Horaire7, $Debit7, $Horaire8, $Debit8, $Horaire9, $Debit9, $Horaire10, $Debit10, $Horaire11, $Debit11, $Horaire12, $Debit12, $Horaire13, $Debit13, $Horaire14, $Debit14, $Horaire15, $Debit15, $Horaire16, $Debit16, $Horaire21, $Debit21, $Horaire22, $Debit22, $Horaire23, $Debit23, $Horaire24, $Debit24, $Horaire25, $Debit25, $Horaire26, $Debit26, $Horaire27, $Debit27, $Horaire28, $Debit28, $Horaire29, $Debit29, $Horaire210, $Debit210, $Horaire211, $Debit211, $Horaire212, $Debit212, $Horaire213, $Debit213, $Horaire214, $Debit214, $Horaire215, $Debit215, $Horaire216, $Debit216));



    $bdd->exec("INSERT INTO asg1
			(
				asgdetail1, asgdetail2, asgdetail3, asgdetail4, asgobservation1, asgobservation2, asgobservation3, asgobservation4)
			VALUES 
			('"
                    . $_POST["asgdetail1"] . "','"
                    . $_POST["asgdetail2"] . "','"
                    . $_POST["asgdetail3"] . "','"
                    . $_POST["asgdetail4"] . "','"
                    . $_POST["asgobservation1"] . "','"
                    . $_POST["asgobservation2"] . "','"
                    . $_POST["asgobservation3"] . "','"
                    . $_POST["asgobservation4"] .
                    "')") or die(print_r($bdd->ErrorInfo()));




    $bdd->exec("INSERT INTO asg2
			(
				asgfrequence1, asgfrequence2, asgconnaissance1, asgconnaissance2)
			VALUES 
			('"
                    . $_POST["asgfrequence1"] . "','"
                    . $_POST["asgfrequence2"] . "','"
                    . $_POST["asgconnaissance1"] . "','"
                    . $_POST["asgconnaissance2"] .
                    "')") or die(print_r($bdd->ErrorInfo()));



    $bdd->exec("INSERT INTO connaissances
			(
				reponse1, reponse2, reponse3, reponse4, reponse5, reponse6, reponse7, reponse8, reponse9, reponse10, reponse11,
				observation1, observation2, observation3, observation4, observation5, observation6, observation7, observation8,
				date1, date2)
			VALUES 
			('"
                    . $_POST["connaissance1"] . "','"
                    . $_POST["connaissance2"] . "','"
                    . $_POST["connaissance3"] . "','"
                    . $_POST["connaissance4"] . "','"
                    . $_POST["connaissance5"] . "','"
                    . $_POST["connaissance6"] . "','"
                    . $_POST["connaissance7"] . "','"
                    . $_POST["connaissance8"] . "','"
                    . $_POST["connaissance9"] . "','"
                    . $_POST["connaissance10"] . "','"
                    . $_POST["connaissance11"] . "','"
                    . $_POST["cnsobservation1"] . "','"
                    . $_POST["cnsobservation2"] . "','"
                    . $_POST["cnsobservation3"] . "','"
                    . $_POST["cnsobservation4"] . "','"
                    . $_POST["cnsobservation5"] . "','"
                    . $_POST["cnsobservation6"] . "','"
                    . $_POST["cnsobservation7"] . "','"
                    . $_POST["cnsobservation8"] . "','"
                    . $_POST["perempdate1"] . "','"
                    . $_POST["perempdate2"] .
                    "')") or die(print_r($bdd->ErrorInfo()));


    echo "Enregistrement reussi!";
} catch (PDOException $e) {
    echo("Erreur : " . $e->getMessage());
}
?>