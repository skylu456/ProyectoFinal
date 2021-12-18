<!DOCTYPE html>

<?php 
require_once('../models/citasmodel.php');

require_once("../DB/db.php");
		$cita= new citasModel();
        $citasArr = $cita->getCitas();
        
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Cancelar Cita</title>
    <link rel="stylesheet" href="../css/reprogstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Cancelar una Cita</div>
    <div class="content">
    <h1>Citas que Cancelar </h1>
    <?php        
                $id = 1;
                foreach ($citasArr as $dato) { ?>
      <form action="ConfirmCancel.php" method="post">
        <div class="gender-details">
          <select name="citaSelect" id="servicio">
            <option value="<?php $id ?>">No. de Cita <?php echo $id ?> <?php echo $dato ?></option>
            <?php }
                ?>
          </select>
          </div>
        </div>
		<button class="button">
			<span class="button__text">Cancelar Cita</span>
		</button>	
      </form>
    </div>
  </div>

</body>
</html>
