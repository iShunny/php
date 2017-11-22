<html>
	<head>
		<title>Deletar</title>
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="css/index.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div align="center">
			<header>
				<ul id="nav">
					<li><a href="index.php">Início</a></li>
					<li><a href="obras.php">Obras</a></li>
					<li><a href="cadastrar.php">Cadastrar</a></li>
					<li><a href="modificar.php">Modificar</a></li>
					<li><a href="deletar.php">Deletar</a></li>
                    <li><a href="registros.php">registros</a></li>
				</ul>
			</header>
			<br><br>
			<fieldset style="background:#E8E8E8; width: 10%; border: simple #000000; border-radius:100px; padding:0px 30px 0px 30px;">
			<cor style="font-family: 'Lucida Sans Unicode',Verdana,Arial,sans-serif; font-size: 50px; color: gray;">Deletar</cor>
			</fieldset>
			<br>
			<form method="post">
				<fieldset style="background:#E8E8E8; width: 10%; border: simple #000000; border-radius:5px; padding:10px 10px 10px 10px;">
					<div align="left">
					Usuário<br>
					<input type="text" name="usuario" maxlength=15 placeholder="Digite seu nome de usuário" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Senha<br>
					<input type="password" name="senha1" maxlength=15 placeholder="Digite sua senha" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					</div>
					<input type=submit name="conectar" value="Conectar" style="width:200px; height:30px; font-size:17px;">
				</fieldset>
			</form>
			<br><br>
					<?php
						include("conectar.php");
						$fortec=100;
						if(isset($_POST['conectar'])) {
							$usuario= $_POST['usuario'];
							$senha1= $_POST['senha1'];
							$dados=mysql_query("SELECT * FROM cadastros WHERE usuario = '$usuario' and senha1 = '$senha1'") or die ('Erro ao selecionar os dados');
								while($resultado=mysql_fetch_assoc($dados)){
									if (($usuario == $resultado['usuario']) || ($senha1 == $resultado['senha1'])){
										echo "<fieldset style='background:#E8E8E8; width: 40%; border: simple #000000; border-radius:5px; padding:10px 10px 10px 10px;'>";
										echo "<form method='post'>";
										echo "<input type='text' id='deletar' name='delusuario' value='$usuario' maxlength=15 readonly/><BR>";
										echo "<font size=4 color='black' face='verdana'>Você está preste a deletar seu registro, caso queira deletar clique no botão Deletar, caso contrário clique no Cancelar.</font><BR>";
										echo "<input type='submit' name='deletar' value='Deletar' style='width:200px; height:30px; font-size:17px;'>";
										echo "<a href='index.php'><input type='submit' name='cancelar' value='Cancelar' style='width:200px; height:30px; font-size:17px;'></a>";
										echo "</form>";
										echo "</fieldset><br><br>";
									}
								}
						}
						if(isset($_POST['deletar'])) {
							$delusuario= $_POST['delusuario'];
							mysql_query("DELETE FROM cadastros WHERE usuario = '$delusuario'") or die('Erro ao deletar!');
							echo "<font size=4 color='green' face='verdana'>Deletado com sucesso</font><br><br><br>";
						}
					?>
			<headerrodape>
				<br>
				© 2017 Fortec, Inc.
				Todos os direitos reservados.<br>
				Por:<br>
			</headerrodape>
		</div>
	</body>
</html>