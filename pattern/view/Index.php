<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Página inicial</h1>
            <a href="index.php?pagina=login">Login</a>
        </div>
    </div>

    <div class="container">
	
        <div class="jumbotron">
            <h1>Página de Inicial</h1>
        </div>
		
        <div class="row">
			<form action="index.php" method="post" id="carform">
				<select name="pagina" form="carform">
					<option value="index">Index</option>
					<option value="login">Login</option>
					<option value="painel">Painel</option>
				</select>
				<input type="submit">
			</form> 
        </div>
		
    </div>
</body>
</html>