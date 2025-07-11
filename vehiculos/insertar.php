<?php

if (!isset($_POST['matricula'])) {
    // Mueve el navegador hasta otra página si no se llegadesde el formulario
    header('Location:registro.php');
}
require_once('../plantillas/cabecera.php');

    $matricula = $_POST['matricula'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $color =  $_POST['color'];
    $fechaMat =  $_POST['fechaMat'];
    $cilindrada = $_POST['cilindrada']; 
    $itv=0;
    $textoITV="No";
    if ( isset($_POST['itv'])  && $_POST['itv']=="on") {
        $itv=1;
        $textoITV="Sí";
    }

    // controles sobre los valores o validaciones
    ?>

    <h2>Asignatura a insertar</h2>
    <ul>
        <li>Matricula: <?=$matricula?></li>
        <li>Marca: <?=$marca?></li>
        <li>Modelo: <?=$modelo?></li>
        <li>Tipo: <?=$tipo?></li>
        <li>Color: <?=$color?></li>
        <li>Fecha de Matriculación: <?=$fechaMat?></li>
        <li>Cilindrada: <?=$cilindrada?></li>
        <li>ITV pasada: <?=$textoITV?></li>
    </ul>

    <?php 
        $consulta = 
            "insert into vehiculos values('$matricula', '$marca','$modelo','$tipo', '$color', '$fechaMat', $cilindrada, $itv) ";

           // ejecutamos la consulta
           $resultado = mysqli_query($conexion, $consulta);
           if ($resultado>0) {
                echo '<p>Se ha insertado el vehículo satisfactoriamente</p>';
           } else {
                echo "<p class='error'> Error al insertar el vehículo </p>";
           }
?>



<?php require_once('../plantillas/pie.php'); ?>