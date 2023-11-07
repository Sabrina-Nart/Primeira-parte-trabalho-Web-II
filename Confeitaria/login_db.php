<?php
	include('conexao.php');
	
	$email = $_POST['nome'];
	
	$sql = "SELECT id, nome FROM confeiteiro WHERE nome = '{nome}'";

	$query = mysqli_query($con, $sql);

	if(!$query) {

		header('Location: index.php?erro=1&msg=' . mysqli_error($con));
        
	} else {

		if(mysqli_num_rows($query) > 0) {

			header('Location: painel.php');

		} else {

			header('Location: index.php?erro=2');
		}
	}
	
	mysqli_close($con);
?>
