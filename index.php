<?php
require_once('./vendor/autoload.php');
use Madedwi\WordToPdf\WordToPdf;

$wop = new WordToPdf(__DIR__ . '/examples/example-01.docx');
$filepath = __DIR__ . '/examples/example-01.pdf';
$wop->convertToPdf($filepath);
