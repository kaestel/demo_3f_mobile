<?php print '<?xml version="1.0" encoding="UTF-8"?>'?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>3F - Nyheder</title>
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
		<h1>Examples</h1>
	</div>
	<div id="content">

		<h1>CSS initiators</h1>
		<ul style="padding: 8px;">
			<li><a href="#i:a">i:a - Append content</a></li>
			<li><a href="#i:c">i:c - Content extender</a></li>
			<li><a href="#i:d">i:d - Div link</a></li>
			<li><a href="#i:i">i:i - Image replacer</a></li>
			<li><a href="#i:l">i:l Li link</a></li>
			<li><a href="#i:n">i:n navigation</a></li>
			<li><a href="#i:r">i:r append reader element</a></li>
			<li><a href="#i:s">i:s Search extension</a></li>
			<li><a href="#i:x">i:x Merge radio buttons to select</a></li>
		</ul>

		<hr />

		<h3 id="i:c">i:c - Content extender</h3>
		<ul class="segment">
			<li>
				<div>
					<p>Get content from server. Currently not attatched to server feed!</p>
					<p><em>i:c id:1</em> returns content where id = 1</p>
					<p> - is only for demonstration. Currently not attatched to server feed!</p>
					<p class="i:c id:1" />
				</div>
			</li>
		</ul>

		<hr />

		<h3 id="i:d">i:d - Div link</h3>
		<div class="splash">
			<h3><a href="article" class="i:d">Link with class <em>i:d</em></a></h3>
			<p>Automatically finds first parent <em>div</em> and creates <em>onclick location href</em> with value of <em>a href</em></p>
		</div>

		<hr />

		<h3 id="i:i">i:i - Image replacer</h3>
		<ul class="segment">
			<li>
				<img src="img/pi_segment_f_46.gif" alt="picture" class="i:i s:46:64" />
				<div>
					<p>Replaces images based on s:##:## class value. This example replaces pi_segment_f_46.gif with pi_segment_f_64.gif based on the s:46:64 class value.</p>
					<p> - is only for demonstration, images should be delivered in the right size</p>
				</div>
			</li>
		</ul>

		<hr />

		<h3 id="i:l">i:l - Li link</h3>
		<ul class="segment">
			<li>
				<div>
					<h3><a href="article" class="i:l">Link with class <em>i:l</em></a></h3>
					<p>Automatically finds first parent <em>div</em> and creates <em>onclick location href</em> with value of <em>a href</em></p>
				</div>
			</li>
		</ul>

		<hr />

		<h3 id="i:r">i:r - Append reader element</h3>
		<p>Append reader element to author element. Reader will link to value of id:value in the classname.</p>
		<p>Currently the url part is set in the content_extender.js. Must be altered for future implementations.</p>
		<div class="article">
			<div class="author i:r id:345"><span>Af <a href="article">Navn Navnesen</a> 4. Sep kl. 00:06</span></div>
		</div>

		<hr />

		<h3 id="i:x">i:x - Merge radio buttons to select</h3>
		<p>Looks for inputs and labels in container and replace them with select based on the merged values.</p>
		<div class="CRcolumn i:x">
			<input type="radio" name="example" id="Lorem" value="Lorem" />
			<label for="Lorem">Lorem ipsum</label>
			<input type="radio" name="example" id="Dolor" value="Dolor" />
			<label for="Dolor">Dolor sit amet</label>
		</div>

		<hr />

		<h3 id="i:a">i:a - Append content</h3>
		<p>Add a html element to container on which it is applied. See example on fieldset in div#search.</p>
		<p> - is only for simple static injections. Currently not attatched to server feed!</p>

		<hr />

		<h3 id="i:s">i:s - Search extension</h3>
		<p>Extends the search element for extended page functionality.</p>

		<hr />

		<h3 id="i:n">i:n - Navigation</h3>
		<p>Initiates the floating navigation.</p>

	</div>

	<ul id="nav" class="i:n">
		<li class="article"><a href="article">Nyheder</a></li>
		<li class="contact"><a href="contact">Kontakt</a></li>
		<li class="discount"><a href="discount">Rabat</a></li>
		<li class="union"><a href="union">Fagforening</a></li>
		<li class="a-kasse"><a href="a-kasse">A-kasse</a></li>
	</ul>

	<div id="search">
		<fieldset class="i:a id:sitemap">
			<label for="searchtext">Søg</label>
			<input type="text" class="text" value="Søg" name="searchtext" id="searchtext" />
			<input type="submit" class="button i:s" value="Søg" />
		</fieldset>
	</div>

</div>

</form>

</body>
</html>