<?php ob_start(); ?>
<?php
    
	include ("db.php");

		
	
	

	$msg = "";
	if(isset($_POST["crea"]))
	{
        
        $IDa = $_POST["IDAdattatore"];
        $nome = $_POST["nomeAdattatore"];

        $sql="INSERT INTO adattatore (IDAdattatore, nomeAmbiente) VALUES ('$IDa', '$nome')";


		$sql="SELECT IDUtente FROM utente WHERE nomeUtente = 'Federico'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);

		$ID = $row["IDUtente"];
		
		
		$data = "2018"."-".rand(1, 12)."-".rand(1,31);

		$sql="SELECT IDSensore FROM sensore WHERE tipoSensore = 'TEM'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDS = $row["IDSensore"];

		$sql="SELECT IDAdattatore FROM adattatore WHERE IDAdattatore = '$IDa'";

		$row=mysqli_fetch_assoc($result);
		$IDA = $row["IDAdattatore"];

		$sql="SELECT IDInstallatore FROM installatore WHERE usernameInstallatore = 'admin'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDI = $row["IDInstallatore"];
        
    
            
			header("location: aggiungi_adattatore.php");
		}
	
?>
