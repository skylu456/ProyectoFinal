<?php
class PacienteModel{

    private $db;
    private $pacientes;

    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->pacientes = array();
    }
    public function newPaciente($data)
    {
        $consulta = $this->db->query("insert into pacientes (nombre, usuario, correo, numCel, password, direccion, fechaNac) 
        values('" . $data['nombre'] . "','" . $data['usuario'] . "','" . $data['correo'] . "','" . $data['numcelular'] . "','" . $data['password'] ."','". $data['direccion'] . "','". $data['fechaNac'] . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    public function isPaciente($username, $password)
    {
        $consulta = $this->db->query("select * from pacientes where usuario = '" . $username . "' and password = '" . $password . "'");
        if ($consulta->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function pacienteExistente($username)
    {
        $consulta = $this->db->query("select * from pacientes where usuario = '" . $username . "'"); 
        if ($consulta->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }   
    
}