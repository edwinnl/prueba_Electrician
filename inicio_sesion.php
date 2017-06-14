<?php
session_start();
include("config.php");
$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$link = mysqli_connect($datos[0],$datos[1],$datos[2],$datos[3]);
$query = "SELECT * FROM usuario WHERE identificacion='$login'and contrasenia='$pass'";
$result = mysqli_query($link,$query);
if(mysqli_num_rows($result)){
$array = mysqli_fetch_array($result);
$_SESSION["login"] = $array["identificacion"];
$_SESSION["nombre"] = $array["nombre"];
$_SESSION["apellido"] = $array["apellido"];
$_SESSION["rol"] = $array["id_rol"];
$_SESSION["id_usuario"] = $array["id_usuario"];
header("Location:menu.php");
} else {
	echo"<script type=\"text/javascript\">alert('Usuario o clave incorrectos.'); window.location='login.php';</script>"; 

}

?>