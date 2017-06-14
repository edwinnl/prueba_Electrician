<?php
include("menu.php");
?>
&nbsp;
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
 .textbox
  {
  border: 1px solid #DBE1EB;
  font-size: 15px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 7px;
  padding-bottom: 10px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
  }
  
  .textbox:focus
  {
  color: #2E3133;
  border-color: #FBFFAD;
  }
 
  button {
 border: none;
 background: #3a7999;
 color: #f2f2f2;
 padding: 10px;
 font-size: 18px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}

button:before {
 content:'';
 position: absolute;
 top: 0px;
 left: 0px;
 width: 0px;
 height: 42px;
 background: rgba(255,255,255,0.3);
 border-radius: 5px;
 transition: all 2s ease;
}

button:hover:before {
 width: 100%;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<table align="center" width="80%" border="0">
  <tr >
    <th colspan="2" scope="col">Elegir tipo de practica a realizar</th>
  </tr>
  <tr>
    <th colspan="2" scope="col">
      <p>
        <label>
          <input type="radio" name="rg_practica" value="1" id="rg_practica_0" />
          Practica Grupal</label>
        <label>
          <input type="radio" name="rg_practica" value="2" id="rg_practica_1" />
          Practica Libre</label>
        <br />
      </p>
    </th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th align="right" scope="col">Nombre</th>
    <th scope="col"><label for="txt_nombre"></label>
      <input type="text" name="txt_nombre" id="txt_nombre" class="textbox"/></th>
  </tr>
  <tr>
    <th align="right" scope="col">Codigo</th>
    <th scope="col"><label for="txt_codigo"></label>
      <input type="text" name="txt_codigo" id="txt_codigo" class="textbox" /></th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2"><button name="btn_enviar" id="btn_enviar">Enviar</button></td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
    </tr>
</table>
</form>
<?php

if(isset($_POST['btn_enviar'])){

	date_default_timezone_set('America/Bogota');
	
	$id_practica = $_POST['rg_practica'];
	$nombr = $_POST['txt_nombre'];
	$codigo = $_POST['txt_codigo'];

	$rest = substr($codigo, -8, -6); // devuelve "d"
	
	if($rest == '61'){
		 $id_carr = 1;//Ing Sistemas
		 $msg= "Bienvenido Ingenier@";
	}
	if($rest == '63'){
		 $id_carr = 2;//Ing Ambiental
		 $msg= "Bienvenido Ingenier@";
	}
	if($rest == '60'){
		 $id_carr = 3;//Ing Agronomica
		 $msg= "Bienvenido Ingenier@";
	  }
	if($rest == '10'){
		 $id_carr = 4;//Administracion
		 $msg= "Bienvenido Administrador/a";
	  }
	if($rest == '14'){
		 $id_carr = 5;//Contaduria
		 $msg= "Bienvenido Contador/a";
	  }
	if($rest == '40'){
		 $id_carr = 6;//Piscologia
		 $msg= "Bienvenido Psicolog@";
	  } 
	$fecha = date("Y-m-d H:m:s");
	
	include("config.php");
	$link = mysqli_connect($datos[0],$datos[1],$datos[2],$datos[3]);
	$query = "INSERT INTO esp_academicos.asist_estudiantes 
	( id_carrera, id_practica, nombre, fecha, codigo)
	VALUES
	('$id_carr', '$id_practica', '$nombr', '$fecha', '$codigo')";
	$result = mysqli_query($link,$query);
	/*echo"<script type=\"text/javascript\">alert('Cliente registrado.'); </script>";*/
	//header('Location: http://www.google.com.co');
	echo"<script type=\"text/javascript\">alert('$msg'); window.location='http://www.google.com.co';</script>";
	  
}
?>


<?php
include("copy_right.php");
?>
</body>
</html>