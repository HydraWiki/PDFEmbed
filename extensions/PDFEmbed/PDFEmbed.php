<?php
/**
 * PDFEmbed
 * PDFEmbed Mediawiki Settings
 *
 * @author		Alexia E. Smith
 * @license		LGPLv3 http://opensource.org/licenses/lgpl-3.0.html
 * @package		PDFEmbed
 * @link		http://www.mediawiki.org/wiki/Extension:PDFEmbed
 *
 **/

/******************************************/
/* Credits								  */
/******************************************/
$credits = array(
	'path'				=> __FILE__,
	'name'				=> 'PDFEmbed',
	'author'			=> 'Alexia E. Smith',
	'url'				=> 'http://www.mediawiki.org/wiki/Extension:PDFEmbed',
	'descriptionmsg'	=> 'pdfembed_description',
	'version'			=> '1.0'
);
$wgExtensionCredits['media'][] = $credits;


/******************************************/
/* Language Strings, Page Aliases, Hooks  */
/******************************************/
$extDir = dirname(__FILE__);

$wgAvailableRights[] = 'embed_pdf';

$wgExtensionMessagesFiles['PDFEmbed']		= "{$extDir}/PDFEmbed.i18n.php";

$wgAutoloadClasses['PDFEmbed']				= "{$extDir}/PDFEmbed.hooks.php";
$wgAutoloadClasses['PDFHandler']			= "{$extDir}/classes/PDFHandler.class.php";

$wgHooks['ParserFirstCallInit'][] = 'PDFEmbed::onParserFirstCallInit';

//Future
//$wgMediaHandlers['application/pdf'] = 'PDFHandler';


/******************************************/
/* Initialize Settings                    */
/******************************************/
//All settings are include order friendly.  Meaning the extension include can come before or after the settings and not override them.
//Setup sysop to have this by default.
if (!array_key_exists('embed_pdf', $wgGroupPermissions['sysop'])) {
	$wgGroupPermissions['sysop']['embed_pdf'] = true;
}

//Add the PDF file extension into the allowed list.
if (!in_array('pdf', $wgFileExtensions)) {
	$wgFileExtensions[] = 'pdf';
}

if (!isset($pdfEmbed['width'])) {
	$pdfEmbed['width'] = 800;
}

if (!isset($pdfEmbed['height'])) {
	$pdfEmbed['height'] = 1090;
}
?>