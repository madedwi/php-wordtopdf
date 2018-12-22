<?php
use PHPUnit\Framework\TestCase;
use Madedwi\WordToPdf\WordToPdf;

class WordToPdfTest extends TestCase{

    public function testIntitializeLibrary(){
        $var = new WordToPdf(dirname(__DIR__) . '/examples/example-01.docx');
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testConvertToPdf(){
        $var = new WordToPdf(dirname(__DIR__) . '/examples/example-01.docx');
        $filepath = dirname(__DIR__) . '/examples/example-01.pdf';
        $this->assertTrue($var->convertToPdf($filepath));
        unset($var);
    }
}
