<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Usuarios</title>
    </head>
    <body>
        <h1>Usuarios</h1>
		
			<label for="lblNome" >Nome:</label>
			<input type="text" name="nome" value="{{ $usuario->nome }}"/>
			<br><br>
			
			<label for="lblEmail" >Email:</label>
			<input type="text" name="email"  value="{{ $usuario->email }}"/>
			<br><br>
			
			<label for="lblSenha" >Senha:</label>
			<input type="text" name="senha"  value="{{ $usuario->senha }}"/>
			<br><br>
    	
    </body>
</html>
