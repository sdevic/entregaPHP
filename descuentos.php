<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuentos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <section class="descuento">
        <h2>Seleccione el descuento deseado</h2>
        <form action="enviar_descuento.php" method="post" id="solicitud">
        <label for="descuento_seleccion">seleccione el descuento</label>
            <select name="descuento_seleccion">
                <option >25% Peluqueria El corte</option>
                <option >15% Restaurante Pelada la gallina</option>
                <option >40% Jugueteria Catlina</option>
            </select>
            <label for="nombre">Ingrese un nombre</label>
            <input type="text" name="nombre" class="numero_input">
            <label  for="email">Ingrese su e-mail</label>
            <input placeholder="pepe@hotmail.com" type="mail" name="email" class="numero_input">
            <input type="submit"  value="Enviar descuento" class="btnEnvio">

        </form>

    </section>
</body>


<?php include("footer.php") 

 ?>
 



