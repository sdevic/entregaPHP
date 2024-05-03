<?php
$descuento_solicitante = $_POST["descuento_seleccion"];
$nombre_solicitante =$_POST["nombre"];
$email_solicitante =$_POST["email"];


switch($descuento_solicitante){
    case "25% Peluqueria El corte":
        $cuerpo_mail = $nombre_solicitante ."\r\n".
            "Se adjunta el 25% de descuento para la Peluqueria El corte"."\r\n".
            "Muchas gracias por usuar nuestrso servicios";
            echo  "se envio el mail con exito" ;
             break;
    case "15% Restaurante Pelada la gallina":
        $cuerpo_mail = $nombre_solicitante ."\r\n".
        "Se adjunta el 15% de descuento para el Restaurante Pelada la gallina"."\r\n".
        "Muchas gracias por usuar nuestrso servicios";
        echo  "se envio el mail con exito" ;
        break;
    case "40% Jugueteria Catlina":
        $cuerpo_mail = $nombre_solicitante ."\r\n".
        "Se adjunta el 40% de descuento para la Jugueteria Catlina"."\r\n".
        "Muchas gracias por usuar nuestrso servicios";
        echo  "se envio el mail con exito" ;  
       break;

}



//para armar el cuerpo del mail y para cumplir con la entega uso este switch



//envio de mail
 mail($email_solicitante,$descuento_solicitante, $cuerpo_mail);
 
 //conexion a la base local
 //$conexion = mysqli_connect('localhost','root','','php_sql_471')or exit("No se logro la conexion");
//conexion para entrega
$conexion = mysqli_connect('localhost','id21988627_sebita','Php@12345','id21988627_phpentrega')or exit("No se logro la conexion");
// inserto los datos 
 mysqli_query($conexion, "INSERT INTO cupones VALUES (DEFAULT,'$nombre_solicitante', '$email_solicitante',' $descuento_solicitante', '$cuerpo_mail' )");
//cierro conexion
 mysqli_close($conexion);

 
