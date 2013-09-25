PDFEmbed
========

PDFEmbed allows Adobe Acrobat PDF files to be embedded into a wiki article using <pdf></pdf> tags. The PDF file extension is automatically added and necessarily default permissions are configured. Future functionality will allow this extension to act as a media handler for PDF files.


Installation
------------
To install this extension, add the following to the end of the LocalSettings.php file:

//PDFEmbed
require("$IP/extensions/PDFEmbed/PDFEmbed.php");

Configuration
---------------------

If the default configuration needs to be altered add these settings to the LocalSettings.php file below the require:

//Default width for the PDF object container.
$pdfEmbed['width'] = 800;

//Default height for the PDF object container.
$pdfEmbed['height'] = 1090;