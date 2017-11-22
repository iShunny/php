<html>
	<head>
		<title>Registros</title>
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
                    <li><a href="registros.php">Registros</a></li>
				</ul>
			</header>
			<br><br>
			<fieldset style="background:#E8E8E8; width: 10%; border: simple #000000; border-radius:100px; padding:0px 30px 0px 30px;">
			<cor style="font-family: 'Lucida Sans Unicode',Verdana,Arial,sans-serif; font-size: 50px; color: gray;">Registros</cor>
			</fieldset><br>
			<br>
			<?php
				
				include("conectar.php");
				$sql = mysql_query("SELECT * FROM cadastros");
				$total = mysql_num_rows($sql);
				echo "<table border=0 width=1000><tr><td>";
				echo "<div align='left' style='margin-left:10px;'>";
					echo "<fieldset style='background:#E8E8E8; width: 340px; border: simple #000000; border-radius:5px; padding:2px 3px 3px 0px;'>";
						echo "<form method='post'>";
							echo "<input type='text' name='procurarnome' maxlength=40 placeholder='Procurar...' style='width:260px; height:30px; padding:5px; font-size:17px;'/>&nbsp;";
							echo "<input type=submit name='procurar' value='Procurar' style='width:75px; height:30px; font-size:17px;'></input>";
						echo "</form>";
					echo "</fieldset>";
				echo "</div>";
				echo "</td><td>";
				echo "<div align='right' style='margin-right:10px;'>";
				echo "<form method='post'>";
				if ($total >= 1){
					echo "<input type=submit id='pag' name='page1' value='1'></input>";
				}
				if ($total >= 26){
					echo "<input type=submit id='pag' name='page2' value='2'></input>";
				}
				if ($total >= 51){
					echo "<input type=submit id='pag' name='page3' value='3'></input>";
				}
				if ($total >= 76){
					echo "<input type=submit id='pag' name='page4' value='4'></input>";
				}
				if ($total >= 101){
					echo "<input type=submit id='pag' name='page5' value='5'></input>";
				}
				if ($total >= 126){
					echo "<input type=submit id='pag' name='page6' value='6'></input>";
				}
				if ($total >= 151){
					echo "<input type=submit id='pag' name='page7' value='7'></input>";
				}
				if ($total >= 176){
					echo "<input type=submit id='pag' name='page8' value='8'></input>";
				}
				if ($total >= 201){
					echo "<input type=submit id='pag' name='page9' value='9'></input>";
				}
				if ($total >= 226){
					echo "<input type=submit id='pag' name='page10' value='10'></input>";
				}
				echo "</form>";
				echo "</div><br>";
				echo "</td></tr></table>";
				if(isset($_POST['procurar'])) {
					include("conectar.php");
					$nome= $_POST['procurarnome'];
					$dados=mysql_query("SELECT * FROM cadastros WHERE nome LIKE '$nome%' ORDER BY nome;") or die ('Erro ao selecionar os dados');
					echo "<font size=5 color='darkgray' face='verdana'>Todos os registros com o nome: ".$nome."<br><br>";
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				if ($total >= 1){
				if(isset($_POST['page1'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 0;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 26){
				if(isset($_POST['page2'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 25;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 51){
				if(isset($_POST['page3'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 50;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 76){
				if(isset($_POST['page4'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 75;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 101){
				if(isset($_POST['page5'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 100;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 126){
				if(isset($_POST['page6'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 125;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 151){
				if(isset($_POST['page7'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 150;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 176){
				if(isset($_POST['page8'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 25 OFFSET 175;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 201){
				if(isset($_POST['page9'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 20 OFFSET 200;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
				if ($total >= 226){
				if(isset($_POST['page10'])) {
					include("conectar.php");
					$dados=mysql_query('SELECT * FROM cadastros ORDER BY nome LIMIT 20 OFFSET 225;') or die ('Erro ao selecionar os dados');
					echo "<center><table border=1 cellpadding=0 cellspacing=0 style='background:#E8E8E8; border: simple #000000; border-radius:5px; margin-left:5px; margin-right:5px;'><tr><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Foto</td><td style='padding:5px;'><center><font size=4 color='black' face='verdana'><font size=4 color='black' face='verdana'>Nome</td><td><center><font size=4 color='black' face='verdana'>Usuário</td><td><center><font size=4 color='black' face='verdana'>E-Mail</td><td><center><font size=4 color='black' face='verdana'>Cidade</td><td><center><font size=4 color='black' face='verdana'>Estado</td><td><center><font size=4 color='black' face='verdana'>País</td><td><center><font size=4 color='black' face='verdana'>Nascimento</td></tr>";
						while($resultado=mysql_fetch_assoc($dados)){
							echo "<tr><td width=50 height=50 style='padding:5px;'><img src='imagens/".$resultado['foto'].".png' width=50 height=50></td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['nome']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['usuario']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['email']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['cidade']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['estado']."</td>";
							echo "<td width=200 style='padding:5px;'>".$resultado['pais']."</td>";
							echo "<td width=70 style='padding:5px;'>".$resultado['dia']."/".$resultado['mes']."/".$resultado['ano']."</td>";
					}
					echo "</table></center>";
				}
				}
			?>
			<br>
			<br><br>
			<headerrodape>
				<br>
				© 2017 Fortec, Inc.
				Todos os direitos reservados.<br>
				Por:<br>
			</headerrodape>
		</div>
	</body>
</html>