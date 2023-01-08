<?
include('conexao.php');
?>

<html>
<body>
<h1>Bem vindos ao FilmesLet</h1><br>
		<p>O que voce deseja fazer?</p> <br><br>

			<form action="formulario.php" method="post">
                <input type="submit" name="cadastro" value="Cadastro"> <br><br><br><br>
			</form>

			<form action="consulta.php" method="post">
                <input type="submit" name="consulta" value="Consultar">	
			</form>
</body>

