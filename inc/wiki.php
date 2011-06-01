<?php
# *** LICENSE ***
# This file is part of BlogoText.
# http://lehollandaisvolant.net/blogotext/
#
# 2006      Frederic Nassar.
# 2010-2011 Timo Van Neerden <timovneerden@gmail.com>
#
# BlogoText is free software, you can redistribute it under the terms of the
# Creative Commons Attribution-NonCommercial 2.0 France Licence
#
# Also, any distributors of non-official releases MUST warn the final user of it, by any visible way before the download.
# *** LICENSE ***

require_once '../inc/inc.php';
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<link type="text/css" rel="stylesheet" href="wiki/ecrire.css" />
<title>Mise en forme des commentaires</title>
</head>

<body>
<div id="axe">
<div id="wikipage">

<h1 style=""><?php print $GLOBALS['lang']['label_wiki']; ?></h1>

<h2><?php print $GLOBALS['lang']['wiki_lien']; ?> :</h2>
<pre><?php print $GLOBALS['lang']['wiki_lien_exp']; ?></pre>

<h2><?php print $GLOBALS['lang']['wiki_gras']; ?> :</h2>
<pre><?php print $GLOBALS['lang']['wiki_gras_exp']; ?></pre>

<h2><?php print $GLOBALS['lang']['wiki_italique']; ?> :</h2>
<pre><?php print $GLOBALS['lang']['wiki_italique_exp']; ?></pre>

<h2><?php print $GLOBALS['lang']['wiki_souligne']; ?> :</h2>
<pre><?php print $GLOBALS['lang']['wiki_souligne_exp']; ?></pre>

<h2><?php print $GLOBALS['lang']['wiki_quote']; ?> :</h2>
<pre><?php print $GLOBALS['lang']['wiki_quote_exp']; ?></pre>


</div>
</div>

</body>
</html>
