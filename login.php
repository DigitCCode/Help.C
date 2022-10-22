<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv-"x-UA-Compatible" content-"IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login-Help.c</title>

	<link rel="stylesheet" href="css/popup.css"> <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<div class="form-login">
			<form action="testeLogin.php" method="POST">
				<div class="form-header">
					<div class="title">
						<h1>Login</h1>
					</div>
					<div class="input-box">
						<input id="email" type="email" name="email" placeholder="Email" required>
					</div>
					<div class="input-box">
						<input id="password" type="password" name="password" placeholder="Senha" required>
					</div>
				</div>
				<div class="continue-button">
						<input type="submit" name="submit">
				</div>
				<div class="back">
					<label for=""> Não possuí um cadastro? <a href="cadastro.php">Acesse aqui.</a></label>
				</div>

			</form>
		</div>
	</div>
</body>
</html>
