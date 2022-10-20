<?php 
	if(isset($_POST['submit'])){
		
		include_once('php/config.php');

		$nome = $_POST['name'];
		$email = $_POST['email'];
		$senha = $_POST['password'];

		$result = mysqli_query($conexao, "INSERT INTO users(nome,email,senha) 
		VALUES ('$nome','$email','$senha')");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv-"x-UA-Compatible" content-"IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

	<title>Login-Help.c</title>

	<link rel="stylesheet" href="css/popup_cadastro.css"> <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<div class="container">
		<div class="form">
			<form action="cadastro.php" method="POST">
				<div class="form-header">
					<div class="title">
						<h1>Cadastre-se</h1>
					</div>
					
				</div>
				<div class="input-group">
					<div class="input-box">
						<input id="firstname" type="text" name="name" placeholder="Digite seu nome" required>
					</div>
					<div class="input-box">
						<input id="email" type="email" name="email" placeholder="Digite seu email" required>
					</div>
					<div class="input-box">
						<input id="password" type="password" name="password" placeholder="Digite uma senha" required>
					</div>
					<div class="input-box">
						<input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirme sua senha" required>
					</div>
				</div>
				
				<div class="back">
					<label for=""> Possuí um cadastro? <a href="login.html">Acesse aqui.</a></label>
				</div>
				<div class="continue-button">
					<input type="submit" name="submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>