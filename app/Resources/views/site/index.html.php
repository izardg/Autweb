<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo</title>
</head>
<body>
<center>
<form action="<?php echo $view['router']->path('index') ?>" method="POST">
	<label>Nome:</label>
	<input type="text" name="nome">
	<label>Senha:</label>
	<input type="password" name="senha">
	<input type="submit" name="enviar">
</form>
</center>
</body>
</html>