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
	$activitephysique2 = ($_POST["activitephysique2"]);
	$type = ($_POST["type"]);
	$frequence2 = ($_POST["frequence2"]);

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
	$schemamultiinjection = ($_POST['schemamultiinjection']);
	$stylo = ($_POST['stylo']);
	$autrestylo = ($_POST['autrestylo']);
	$aiguillestylo = ($_POST['aiguillestylo']);
	$autreaiguille = ($_POST['autreaiguille']);
	$insulinelentematin = ($_POST['insulinelentematin']);
	$insulinerapidematin = ($_POST['insulinerapidematin']);
	$quantitetotal = ($_POST['quantitetotal']);
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
	$ValGlycemique6= ($_POST['ValGlycemique6']);
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

	

	try 
	{
		$bdd->exec("INSERT INTO infobastide(nomresp, prenomresp, mobileresp, coordonnee) VALUES('" . $_POST["nomresp"] . "','" . $_POST["prenomresp"] . "','" . $_POST["mobileresp"] . "','" . $_POST["coordonnee"] . "')") or die(print_r($bdd->ErrorInfo()));

		$bdd->exec("INSERT INTO infopatient(nompatient, prenompatient, datenaissance, agepatient, telpatient, mobilepatient, adressepatient, codepostalpatient, villepatient) VALUES('" . $_POST["nompatient"] . "','" . $_POST["prenompatient"] . "','" . $_POST["datenaissance"] . "','" . $_POST["agepatient"] . "','" . $_POST["telpatient"] . "','" . $_POST["mobilepatient"] . "','" . $_POST["adressepatient"] . "','" . $_POST["codepostalpatient"] . "','" . $_POST["villepatient"] . "')")or die(print_r($bdd->ErrorInfo()));

		$bdd->exec("INSERT INTO infoprescripteur(etablissementprescripteur, villeep, serviceep, diabetologueprescripteur, teldp, mobiledp, villedp, maildp, diabetologueliberal, teldl, mobiledl, villedl, maildl, medecintraitant, telmt, mobilemt, villemt, mailmt, idereferente, telirs, mobileirs, villeirs, mailirs, dieteticienne, teld, mobiled, villed, maild, membrereseau, nomreseau) VALUES ('" . $_POST["etablissementprescripteur"] . "','" . $_POST["villeep"] . "', '" . $_POST["serviceep"] . "', '" . $_POST["diabetologueprescripteur"] . "','" . $_POST["teldp"] . "','" . $_POST["mobiledp"] . "','" . $_POST["villedp"] . "','" . $_POST["maildp"] . "','" . $_POST["diabetologueliberal"] . "','" . $_POST["teldl"] . "','" . $_POST["mobiledl"] . "','" . $_POST["villedl"] . "','" . $_POST["maildl"] . "','" . $_POST["medecintraitant"] . "','" . $_POST["telmt"] . "','" . $_POST["mobilemt"] . "','" . $_POST["villemt"] . "','" . $_POST["mailmt"] . "','" . $_POST["idereferente"] . "','" . $_POST["telirs"] . "','" . $_POST["mobileirs"] . "','" . $_POST["villeirs"] . "','" . $_POST["mailirs"] . "','" . $_POST["dieteticienne"] . "','" . $_POST["teld"] . "','" . $_POST["mobiled"] . "','" . $_POST["villed"] . "','" . $_POST["maild"] . "','" . $_POST["membrereseau"] . "','" . $_POST["nomreseau"] . "')") or die(print_r($bdd->errorInfo()));

		$bdd->exec("INSERT INTO choixmateriel(pompe, dateinstallation, typecatheter, modele, longueurcanule, longueurtubulure, inserteur, reservoir, spp, observation) VALUES('" . $_POST["pompe"] . "','" . $_POST["dateinstallation"] . "','" . $_POST["typecatheter"] . "','" . $_POST["modele"] . "','" . $_POST["longueurcanule"] . "','" . $_POST["longueurtubulure"] . "','" . $_POST["inserteur"] . "','" . $_POST["reservoir"] . "','" . $_POST["spp"] . "','" . $_POST["observation"] . "')")or die(print_r($bdd->ErrorInfo()));	

		$bdd->exec("INSERT INTO bolus(ValGlycemique1, ValGlycemique2, ValGlycemique3, ValGlycemique4, ValGlycemique5, ValGlycemique6, ValGlycemique7, ValGlyMatin1, ValGlyMatin2, ValGlyMatin3, ValGlyMatin4, ValGlyMatin5, ValGlyMatin6, ValGlyMatin7, ValGlyMid1, ValGlyMid2, ValGlyMid3, ValGlyMid4, ValGlyMid5, ValGlyMid6, ValGlyMid7, ValGlyCollation1, ValGlyCollation2, ValGlyCollation3, ValGlyCollation4, ValGlyCollation5, ValGlyCollation6, ValGlyCollation7, ValGlySoir1, ValGlySoir2, ValGlySoir3, ValGlySoir4, ValGlySoir5, ValGlySoir6, ValGlySoir7, ValGlyAutre1, ValGlyAutre2, ValGlyAutre3, ValGlyAutre4, ValGlyAutre5, ValGlyAutre6, ValGlyAutre7, objectifglycemiquepreprandial, objectifglycemiquepostprandial, ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9)  VALUES('".$ValGlycemique1."', '".$ValGlycemique2."', '".$ValGlycemique3."', '".$ValGlycemique4."', '".$ValGlycemique5."', '".$ValGlycemique6."', '".$ValGlycemique7."', '".$ValGlyMatin1."', '".$ValGlyMatin2."', '".$ValGlyMatin3."', '".$ValGlyMatin4."', '".$ValGlyMatin5."', '".$ValGlyMatin6."', '".$ValGlyMatin7."', '".$ValGlyMid1."', '".$ValGlyMid2."', '".$ValGlyMid3."', '".$ValGlyMid4."', '".$ValGlyMid5."', '".$ValGlyMid6."', '".$ValGlyMid7."', '".$ValGlyCollation1."', '".$ValGlyCollation2."', '".$ValGlyCollation3."', '".$ValGlyCollation4."', '".$ValGlyCollation5."', '".$ValGlyCollation6."', '".$ValGlyCollation7."', '".$ValGlySoir1."', '".$ValGlySoir2."', '".$ValGlySoir3."', '".$ValGlySoir4."', '".$ValGlySoir5."', '".$ValGlySoir6."', '".$ValGlySoir7."', '".$ValGlyAutre1."', '".$ValGlyAutre2."', '".$ValGlyAutre3."', '".$ValGlyAutre4."', '".$ValGlyAutre5."', '".$ValGlyAutre6."', '".$ValGlyAutre7."', '".$objectifglycemiquepreprandial."', '".$objectifglycemiquepostprandial."', '".$ValDatesHemGlyc1."', '".$ValDatesHemGlyc2."', '".$ValDatesHemGlyc3."', '".$ValDatesHemGlyc4."', '".$ValDatesHemGlyc5."', '".$ValDatesHemGlyc6."', '".$ValDatesHemGlyc7."', '".$ValDatesHemGlyc8."', '".$ValDatesHemGlyc9."', '".$ValHbA1cHemGlyc1."', '".$ValHbA1cHemGlyc2."', '".$ValHbA1cHemGlyc3."', '".$ValHbA1cHemGlyc4."', '".$ValHbA1cHemGlyc5."', '".$ValHbA1cHemGlyc6."', '".$ValHbA1cHemGlyc7."', '".$ValHbA1cHemGlyc8."', '".$ValHbA1cHemGlyc9."')");

		$bdd->exec("INSERT INTO habitudevie(activitephysique, profession, situationfamiliale, observation, hygienealimentaire, stabilitehoraires, details, environnement, etatcutane, choixpoint) VALUES('" . $activitephysique . "','" . $profession . "','" . $situationfamiliale . "','" . $observation . "','" . $hygienealimentaire . "','" . $stabilitehoraires . "','" . $details . "','" . $environnement . "','" . $etatcutane . "','" . $choixpoint . "')") or die(print_r($bdd->ErrorInfo()));


		$bdd->exec("INSERT INTO insulunotherapiefonctionnelle(horairematin, rotationmatin, objectifmatin, sensibilitematin, horairemidi, rotationmidi, objectifmidi, sensibilitemidi, horairecollation, rotationcollation, objectifcollation, sensibilitecollation, horairesoir, rotationsoir, objectifsoir, sensibilitesoir) VALUES('" . $horairematin . "','" . $rotationmatin . "','" . $objectifmatin . "','" . $sensibilitematin . "','" . $horairemidi . "','" . $rotationmidi . "','" . $objectifmidi . "','" . $sensibilitemidi . "','" . $horairecollation . "','" . $rotationcollation . "','" . $objectifcollation . "','" . $sensibilitecollation . "','" . $horairesoir . "','" . $rotationsoir . "','" . $objectifsoir . "','" . $sensibilitesoir . "')");


		$bdd->exec("INSERT INTO habitudealimentaire(regime, observation2, survenue, atcd, traitement, date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9, imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9, activitephysique2, type, frequence2) VALUES ('" . $regime . "','" . $observation2 . "', '" . $survenue . "', '" . $atcd . "','" . $traitement . "','" . $date1 . "','" . $date2 . "','" . $date3 . "','" . $date4 . "','" . $date5 . "','" . $date6 . "','" . $date7 . "','" . $date8 . "','" . $date9 . "','" . $taille1 . "','" . $taille2 . "','" . $taille3 . "','" . $taille4 . "','" . $taille5 . "','" . $taille6 . "','" . $taille7 . "','" . $taille8 . "','" . $taille9 . "','" . $poids1 . "','" . $poids2 . "','" . $poids3 . "','" . $poids4 . "','" . $poids5 . "','" . $poids6 . "','" . $poids7 . "','" . $poids8 . "','" . $poids9 . "','" . $imc1 . "','" . $imc2 . "','" . $imc3 . "','" . $imc4 . "','" . $imc5 . "','" . $imc6 . "','" . $imc7 . "','" . $imc8 . "','" . $imc9 . "','" . $activitephysique2 . "','" . $type . "','" . $frequence2 . "')") or die(print_r($bdd->errorInfo()));

		$req = $bdd->prepare("INSERT INTO DonneMedicale(typediabete, datediagnostic, circonstancedecouverte, antecedentfamiliaux, datepremieremisesouspompe, hba1c, poidsactuel, poidsforme, taille, imc, nombreglycemieparjour, typelecteur, dateprescription, styloautopiqueur, nombreinjectionjour, schemamultiinjection, stylo, autrestylo, aiguillestylo, autreaiguille, insulinelentematin, insulinerapidematin, quantitetotal, insulinelentemidi, insulinerapidemidi, insulinelentesoir, insulinerapidesoir, totalinsulinelente, totalinsulinerapide, specialite1, posologie1, specialite2, posologie2, specialite3, posologie3, specialite4, posologie4, Horaire1, Debit1, Horaire2, Debit2, Horaire3, Debit3, Horaire4, Debit4, Horaire5, Debit5, Horaire6, Debit6, Horaire7, Debit7, Horaire8, Debit8, Horaire9, Debit9, Horaire10, Debit10, Horaire11, Debit11, Horaire12, Debit12, Horaire13, Debit13, Horaire14, Debit14, Horaire15, Debit15, Horaire16, Debit16, Horaire21, Debit21, Horaire22, Debit22, Horaire23, Debit23, Horaire24, Debit24, Horaire25, Debit25, Horaire26, Debit26, Horaire27, Debit27, Horaire28, Debit28, Horaire29, Debit29, Horaire210, Debit210, Horaire211, Debit211, Horaire212, Debit212, Horaire213, Debit213, Horaire214, Debit214, Horaire215, Debit215, Horaire216, Debit216) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");

		$req->execute(array($typediabete, $datediagnostic, $circonstancedecouverte, $antecedentfamiliaux, $datepremieremisesouspompe, $hba1c, $poidsactuel, $poidsforme, $taille, $imc, $nombreglycemieparjour, $typelecteur, $dateprescription, $styloautopiqueur, $nombreinjectionjour, $schemamultiinjection, $stylo, $autrestylo, $aiguillestylo, $autreaiguille, $insulinelentematin, $insulinerapidematin, $quantitetotal, $insulinelentemidi, $insulinerapidemidi, $insulinelentesoir, $insulinerapidesoir, $totalinsulinelente, $totalinsulinerapide, $specialite1, $posologie1, $specialite2, $posologie2, $specialite3, $posologie3, $specialite4, $posologie4, $Horaire1, $Debit1, $Horaire2, $Debit2, $Horaire3, $Debit3, $Horaire4, $Debit4, $Horaire5, $Debit5, $Horaire6, $Debit6, $Horaire7, $Debit7, $Horaire8, $Debit8, $Horaire9, $Debit9, $Horaire10, $Debit10, $Horaire11, $Debit11, $Horaire12, $Debit12, $Horaire13, $Debit13, $Horaire14, $Debit14, $Horaire15, $Debit15, $Horaire16, $Debit16, $Horaire21, $Debit21, $Horaire22, $Debit22, $Horaire23, $Debit23, $Horaire24, $Debit24, $Horaire25, $Debit25, $Horaire26, $Debit26, $Horaire27, $Debit27, $Horaire28, $Debit28, $Horaire29, $Debit29, $Horaire210, $Debit210, $Horaire211, $Debit211, $Horaire212, $Debit212, $Horaire213, $Debit213, $Horaire214, $Debit214, $Horaire215, $Debit215, $Horaire216, $Debit216));

		echo "Enregistrement reussi!";

	} catch (PDOException $e) 
	{
		echo("Erreur : " .$e->getMessage());	
	}
?>