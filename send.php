<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "analeslieterranova89@gmail.com";
$headers ="De: ".$mailFrom.".\n\n".$message;
$txt = "Has recibido un correo de ".$name;

mail($mailTo, $txt, $headers);
header("Location: /gracias");
}
 ?>
