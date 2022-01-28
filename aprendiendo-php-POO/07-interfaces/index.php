<?php
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    private $modelo;
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender() {
        ;
    }
    
    public function apagar() {
        ;
    }
    
    public function reiniciar() {
        ;
    }
    
    public function desfragmentar() {
        ;
    }
    
    public function detectarUSB() {
        ;
    }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook PRO 2019');
echo $maquintos->getModelo();
var_dump($maquintos);
?>