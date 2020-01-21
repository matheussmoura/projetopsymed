<?php  
    include('conexao.php');
	$nomeprof = $_POST["nomeprof"];
	$emailprof= $_POST["emailprof"];
	$crp = $_POST["crp"];
	$telefoneprof = $_POST["telefoneprof"];
	$lugar = $_POST["lugar"];	
	
	$sql = "INSERT INTO `cadprof` (`nomeprof`, `emailprof`, `crp`, `telefoneprof`, `lugar`) VALUES ('".$nomeprof."', '".$emailprof."', '".$crp."', '".$telefoneprof."', '".$lugar."')";
    
	if(mysqli_query($conexao, $sql)) {
			echo "<script>
			alert('Gravado com sucesso!');
	        location.href='cadprof.php';
	      </script>";
	
	}else{
		echo "<script>
	        alert('Cliente não cadastrado');
	      </script>";
	}
	mysqli_close($conexao);
?>