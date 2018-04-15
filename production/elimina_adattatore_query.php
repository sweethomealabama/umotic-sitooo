<?php ob_start(); ?>
<?php
    
	include ("db.php");

		
	
	

	$msg = "";
	if(isset($_POST["rimuovi"]))
	{
        
        $ID = $_POST["IDAdattatore"];
        

        $sql="DELETE FROM adattatore WHERE IDAdattatore = '$ID'";
		


		$sql="SELECT IDUtente FROM utente WHERE nomeUtente = 'Federico'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);

		
		$IDU = $row["IDUtente"];
		
		$data = "2018"."-".rand(1, 12)."-".rand(1,31);

		$sql="SELECT IDSensore FROM sensore WHERE tipoSensore = 'TEM'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDS = $row["IDSensore"];

		$sql="SELECT IDAdattatore FROM adattatore WHERE IDAdattatore = '$IDa'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDA = $row["IDAdattatore"];

		$sql="SELECT IDInstallatore FROM installatore WHERE usernameInstallatore = 'admin'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDI = $row["IDInstallatore"];
		
		
    
            
            
			header("location: elimina_adattatore.php");
		}
	
?>
