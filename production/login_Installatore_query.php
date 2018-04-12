<?php ob_start(); ?>
<?php
    
    
    

	

	$msg = "";
	if(isset($_POST["loginInstallatore"]))
	{
	
		$passwordInstallatore = $_POST["passwordInstallatore"];
		$usernameInstallatore = $_POST["usernameInstallatore"];
	
	
		$passwordInstallatore = mysqli_real_escape_string($db, $passwordInstallatore);
		$usernameInstallatore = mysqli_real_escape_string($db, $usernameInstallatore);
	    
	    $password = hash('ripemd160', $passwordInstallatore);
		
		
		$sql="SELECT * FROM installatore WHERE usernameInstallatore='$usernameInstallatore'";
		
		
		
		
		//$results = mysqli_query($db,$sql);
        //if (mysqli_num_rows($result) > 0) 
        
        $result = mysqli_query($db, $query);
        
        

        if ($result->num_rows > 0) {
    
        while($row = mysqli_fetch_assoc($result)) {
            if(($row["usernameInstallatore"]=="admin")&&($row["passwordInstallatore"]=="d033e22ae348aeb5660fc2140aec35850c4da997")){
                
                $nomeInstallatore=$row["nomeInstallatore"];
                $cognomeInstallatore=$row["cognomeInstallatore"];
                $usernameInstallatore=$row["usernameInstallatore"];
                $telefonoInstallatore=$row["telefonoInstallatore"];
                $emailInstallatore=$row["emailInstallatore"];
                $dataDiNascitaInstallatore=$row["dataDiNascitaInstallatore"];
                $codiceFiscaleInstallatore=$row["codiceFiscaleInstallatore"];
                $passwordInstallatore=$row["passwordInstallatore"];
                
                
                header("location: index_admin.php");
                
            }
    
              else  if(($row["usernameInstallatore"]==$usernameInstallatore)&&($row["passwordInstallatore"]==$password)&&($row["usernameInstallatore"]!="admin")){
                    
                    $nomeInstallatore=$row["nomeInstallatore"];
                    $cognomeInstallatore=$row["cognomeInstallatore"];
                    $usernameInstallatore=$row["usernameInstallatore"];
                    $telefonoInstallatore=$row["telefonoInstallatore"];
                    $emailInstallatore=$row["emailInstallatore"];
                    $dataDiNascitaInstallatore=$row["dataDiNascitaInstallatore"];
                    $codiceFiscaleInstallatore=$row["codiceFiscaleInstallatore"];
                    $passwordInstallatore=$row["passwordInstallatore"];
                    
                    
                    
                    
                    header("location: index_Installatore.php");
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
