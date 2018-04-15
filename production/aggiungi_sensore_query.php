<?php ob_start(); ?>
<?php
    
	include ("db.php");

		
	
	

	$msg = "";
	if(isset($_POST["aggiungi"]))
	{
		$username = 'Federico';
		$sql = sprintf(
  "SELECT IDUtente FROM utente WHERE nomeUtente = '%s'",
  mysqli_real_escape_string($dhb, $username),

);
		
		
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);

		$ID = $row["IDUtente"];
		
		
		$data = "2018"."-".rand(1, 12)."-".rand(1,31);

		$sql="SELECT IDSensore FROM sensore WHERE tipoSensore = 'TEM'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDS = $row["IDSensore"];

		$sql="SELECT IDAdattatore FROM adattatore WHERE nomeAmbiente = 'ambiente_1'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDA = $row["IDAdattatore"];

		$sql="SELECT IDInstallatore FROM installatore WHERE usernameInstallatore = 'admin'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDI = $row["IDInstallatore"];
		
		$dataR = "";
		$IDIR = "";
        
		$sql = sprintf(
  			"INSERT INTO installazionesensore (dataInstallazione, IDSensore, IDAdattatore, IDInstallatore, dataRimozione, IDInstallatoreRimozione)VALUES ('%s', '%d', '%s', '%d', '%s', '%d')",
  			mysqli_real_escape_string($dhb, $data),
			mysqli_real_escape_string($dhb, $IDS),
			mysqli_real_escape_string($dhb, $IDA),
			mysqli_real_escape_string($dhb, $IDI),
			mysqli_real_escape_string($dhb, $dataR),
			mysqli_real_escape_string($dhb, $IDIR),

);
    
            
			
			header("location: aggiungi_sensore.php");
		}
	
?>
