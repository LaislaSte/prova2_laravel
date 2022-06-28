<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <form action="/cadastrar-usuario" method="POST">
		@csrf
        <label for="lblNome" >Nome:</label>
		<input type="text" name="nome"/>
		<br><br>
			
		<label for="lblEmail" >Email:</label>
		<input type="text" name="email"/>
		<br><br>
			
		<label for="lblSenha" >Senha:</label>
		<input type="text" name="senha"/>
		<br><br>

		<button>Cadastrar</button>
    </form>
</body>
</html>