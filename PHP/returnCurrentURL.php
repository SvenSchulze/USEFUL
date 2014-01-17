<?php
/* Return the current url (adressbar)
 */

function curPageURL() {
	/* start with http */
 	$pageURL = 'http';
	/* check SSL */
 	if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
 	$pageURL .= "://";
	/* check port */
 	if ($_SERVER["SERVER_PORT"] != "80") {
	  	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
  		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 	}
 return $pageURL;
}
?>