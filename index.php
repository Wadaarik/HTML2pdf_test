<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'fr');//cree le fichier pdf avec l'orientation, le format, la langue etc...
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');//add new title & txt
$html2pdf->writeHTML('<h2>HelloWorld</h2>This is my second text');//add new title & txt
$html2pdf->writeHTML('<page><h3>HelloWorld</h3>This is my first page</page>');//add new page
$html2pdf->writeHTML('<page><h4>HelloWorld</h4>This is my second page</page>');//add new page
$html2pdf->output();//fin du code, génère le pdf