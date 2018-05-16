<?php

require "controller/HomeController.php";

//$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";
$pagina = isset($_POST["pagina"]) ? $_POST["pagina"] : "index";

$ctrl = new HomeController();

switch($pagina) 
{
    case "index" : 
    $ctrl->Index();
    break;
    case "login" : 
    $ctrl->Login();
    break;
    case "painel" : 
    $ctrl->Painel();
    break;
}
?>
<!--
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
            <h1>Página de Inicial</h1>
        </div>
		
        <div class="row">
			<form action="" id="carform">
				<select name="carlist" form="carform">
					<option value="Index.php">Index</option>
					<option value="Login.php">Login</option>
					<option value="Painel.php">Painel</option>
				</select>
				<input type="submit">
			</form> 
        </div>
		
    </div>
</body>
</html>
-->
