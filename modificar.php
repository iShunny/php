<html>
	<head>
		<title>Modificar</title>
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
			<cor style="font-family: 'Lucida Sans Unicode',Verdana,Arial,sans-serif; font-size: 50px; color: gray;">Modificar</cor>
			</fieldset><br>
			<form method="post">
				<fieldset style="background:#E8E8E8; width: 10%; border: simple #000000; border-radius:5px; padding:10px 10px 10px 10px;">
					<div align="left">
					Usuário<br>
					<input type="text" name="usuario" maxlength=15 placeholder="Digite o nome de usuário" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Senha<br>
					<input type="password" name="senha1" maxlength=15 placeholder="Digite sua senha" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					</div>
					<input type=submit name="conectar" value="Conectar" style="width:200px; height:30px; font-size:17px;">
					</fieldset>
			</form>
			<br><br>
					<?php
						include("conectar.php");
						if(isset($_POST['conectar'])) {
							$usuario= $_POST['usuario'];
							$senha1= $_POST['senha1'];
							$dados=mysql_query("SELECT * FROM cadastros WHERE usuario = '$usuario' and senha1 = '$senha1'") or die ('Erro ao selecionar os dados');
							while($resultado=mysql_fetch_assoc($dados)){
								echo "<form method='post'>";
									echo "<fieldset style='background:#E8E8E8; width: 10%; border: simple #000000; border-radius:5px; padding:10px 10px 10px 10px;'>";
										echo "<div align='left'>";
										echo "Nome<br>";
										echo "<input value='$resultado[nome]' type='text' name='nome' maxlength=40 placeholder='Digite seu nome completo' style='height:30px; padding:5px; font-size:17px;'/><br><br>";
										echo "Usuário<br>";
										echo "<input value='$resultado[usuario]' type='text' name='usuario' maxlength=15 placeholder='Digite um nome de usuário' style='height:30px; padding:5px; font-size:17px;' readonly/><br><br>";
										echo "E-Mail<br>";
										echo "<input value='$resultado[email]' type='text' name='email' maxlength=30 placeholder='Digite um e-mail' style='height:30px; padding:5px; font-size:17px;' readonly/><br><br>";
										echo "Senha<br>";
										echo "<input value='$resultado[senha1]' type='password' name='senha1' maxlength=15 placeholder='Digite sua senha' style='height:30px; padding:5px; font-size:17px;'/><br><br>";
										echo "Senha Novamente<br>";
										echo "<input value='$resultado[senha1]' type='password' name='senha2' maxlength=15 placeholder='Digite sua senha novamente' style='height:30px; padding:5px; font-size:17px;'/><br><br>";
										echo "Cidade<br>";
										echo "<input value='$resultado[cidade]' type='text' name='cidade' maxlength=40 placeholder='Digite sua Cidade' style='height:30px; padding:5px; font-size:17px;'/><br><br>";
										echo "Estado<br>";
										echo "<input value='$resultado[estado]' type='text' name='estado' maxlength=40 placeholder='Digite seu Estado' style='height:30px; padding:5px; font-size:17px;'/><br><br>";
										echo "País<br>";
										echo "<input value='$resultado[pais]' type='text' name='pais' maxlength=40 placeholder='Digite seu País' style='height:30px; padding:5px; font-size:17px;'/><br><br>";
										echo "Data de Nascimento<br>";
										echo "<input value='$resultado[dia]' type='text' name='dia' maxlength=2 placeholder='Dia' style='width:32px; height:30px; padding:5px; font-size:17px;'/>&nbsp;";
										echo "<input value='$resultado[mes]' type='text' name='mes' maxlength=2 placeholder='Mês' style='width:32px; height:30px; padding:5px; font-size:17px;'/>&nbsp;";
										echo "<input value='$resultado[ano]' type='text' name='ano' maxlength=4 placeholder='Ano' style='width:50px; height:30px; padding:5px; font-size:17px;'/>";
										echo "</div><br>";
										echo "<input type=submit name='modificar' value='Modificar' style='width:200px; height:30px; font-size:17px;'>";
									echo "</fieldset>";
								echo "</form><br><br>";
							}
						}
					?>
					<?php
						include("conectar.php");
						if(isset($_POST['modificar'])) {
							$senha1 = $_POST['senha1'];
							$senha2 = $_POST['senha2'];
							if ($senha1 == $senha2){
								$nome = $_POST['nome'];
								$usuario = $_POST['usuario'];
								$email = $_POST['email'];
								$senha1 = $_POST['senha1'];
								$senha2 = $_POST['senha2'];
								$cidade = $_POST['cidade'];
								$estado = $_POST['estado'];
								$pais = $_POST['pais'];
								$dia = $_POST['dia'];
								$mes = $_POST['mes'];
								$ano = $_POST['ano'];
								$query = mysql_query("UPDATE cadastros SET nome = '$nome', usuario='$usuario', email='$email', senha1='$senha1', cidade='$cidade', estado='$estado', pais='$pais', dia='$dia', mes='$mes', ano='$ano' WHERE usuario = '$usuario'") or die('Erro ao editar!');
								echo "<font size=4 color='green' face='verdana'>Editado com sucesso</font><br><br>";
							}
						}
					?>
			<headerrodape>
				<br>
				© 2015 Fortec, Inc.
				Todos os direitos reservados.<br>
				Por:<br>
			</headerrodape>
		</div>
	</body>
</html>