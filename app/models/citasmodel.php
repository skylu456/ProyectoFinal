<?php
class CitasModel{

    private $db;
    private $citas;

    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->citas = array();
    }
    public function newCitaAgendar($data)
    {
        $consulta = $this->db->query("insert into citas (diaCita, motivo, nota, antecedentes, servicios) 
        values('" . $data['diaCita'] . "','" . $data['motivo'] . "','" . $data['nota'] . "','" . $data['antecedentes'] ."','" . $data['servicios'] . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }
    public function getCitas()
    {
        $consulta = $this->db->query("select * from citas");
        while ($fila = $consulta->fetch_assoc()) {
            $this->citas['motivo'] = $fila['motivo'];
            $this->citas['diaCita'] = $fila['diaCita'];
        }
        return $this->citas;
    }

    public function reprogramarCita($data)
    {
        $consulta = $this->db->query("update citas set diaCita = '" . $data['diaCita'] . "' where idCita = '" . $data['citaSelect'] . "'");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    public function cancelarCita($data)
    {
        $consulta = $this->db->query("delete from citas where idCita = '" . $data['citaSelect'] . "'");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }
}