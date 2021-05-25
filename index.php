<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/imgs/mysql.svg" type="image/x-icon">
    <title>SqlCrudProject</title>
</head>
<body>
    
    <img id="logo" alt="La imagen no puso ser cargada" src="assets/imgs/mysql.svg">
    <p>Sql Crud Project</p>
    
    <form action="php/query_read.php" method="GET">
    
    	<input type="number" name="buscar_id" id="buscar_id" placeholder="Buscar por ID..." maxlength="10" required><input type="submit" name="buscar" id="buscar" value="Buscar">
    	
    </form>
    	
    	<div id="contenedor1">
    		<input onclick="editarNotas()" type="button" name="editar_user" id="editar_user" value="Editar notas"><input onclick="crearUsuario()" type="button" name="crear_user" id="crear_user" value="Crear usuario"><input onclick="borrarUsuario()" type="button" name="borrar_user" id="borrar_user" value="Borrar usuario">
    	</div>
    	
    <form action="php/query_update.php" method="GET">
    
    	<div id="contenedor2">
    		<input type="number" name="editar_id" id="entrar_id" placeholder="Editar por ID..." maxlength="10" required><input type="number" name="nota_uno" id="nota_uno" placeholder="Nota 1..." maxlength="3" required><input type="number" name="nota_dos" id="nota_dos" placeholder="Nota 2..." maxlength="3" required><input type="number" name="nota_tres" id="nota_tres" placeholder="Nota 3..." maxlength="3" required><input type="number" name="nota_cuatro" id="nota_cuatro" placeholder="Nota 4..." maxlength="3" required><input type="submit" name="update" id="update" value="Editar notas">
    	</div>
    
    </form>
    	
    <form action="php/query_create.php" method="GET">
    
    	<div id="contenedor3">
    		<input type="number" name="crear_id" id="crear_id" placeholder="Crear por ID..." maxlength="10" required=><input type="submit" name="crear_usuario" id="crear_usuario" value="Crear usuario">
    	</div>
    
    </form>
    
    <form action="php/query_delete.php" method="GET">
    
    	<div id="contenedor4">
    		<input type="number" name="borrar_id" id="borrar_id" placeholder="Borrar por ID..." maxlength="10" required><input type="submit" name="borrar_usuario" id="borrar_usuario" value="Borrar usuario">
    	</div>
    
    </form>
    	
    	
    
    	
    
    
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>