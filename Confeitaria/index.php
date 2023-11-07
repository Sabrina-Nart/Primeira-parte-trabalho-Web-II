<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Confeitaria</title>

		<style type="text/css" rel="stylesheet">

			.erro {
				color: red;
			}
		</style>

	</head>

	<body>

<?php
	$erro = @$_GET['erro'];
	$msg  = @$_GET['msg'];

	if($erro == 1) {

		echo "<p class=\"erro\">Erro no banco: {$msg}</p>";

	} else if($erro == 2) {

		echo "<p class=\"erro\">Usuário ou senha inválido!</p>";
	}

?>

		<form action="login_db.php" method="post">
			<label for="nome">Nome</label><br>
			<input type="nome" name="nome" id="nome" maxlength="100"><br><br>
			
			<button type="submit">Logar</button>
		</form>

	</body>

</html>
