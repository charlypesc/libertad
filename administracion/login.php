<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css?201816578">
	<title></title>
</head>
<body>
	<div class="wrap">
		<div class="banner1"></div>
      <div class="banner2"></div>
      <header>
        <div class="logo__escuela"><img src="../img/logos/insignia.png" alt=""/></div>
        <div class="membrete">
          <div class="membrete__uno"> 
            <h1>Escuela <span>Libertad </span></h1>
            <h2>"La escuela de las oportunidades"</h2>
          </div>
        </div>
        <nav class="menu">
          <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/historia.php"><span>Historia</span></a></li>
            <li><a href="/integracion.php">Integración</a></li>
            <li><a href="/planespropios.php"><span>Talleres</span></a></li>
            <li><a href="/ProyectoEducativo.php">PEI</a></li>
          </ul>
        </nav>
      </header>
	</div>


	

	<form action="check_login.php" method="POST">
		
		<div class="login_wrap">
			<div class="login_cab">
				<h2>Introduce tus datos</h2>
				<table class="login_table">
					<tr class="tr_login">
						<td class="login_izq" >
							Usuario:					
						</td>
						<td class="login_der">
							<input type="text" name="login">
						</td>
					</tr>
					<tr class="tr_login">
						<td class="login_izq">
							Password:
						</td>
						<td>
							<input type="Password" name="pass">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="enviar" value="login">
						</td>
					</tr>	

					</table>


			</div>
			
		</div>	


	</form>



</body>
</html>