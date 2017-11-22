<!DOCTYPE html>
	<head>
		<title>Cadastrar</title>
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="css/index.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div align="center">
			<header>
				<ul id="nav">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="obras.php">Obras</a></li>
					<li><a href="cadastrar.php">Cadastrar</a></li>
					<li><a href="modificar.php">Modificar</a></li>
					<li><a href="deletar.php">Deletar</a></li>
                    <li><a href="registros.php">registros</a></li>
				</ul>
			</header>
			<br><br>
			<fieldset style="background:#E8E8E8; width: 10%; border: simple #000000; border-radius:100px; padding:0px 30px 0px 30px;">
			<cor style="font-family: 'Lucida Sans Unicode',Verdana,Arial,sans-serif; font-size: 50px; color: gray;">Cadastrar</cor>
			</fieldset><br>
			<form method="post">
				<fieldset style="background:#E8E8E8; width: 10%; border: simple #000000; border-radius:5px; padding:10px 10px 10px 10px;">
					<div align="left">
					Nome<br>
					<input type="text" name="nome" maxlength=40 placeholder="Digite seu nome completo" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Usuario<br>
					<input type="text" name="usuario" maxlength=15 placeholder="Digite um nome de usuario" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					E-Mail<br>
					<input type="text" name="email" maxlength=30 placeholder="Digite um e-mail" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Senha<br>
					<input type="password" name="senha1" maxlength=15 placeholder="Digite sua senha" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Senha Novamente<br>
					<input type="password" name="senha2" maxlength=15 placeholder="Digite sua senha novamente" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Foto<br>
					<input type="text" name="foto" value="null" maxlength=40 placeholder="Digite o link da imagem" style="height:30px; padding:5px; font-size:17px;" /><br><br>
					Cidade<br>
					<input type="text" name="cidade" maxlength=40 placeholder="Digite sua Cidade" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Estado<br>
					<input type="text" name="estado" maxlength=40 placeholder="Digite seu Estado" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					País<br>
					<input type="text" name="pais" maxlength=40 placeholder="Digite seu País" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					Data de Nascimento<br>
					<input type="text" name="dia" maxlength=2 placeholder="Dia" style="width:32px; height:30px; padding:5px; font-size:17px;"/>
					<input type="text" name="mes" maxlength=2 placeholder="Mês" style="width:32px; height:30px; padding:5px; font-size:17px;"/>
					<input type="text" name="ano" maxlength=4 placeholder="Ano" style="width:50px; height:30px; padding:5px; font-size:17px;"/>
					</div><br>
					<input type=submit name="cadastrar" value="Cadastrar" style="width:200px; height:30px; font-size:17px;">
					<?php 
						include("conectar.php");
						if(isset($_POST['cadastrar'])) 
						{
							$senha1 = $_POST['senha1'];
							$senha2 = $_POST['senha2'];
							if ($senha1 == $senha2){
								$nome = $_POST['nome'];
								$usuario = $_POST['usuario'];
								$email = $_POST['email'];
								$foto = $_POST['foto'];
								$senha1 = $_POST['senha1'];
								$senha2 = $_POST['senha2'];
								$cidade = $_POST['cidade'];
								$estado = $_POST['estado'];
								$pais = $_POST['pais'];
								$dia = $_POST['dia'];
								$mes = $_POST['mes'];
								$ano = $_POST['ano'];
								$query = mysql_query("INSERT INTO cadastros VALUES('$nome','$usuario','$email','$foto','$senha1','$cidade','$estado','$pais','$dia','$mes','$ano')") or die('<br><BR>Desculpe, mas já tem um E-MAIL ou USUÁRIO registrados com esse nome.');
								echo "<br><font size=5 color='green' face='verdana'>Cadastrado com sucesso</font>";
							}
							else{
								echo "As senhas não se combinam";
							}
						}
					?>
				</fieldset>
			</form>
			<br><br>
			<headerrodape>
				<br>
				Todos os direitos reservados.<br>
				Por:Joao F. da Cruz e Gustavo M. G. da Silva<br>
			</headerrodape>
		</div>
	</body>
</html>
			
			