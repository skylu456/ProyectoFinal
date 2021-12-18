<!DOCTYPE html>
<?php 
require_once('../models/citasmodel.php');

require_once("../DB/db.php");
        $data['citaSelect']=$_POST['citaSelect'];
		$data['diaCita']=$_POST['diaCita'];
		$cita= new citasModel();
        $citasArr = $cita->getCitas();
        echo $citasArr['diaCita'];
        echo $data['diaCita'];
        
        
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
                <h5 class="modal-title">Reprogramar Una Cita</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <?php if($data['diaCita'] == $citasArr['diaCita']): ?>
                 <h2>¡Día Igual!</h2>
                 <p>El día a reprogramar es el mismo, por favor seleccione otra fecha.</p>
                 
            <?php else: ?>
                <?php $rprCita = $cita->reprogramarCita($data); ?>
                <?php if($rprCita): ?>
                    <h2>Cita Reprogramada Correctamente.</h2>
                <?php endif; ?>
            </div>
            <?php endif; ?> 
        </div>
    </div>
</div>
</body>
</html>