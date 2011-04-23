<?php
# *** LICENSE ***
# This file is part of BlogoText.
#
# 2006      Frederic Nassar.
# 2010-2011 Timo Van Neerden <timovneerden@gmail.com>
#
# BlogoText is free software, you can redistribute it under the terms of the
# Creative Commons Attribution-NonCommercial-NoDerivs 2.0 France Licence
# *** LICENSE ***
//error_reporting(-1);
if ( !file_exists('../config/user.php') || !file_exists('../config/prefs.php') ) {
	header('Location: install.php');
}

require_once '../inc/inc.php';

check_session();

if (isset($_GET['q'])) {
	$tableau = table_recherche($GLOBALS['dossier_data_articles'], $_GET['q']);
	if (count($tableau) == '1') {
		redirection('ecrire.php?post_id='.get_id($tableau['0']));
	}
} elseif ( (isset($_GET['filtre'])) and ($_GET['filtre'] !== '') and (!isset($_GET['msg'])) ) {
	if ( preg_match('/\d{4}/',($_GET['filtre'])) ) {
		$annee = substr($_GET['filtre'], 0, 4);
		$mois = substr($_GET['filtre'], 4, 2);
		$dossier = $GLOBALS['dossier_data_articles'].'/'.$annee.'/'.$mois;
	$tableau = table_date($GLOBALS['dossier_data_articles'], $annee, $mois);
	} elseif ($_GET['filtre'] == 'draft') {
		$tableau = table_derniers($GLOBALS['dossier_data_articles'], '', '0');
	} elseif ($_GET['filtre'] == 'pub') {
		$tableau = table_derniers($GLOBALS['dossier_data_articles'], '', '1');
	}
} else {
  	$tableau = table_derniers($GLOBALS['dossier_data_articles'], $GLOBALS['max_bill_admin']);
}

afficher_top($GLOBALS['lang']['mesarticles']);
afficher_msg();
echo '<div id="top">'."\n";
moteur_recherche();
echo '<ul id="nav">'."\n";

afficher_menu('index.php');

echo '</ul>'."\n";
echo '</div>'."\n";
echo '<div id="axe">'."\n";
echo '<div id="page">'."\n";

if (isset($_GET['filtre'])) {
	afficher_form_filtre($GLOBALS['dossier_data_articles'], $_GET['filtre']);
} else {
	afficher_form_filtre($GLOBALS['dossier_data_articles']);
}

afficher_liste_articles($tableau);

footer();
?>
