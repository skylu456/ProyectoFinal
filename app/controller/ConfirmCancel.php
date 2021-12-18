<!DOCTYPE html>
<?php 
require_once('../models/citasmodel.php');

require_once("../DB/db.php");
        $data['citaSelect']=$_POST['citaSelect'];
		$cita= new citasModel();
        $borrarCita = $cita->cancelarCita($data);
        
        
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
                <h5 class="modal-title">Cancelar Cita</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <?php if($borrarCita): ?>
                    <h2>Cita Cancelada Correctamente.</h2>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>