<?php
session_start();
if(!isset($_SESSION)){
header("Location:login.php");
} else {
session_unset();
session_destroy();
echo"<script type=\"text/javascript\">alert('Sesion cancelada.'); window.location='login.php';</script>"; 
//echo "<center>La sesion ah sido cerrada con exito, si deseas identificarte entra <a href='login.php'>AQUI</a>";
//echo "</center>";
}
?>