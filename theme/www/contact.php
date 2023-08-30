<?php print '<?xml version="1.0" encoding="UTF-8"?>'?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>3F - Kontakt</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	<style type="text/css">@import url(css/styles.css);</style>
	<script type="text/javascript" src="js/detection.js"></script>
	<? include_once($_SERVER['LOCAL_PATH']."/includes/segment.php") ?>
</head>
<body>

<form action="#" method="post">

<div id="page" class="page">
	<div id="header">
		<a href="index" class="logo"><span>Til forsiden</span></a>
		<h1>Kontakt</h1>
	</div>
	<div id="content">
		<h2>Find afdeling</h2>
		<div id="branch">
			<fieldset>
				<label for="branchtext">Søg</label>
				<input type="text" class="text" value="Søg" name="branchtext" id="branchtext" />
				<input type="submit" class="button" value="Søg" />
			</fieldset>
		</div>
		<h2>24 timer service</h2>
		<div class="splash_call">
			<a href="call://4520742819"><span>Ring til 3F</span></a>
		</div>

		<h2>Bliv kontaktet af 3F</h2>
		<div id="contact">
			<fieldset>
				<label for="contactmessage">Besked</label>
				<textarea name="contactmessage" id="contactmessage" rows="3" cols="16">Besked</textarea>
				<label for="contactname">Navn</label>
				<input type="text" class="text" value="Navn" name="contactname" id="contactname" />
				<input type="submit" class="button" value="Bliv ringet op" />
			</fieldset>
		</div>

		<h2>Spørg en ekspert</h2>

		<div id="expert">
			<fieldset>
				<div class="CRcolumn i:x">
					<input type="radio" name="experttype" id="advokat" value="advokat" />
					<label for="advokat">Spørg advokaten</label>
					<input type="radio" name="experttype" id="akasse" value="akasse" />
					<label for="akasse">Spørg om a-kasse</label>
					<input type="radio" name="experttype" id="arbejde" value="arbejde" />
					<label for="arbejde">Spørg om løn og arbejde</label>
					<input type="radio" name="experttype" id="uddannelse" value="uddannelse" />
					<label for="uddannelse">Spørg om uddannelse</label>
					<input type="radio" name="experttype" id="socialraadgiver" value="socialraadgiver" />
					<label for="socialraadgiver">Spørg socialrådgiveren</label>
				</div>
				<label for="expertquestion">Spørgsmål</label>
				<textarea name="expertquestion" id="expertquestion" rows="3" cols="16">Spørgsmål</textarea>
				<label for="expertname">Navn</label>
				<input type="text" class="text" value="Navn" name="expertname" id="expertname" />
				<input type="submit" class="button" value="Bliv ringet op" />
			</fieldset>
		</div>
	</div>
	<ul id="nav" class="i:n">
		<li class="article"><a href="article">Nyheder</a></li>
		<li class="contact"><a href="contact">Kontakt</a></li>
		<li class="discount"><a href="discount">Rabat</a></li>
		<li class="union"><a href="union">Fagforening</a></li>
		<li class="a-kasse"><a href="a-kasse">A-kasse</a></li>
	</ul>
	<!--div id="search">
		<fieldset>
			<label for="searchtext">Søg</label>
			<input type="text" class="text" value="Søg" name="searchtext" id="searchtext" />
			<input type="submit" class="button i:s" value="Søg" />
			<a href="article" class="sitemap">Sitemap</a>
		</fieldset>
	</div-->
</div>

</form>

</body>
</html>