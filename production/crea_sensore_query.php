<?php ob_start(); ?>
<?php
session_start();
include 'db.php';
	
    if(isset($_POST["submit"])){


        $ID=$_POST["id"];
        $tipo=$_POST["tipo"];
        $marca=$_POST["marca"];

        $ID = mysqli_real_escape_string($db, $ID);
        $tipo = mysqli_real_escape_string($db, $tipo);
        $marca = mysqli_real_escape_string($db, $marca);

	    
	    
	    $tipoSensore = strtoupper($tipo);
	    $marcaSensore = strtoupper($marca);
        
        $sql="SELECT tipoSensore FROM formattazionesensore WHERE tipoSensore = '$tipoSensore'";
		
	
	    $result = $db->query($sql);

        if ($result->num_rows == 0) {
    
        $msg = "Spiacente, il tipo selezionato non esiste. Aggiungere il nuovo tipo nell'apposita sezione o riprovare";
			
			header("location: crea_sensore.php");
            echo $msg;
        }else{

            
		
        }
	    
	 
	}
?>
