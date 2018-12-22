<?php
namespace Madedwi\WordToPdf;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use Mpdf\Mpdf;

class WordToPdf extends PhpWord{

    protected $wordDocument;

    public function __construct($documentPath){
        parent::__construct();
        Settings:: setPdfRendererName(Settings::PDF_RENDERER_MPDF);

        $this->wordDocument = IOFactory::load($documentPath);
    }

    public function convertToPdf($filepath){
            $filepaths = explode(DIRECTORY_SEPARATOR, $filepath);
            $filename  = array_pop($filepaths);
            $newFilepath  = implode(DIRECTORY_SEPARATOR, $filepaths);
            Settings::setPdfRendererPath($newFilepath);

            return $this->wordDocument->save($filepath, 'PDF');
    }

}
