<?php
require_once('../plantillas/cabecera.php');
?>

<article>
    <h2>Dar de alta un vehículo</h2>

    <form action="insertar.php" method="POST">
        <div  class="control mb-3">
            <label for="matricula" class="col-sm-2 col-form-label">Matrícula:</label>
            <input type="text" name="matricula" id="matricula" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
            <input type="text" name="marca" id="marca" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="tipo"class="col-sm-2 col-form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-select form-select-lg">
                <option value="turismo">Turismo</option>
                <option value="autobús">Autobús</option>
                <option value="camión">Camión</option>
                <option value="furgón">Furgón</option>
            </select>
        </div>

        <div  class="control mb-3">
            <label for="color"class="col-sm-2 col-form-label">Color:</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="fechaMat" class="col-sm-2 col-form-label">Fecha de matriculación:</label>
            <input type="date" name="fechaMat" id="fechaMat" class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="cilindrada" class="col-sm-2 col-form-label">Cilindrada (en litros):</label>
            <input type="text" name="cilindrada" id="cilindrada" class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="itv" class="col-sm-2 col-form-label">ITV Pasada:</label>
            <input type="checkbox" name="itv" id="itv" class="form-check-input">
        
            <!-- 
            Sí <input type="radio" name="itv" id="itvsi" value="1" checked>
            No <input type="radio" name="itv" id="itvno" value="0"> -->

        </div>

        <div  class="control mb-3">
            <input type="submit" value="Añadir Vehiculo"   class="btn btn-primary">
        </div>

    </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>
