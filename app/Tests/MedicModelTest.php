<?php
require_once(__DIR__ . '/../models/specialModel/medicviewmodel.php');
require_once(__DIR__ . '/../DB/db.php');

use \PHPUnit\Framework\TestCase;

class MedicModelTest extends TestCase
{
    public function dateProveedor(){
        return [
            'Caso 1' => ['2021-16-01',  True],
            'Caso 2' => ['2020-10-11',  True]
        ];
    }

    /**
    * @dataProvider dateProveedor
    */
    public function testSortPaciente($fecha, $resultado_esperado)
    {
        $PacienteIng = new MedicModel();
        $this->assertEquals($resultado_esperado,$PacienteIng->sortPacienteFecha($fecha));
    }
}
