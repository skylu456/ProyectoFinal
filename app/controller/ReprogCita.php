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
    <title>Reprogramar una Cita</title>
    <link rel="stylesheet" href="../css/reprogstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Reprogramar una Cita</div>
    <div class="content">
    <h1>Citas que Reprogramar... </h1>
    <?php        
                $id = 1;
                foreach ($citasArr as $dato) { ?>
      <form action="reprogramar.php" method="post">
        <div class="gender-details">
          <select name="citaSelect" id="servicio">
            <option value="<?php $id ?>">No. Cita <?php echo $id ?> <?php echo $dato ?></option>
            <?php }
                ?>
          </select>
          </div>
          <div class="input-box">
            <span class="details">Reprogramar día de la cita *</span>
            <input type="date"  name= "diaCita" >
          </div> 
        </div>
		<button class="button">
			<span class="button__text">Reprogramar Cita</span>
		</button>	
      </form>
    </div>
  </div>

</body>
</html>
