<?php
require_once(__DIR__ . '/../models/pacientemodel.php');
require_once(__DIR__ . '/../DB/db.php');

use \PHPUnit\Framework\TestCase;

/*Aqui se cubren dos procedimientos  muy importantes que se 
utilizan en la plataforma.*/

class PacienteModelTests extends TestCase
{
    /*PacienteModel requiere de pacientes y los 
    procedimientos relacionados a ellos, por ello
    se decidio probar estos dos.*/
    
    public function pacienteProveedor()
    {
        return [
            'Caso 1' => ['testUsername5', 'test12345', True]
        ];
    }

    public function pacienteLoginProveedor()
    {
        return [
            'Caso 1' => ['testUser1', 'test1234', True],
            'Caso 2' => ['testUsername45', 'test1234v', False]
        ];
    }

    /**
    * @dataProvider pacienteProveedor
    */
    public function testnewPaciente($username, $password, $resultado_esperado)
    {
        $Paciente = new PacienteModel();
        $data['usuario'] = $username;
        $data['password'] = $password;
        $this->assertEquals($resultado_esperado,$Paciente->newPaciente($data));
    }

    /**
    * @dataProvider pacienteLoginProveedor
    */
    public function testExistingPaciente($username, $password, $resultado_esperado)
    {
        $Paciente = new PacienteModel();
        $this->assertEquals($resultado_esperado,$Paciente->isPaciente($username, $password));
    }
}
