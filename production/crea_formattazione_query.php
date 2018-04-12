<?php ob_start(); ?>
<?php
session_start();
include 'db.php';
	
    if(isset($_POST["submit"])){


        $valore=$_POST["valore"];
        $tipo = $_POST["tipo"];
        $interpretazioneSensore=$_POST["interpretazione"];

        $valore = mysqli_real_escape_string($db, $valore);
        $tipo = mysqli_real_escape_string($db, $tipo);
        $interpretazioneSensore = mysqli_real_escape_string($db, $interpretazioneSensore);

	    
	    
	    $tipo = strtoupper($tipo);
	    
        
        $sql="SELECT tipoSensore FROM formattazionesensore WHERE tipoSensore = '$tipo'";
		
	
	    $result = mysqli_query($db, $sql);

        if ($result->num_rows > 0) {
    
        $msg = "Spiacente, il tipo selezionato esiste già";
			
			header("location: crea_formattazione.php");
            echo $msg;
        }else{

            
			$query = mysqli_query($db, "INSERT INTO formattazionesensore (tipoSensore, valoreSensore, interpretazioneSensore) VALUES ('$tipo', '$valore', '$interpretazioneSensore')");
			if($query)
			{
				$msg = "Formattazione aggiunta con successo!";
				
                header("location: crea_formattazione.php");
                echo $msg;
			}
        }
	    
	 
	}
?>
