<?php
    session_start();
    include('conexao.php');
     
        $data = $_POST['data'];
        $hora = $_POST['hora'];

        $datetime = $data . ' ' . $hora;

        $sql = "select * from horario_prof where data_horario='$datetime'";
        echo $sql;
        $resultado = mysqli_query($conexao, $sql);
        $total     = mysqli_num_rows($resultado);

        if ( $total>0 ) {
            $dados = mysqli_fetch_array($resultado);
          
            // echo "<script>
            //         location.href='index.php';
            //     </script>";
        } else {
            // echo "<script>
            //         alert('Cliente não encontrado');
            //         location.href='login.php';
            //     </script>";
        }
   
?>


   
<?php  	



// $sql = "select * from tabela WHERE data = '' AND hora = ";
// echo $sql;
// $resultado = mysqli_query($conexao, $sql);
// $total     = mysqli_num_rows($resultado);

// if ( $total < 1 ) {
	
// 	$data = $_POST["data"];
// 	$hora = $_POST["hora"];
// 	$local = $_POST["local"];
// 	$codcliente = $_SESSION['cliente'];
	
// 	$sql = "insert into reserva values(null,'".$data."','".$hora."','".$local."','".$codcliente."')";
	
// 	if(mysqli_query($conexao, $sql)) {
// 			echo "<script>
// 			alert('Gravado com sucesso!');
// 	        location.href='index.php';
// 	      </script>";
	
// 	}else{
// 		echo "<script>
// 	        alert('Cliente não cadastrado');
// 	      </script>";
//     }
    
// }
// 	mysqli_close($conexao);
?>



<?php  
//     include('conexao.php');

// session_start();
//    if(!isset($_SESSION['cadastro']));
//    ?>
   
   
<?php  	



// $sql = "select * from tabela WHERE data = '' AND hora = ";
// echo $sql;
// $resultado = mysqli_query($conexao, $sql);
// $total     = mysqli_num_rows($resultado);

// if ( $total < 1 ) {
	
// 	$data = $_POST["data"];
// 	$hora = $_POST["hora"];
// 	$local = $_POST["local"];
// 	$codcliente = $_SESSION['cliente'];
	
// 	$sql = "insert into reserva values(null,'".$data."','".$hora."','".$local."','".$codcliente."')";
	
// 	if(mysqli_query($conexao, $sql)) {
// 			echo "<script>
// 			alert('Gravado com sucesso!');
// 	        location.href='index.php';
// 	      </script>";
	
// 	}else{
// 		echo "<script>
// 	        alert('Cliente não cadastrado');
// 	      </script>";
//     }
    
// }
// 	mysqli_close($conexao);
?>