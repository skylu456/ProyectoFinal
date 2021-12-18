<!DOCTYPE html>
<?php 
require_once('../models/pacientemodel.php');
require_once("../DB/db.php");
		$data['usuario']=$_POST['usuario'];
		$data['password']=$_POST['password'];
		$paciente= new PacienteModel();
$already_paciente = $paciente->isPaciente($data['usuario'], $data['password']);
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
            <?php if($already_paciente): ?>
                 <p>Inicio de sesión correcto</p>
            <?php else: ?>    
                    <p>Contraseña o Usuario no válido. intente nuevamente</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>