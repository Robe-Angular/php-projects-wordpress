<?php
require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$html2PDF = new Html2Pdf();

//Recoger la vista a imprimir
ob_start();
require_once 'PDFparaGenerar.php';
$html = ob_get_clean();

$html2PDF->writeHTML($html);

$html2PDF->output('pdf_generado.pdf');