<?php
require_once(__DIR__ . '/../models/citasmodel.php');
require_once(__DIR__ . '/../DB/db.php');

use \PHPUnit\Framework\TestCase;

class CitaModelTest extends TestCase{


       public function citasProveedor()
    {
        return [
            'Caso 1' => ['2021-16-01', 'DOLOR DE CABEZA', 'MEDICO GENERAL', True]
        ];
    }  
        public function testGetCitas(){
            $cita = new citasModel();
            $citasArr = $cita->getCitas();
            $this->assertEquals(2, count($citasArr));
        }
    
     /**
    * @dataProvider citasProveedor
    */
   public function testNewCitas($diaCita, $motivo, $servReq, $resultadoEsperado){
    $Citas= new CitasModel();
    $data['diaCita'] = $username;
    $data['motivo'] = $password;
    $data['servicios'] = $servReq;
    $this->assertEquals($resultadoEsperado,$Citas->newCitaAgendar($data));
   }


}