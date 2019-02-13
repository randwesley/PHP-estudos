<?php
require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;
use wesley\Exemplos\ConversorDeNumeroRomano;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero);
    }

    public function testDeveEntenderOSimboloM()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("M");
        $this->assertEquals(1000, $numero);
    }

    public function testDeveEntenderOSimboloII(){
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("II");
        $this->assertEquals(2, $numero);
    }

    public function testDeveEntenderOSimboloIIXX(){
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("IV");
        $this->assertEquals(4, $numero);
    }

    public function testDeveEntenderOSimboloXXIV(){
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXIV");
        $this->assertEquals(24, $numero);
    }
}
