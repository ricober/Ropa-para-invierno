<?php   
    $nombre = $_POST['nombre'];
    $correo  = $_POST['correo'];
	$rut  = $_POST['rut'];
	$localidad  = $_POST['localidad'];

$servername = "localhost";
$database = "ricoberm_invierno";
$username = "ricoberm_inviern";
$password = "Password2017.";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO ricoberm_invierno (NOMBRE, CORREO, RUT, LOCALIDAD) VALUES ('$nombre', '$correo', '$rut', '$localidad')";
//echo $sql;

if (mysqli_query($conn, $sql)) {
		echo"</br>";echo"</br>";echo"</br>";
		echo"<a href='index.html'><center><img src='img/logo_back.png' width='323' height='184' /></a></center>";
      echo "<a href='index.html'><center><h1 style='color: #FFFFFF'>INSCRIPCI&Oacute;N GUARDADA CON &Eacute;XITO</h1></a></center></a>";
	  echo"</br>";echo"</br>";echo"</br>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<style type="text/css">
<!--
body {
	background-image: url(slider/2_gracias.jpg);
}
-->
</style>