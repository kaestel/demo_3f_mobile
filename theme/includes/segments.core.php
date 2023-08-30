<?php

// segment translations
// fallback settings for sites without specific segments configuration
// override this config by placing your own statements in config/segments.php
// you can override setting individually or for a whole type group - it is just an Array :-)

$segments_config = array(
	"www" => array(
	
		// fallback to something similar to detector-v2
		"desktop_edge"  => "desktop",
		"desktop"       => "desktop",

		"desktop_ie11"  => "unsupported",
		"desktop_ie10"  => "unsupported",
		"desktop_ie9"   => "unsupported",

		"smartphone"    => "smartphone",

		"desktop_light" => "unsupported",
		"tv"            => "desktop",

		"tablet"        => "desktop",
		"tablet_light"  => "desktop",

		"mobile"        => "unsupported",
		"mobile_light"  => "unsupported",

		"seo"           => "unsupported"
	)

);

?>
