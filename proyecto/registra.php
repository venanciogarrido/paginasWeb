<html>   

<head>   
<title>Guardamos los datos en la base de datos</title>   
</head>   

<body>   
<?php   

// Recibimos por POST los datos procedentes del formulario   

$nombre = $_POST["nombre"];   
$email = $_POST["email"];   
// la fecha la cogemos del sistema
$fecha = date("d-m-Y");   

// Abrimos la conexion a la base de datos   
//include("abre_conexion.php");  
//
// Parametros a configurar para la conexion de la base de datos

$hotsdb = "localhost";    // sera el valor de nuestra BD
$basededatos = "basededatos";    // sera el valor de nuestra BD

$usuariodb = "elusuario";    // sera el valor de nuestra BD
$clavedb = "laclave";    // sera el valor de nuestra BD

$tabla_db1 = "unatabla";    // sera el valor de una tabla
$tabla_db2 = "otratabla";    // sera el valor de otra tabla

// Fin de los parametros a configurar para la conexion de la base de datos

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
    $db = mysql_select_db("$basededatos", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
//
$_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,email,fecha) VALUES ('$nombre','$email','$fecha')";   
mysql_query($_GRABAR_SQL);  

// Cerramos la conexion a la base de datos   
include("cierra_conexion.php");   

// Confirmamos que el registro ha sido insertado con exito   

echo "   
<p>Los datos han sido guardados con exito.</p>   

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>   
";   
?>   
</body>   

</html>