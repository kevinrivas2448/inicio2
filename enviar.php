<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Contacto</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body>
		<h1>Contacto</h1>
		<center>
			<?php 
$myemail = 'kevinrivas5002@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
			<form method="post" action="enviar.php">
				<input type="text" name="Nombre" placeholder="NOMBRE">
				<input type="email" name="email" placeholder="CORREO ELECTRÓNICO">
				<br>
				<textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
				<br>
				<input type="submit" name="ENVIAR">
			</form>

		</center>

	</body>
</html>