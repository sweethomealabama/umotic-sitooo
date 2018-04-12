<?php ob_start(); ?>
<?php
    
    
    

	

	$msg = "";
	if(isset($_POST["login"]))
	{
	
		$passwordUtente = $_POST["password"];
		$usernameUtente = $_POST["username"];
	
	
		$passwordUtente = mysqli_real_escape_string($db, $passwordUtente);
		$usernameUtente = mysqli_real_escape_string($db, $usernameUtente);
	    
	    $password = md5($passwordUtente);
		
		$sql="SELECT * FROM utente WHERE usernameUtente='$usernameUtente'";
		
		
		//$results = mysqli_query($db,$sql);
        //if (mysqli_num_rows($result) > 0) 
        
        $result = mysqli_query($db, $query);

        if ($result->num_rows > 0) {
    
        while($row = mysqli_fetch_assoc($result)) {
                
                if(($row["usernameUtente"]==$usernameUtente)&&($row["passwordUtente"]==$password)){
                    
                
                    $nomeUtente=$row["nomeUtente"];
                    $cognomeUtente=$row["cognomeUtente"];
                    $usernameUtente=$row["usernameUtente"];
                    $telefonoUtente=$row["telefonoUtente"];
                    $emailUtente=$row["emailUtente"];
                    $dataDiNascitaUtente=$row["dataDiNascitaUtente"];
                    $codiceFiscaleUtente=$row["codiceFiscaleUtente"];
                    $passwordUtente=$row["passwordUtente"];
                
                    
                    
                    
                    
                    header("location: index.php");
                }else{
                   echo "username o password errati";
                }
            }
        } else {
            echo "Il tuo account non è registrato al Sistema, registrati ora!";
        }
        
        mysqli_close($db);
    	
    	
	}
?>
