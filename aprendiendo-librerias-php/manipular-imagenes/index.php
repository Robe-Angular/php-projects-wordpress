<?php
require '../vendor/autoload.php';

$foto_original = '/mifoto.jpg';
$guardar_en = 'test21.gif';

//$thumb = new PHPThumb\GD($foto_original);
//$thumb = new PHPThumb\GD($foto_original);
$thumb = new PHPThumb\GD(__DIR__ .$foto_original);
ob_clean();
$thumb->resize(250, 250);
$thumb->cropFromCenter(200,100);
$thumb->show();
$thumb->save($guardar_en,'gif');
