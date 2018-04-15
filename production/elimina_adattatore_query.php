<?php ob_start(); ?>
<?php
    
	include ("db.php");

		
	
	

	$msg = "";
	if(isset($_POST["rimuovi"]))
	{
        
        $ID = $_POST["IDAdattatore"];
        

        $sql="DELETE FROM adattatore WHERE IDAdattatore = '$ID'";
		$result = $db->query($sql);


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
		
		$sql=mysqli_query($db, "UPDATE installazionesensore SET dataRimozione = '$data' WHERE IDAdattatore ='$IDA'");
		$sql=mysqli_query($db, "UPDATE installazionesensore SET IDInstallatoreRimozione = '$IDI' WHERE IDAdattatore ='$IDA'");
    
            
            $query = mysqli_query($db, "UPDATE installazioneadattatore SET dataRimozione = '$data' WHERE IDAdattatore = '$ID'");
            $query = mysqli_query($db, "UPDATE installazioneadattatore SET IDInstallatoreRimozione = '$IDI' WHERE IDAdattatore = '$ID'");
			header("location: elimina_adattatore.php");
		}
	
?>