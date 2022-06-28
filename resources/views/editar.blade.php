<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <form action="/editar-usuario/{{ $usuario-> id }}" method="POST">
		@csrf
        <label for="lblNome" >Nome:</label>
		<input type="text" name="nome" value="{{ $usuario->nome }}"/>
		<br><br>
			
		<label for="lblEmail" >Email:</label>
		<input type="text" name="email"  value="{{ $usuario->email }}"/>
		<br><br>
			
		<label for="lblSenha" >Senha:</label>
		<input type="text" name="senha"  value="{{ $usuario->senha }}"/>
		<br><br>

		<button>Editar</button>
    </form>
</body>
</html>