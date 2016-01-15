<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['contenido'];
$para = "TUCORREO@CORREO.COM";
$titulo = "MENSAJE ENVIADO DESDE LA PAGINA WEB";
$header = "DE:" . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
	if (mail($para, $titulo, $msjCorreo, $header)) {
	echo "<script language='javascript'>
	alert('Mensaje enviado, muchas gracias.');
	window.history.back();
	</script>";
	} else {
	echo "<script language='javascript'>
	alert('Falló el envio.');
	window.history.back();
	</script>";
	}
}
?>