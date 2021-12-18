<!DOCTYPE html>
<?php 
require_once('../models/citasmodel.php');

require_once("../DB/db.php");
        $data['servReq']=$_POST['servReq'];
		$data['diaCita']=$_POST['diaCita'];
		$data['motivo']=$_POST['motivo'];
		$data['notas']=$_POST['notas'];
		$data['antecedentes']=$_POST['antecedentes'];
		$cita= new citasModel();
        
?>
<html lang="es">
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
                <h5 class="modal-title">Agendar una Cita</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <?php if(empty($data['servReq']) || empty($data['diaCita']) || empty($data['motivo'] )): ?>
                 <h2>¡Datos vacíos!</h2>
                 <p>Recuerde que los campos con * son requeridos.</p>
                 
            <?php else: ?>
                <?php if(iconv_strlen($data['motivo']) < 8 ): ?>
                    <h2>Motivo demasiado corto. Al menos debe contener 8 caracteres.</h2>
                <?php else: ?>
                    <?php if ($cita->newCitaAgendar($data)): ?>
                            <h2>Cita Agendada Correctamente.</h2>
                    <?php endif; ?> 
                <?php endif; ?>  
            </div>
            <?php endif; ?> 
        </div>
    </div>
</div>
</body>
</html>