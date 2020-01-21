<?php  
    include('conexao.php');
	$nomelug = $_POST["nomelug"];
	$descricao = $_POST["descricao"];
    $horario = $_POST["horario"];
    $enderecolug = $_POST["enderecolug"];
    $telefonelug = $_POST["telefonelug"];
    $emaillug = $_POST["emaillug"];
    
    $sql = "INSERT INTO `cadlugar` (`nomelug`, `descricao`, `horario`, `enderecolug`, `telefonelug`, `emaillug`) VALUES ('".$nomelug."', '".$descricao."', '".$horario."', '".$enderecolug."', '".$telefonelug."', '".$emaillug."')";
    
	if(mysqli_query($conexao, $sql)) {
			echo "<script>
			alert('Gravado com sucesso!');
	        location.href='cadlugar.php';
	      </script>";
	
	}else{
		echo "<script>
	        alert('Cliente não cadastrado');
	      </script>";
	}
	mysqli_close($conexao);
?>