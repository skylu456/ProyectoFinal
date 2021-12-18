<?php 
require_once('../models/pacientemodel.php');

/*public function guardar(){
		$data['nombre']=$_POST['nombre'];
		$data['usuario']=$_POST['usuario'];
		$data['correo']=$_POST['correo'];
		$data['numCelular']=$_POST['numCelular'];
		$data['password']=$_POST['password'];
        $data['fechaNac']=$_POST['fechaNac'];
		$paciente= new PacienteModel();

      /*  $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $numCel = $_POST['numCelular'];
        $password= $_POST['password'];
        $fechaNac = $_POST['fechaNac'];*/

//guardar();
require_once("../DB/db.php");
$data['nombre']=$_POST['nombre'];
		$data['usuario']=$_POST['usuario'];
		$data['correo']=$_POST['correo'];
		$data['numCelular']=$_POST['numCelular'];
		$data['password']=$_POST['password'];
        $data['fechaNac']=$_POST['fechaNac'];
		$paciente= new PacienteModel();
        $pacienteExistente = $paciente->pacienteExistente($data['usuario']);
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Inicio de Sesión</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <?php if(empty($data['nombre']) || empty($data['correo']) || empty($data['password']  || empty($data['fechaNac']))): ?>
                 <h2>¡Datos vacíos!</h2>
                 <p>Recuerde que los campos con * son requeridos. </p>
                 
            <?php else: ?>
                <?php if($pacienteExistente): ?>
                    <h2>Nombre de usuario existente. Intente otro.</h2>
                <?php else: ?>
                    <?php if (preg_match('/^(.{0,7}|[^a-z]*|[^\d]*)$/i', $data['password'])): ?>
                        <h2>La contraseña debe por lo menos: -Tener 8 caracteres de longitud, No llevar caracteres especiales (!,#,$,_,@).</h2>
                    <?php else: ?>
                        <?php if (strlen($data['numCelular']) != 8 ): ?>
                            <h2>El número de celular introducido no es válido. use el formato aceptado XXXX-XXXX.</h2>
                        <?php else: ?>
                            <?php if ($paciente->newPaciente($data)): ?>
                                <h2>Usuario Registrado Correctamente.</h2>
                            <?php endif; ?> 
                        <?php endif; ?> 
                    <?php endif; ?> 
                <?php endif; ?>   
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>