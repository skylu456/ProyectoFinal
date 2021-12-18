<?php
class MedicModel{
    private $db;
    private $pacienteIng;
    //Requerimiento especial que no se usa en la plataforma.
    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->pacienteIng = array();
    }

    public function sortPacienteFecha($fecha)
    {
        $consulta = $this->db->query("select * from PacientesIngresados where fechaIngreso = '" . $fecha . "'"); 
        if ($consulta->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }   
    


}
