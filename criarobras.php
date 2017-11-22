<!DOCTYPE html>
	<head>
		<title>Criar Obras</title>
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
					Nome reponsavel<br>
					<input type="text" name="nomer" maxlength=40 placeholder="Digite seu nome completo" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					cnpj<br>
					<input type="text" name="cnpj" maxlength=15 placeholder="Digite seu cnpj" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					N° de pavimentos<br>
					<input type="number" name="n°p" maxlength=30 placeholder="numero de andares" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					nome da obras<br><input type="text" name="obra" maxlength=15 placeholder="Digite o nome da obra" style="height:30px; padding:5px; font-size:17px;"/><br><br>
					</div><br>
					<input type=submit name="criarobras" value="cadastrar obra" style="width:200px; height:30px; font-size:17px;">
					<?php 
						include("conectar.php");
						if(isset($_POST['criarobras'])){ 
	 
								$nomer = $_POST['nomer'];
								$cnpj = $_POST['cnpj'];
								$n°p = $_POST['n°p'];
								$obra = $_POST['obra'];
								$query = mysql_query("INSERT INTO obras VALUES('$nomer','$cnpj','$n°p','$obra')") or die('<br><BR>Desculpe obra ja registrada.');
								echo "<br><font size=5 color='green' face='verdana'> Obra Cadastrada com sucesso</font>";
							}
							else{
								
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
