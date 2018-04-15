<?php ob_start(); ?>
<?php
    
	include ("db.php");

		
	
	

	$msg = "";
	if(isset($_POST["rimuovi"]))
	{
        
        $ID = $_POST["IDSensore"];
        

        $sql="DELETE FROM sensore WHERE IDSensore = '$ID' AND marcaSensore='SMG'";
		$result = $db->query($sql);


		$sql="SELECT IDUtente FROM utente WHERE nomeUtente = 'Federico'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);

		
		
		
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
        
    
            
            $query = mysqli_query($db, "UPDATE installazionesensore SET dataRimozione = '$data' WHERE IDSensore = '$ID'");
            $query = mysqli_query($db, "UPDATE installazionesensore SET IDInstallatoreRimozione = '$IDI' WHERE IDSensore = '$ID'");
			header("location: elimina_sensore.php");
		}
	
?>