<!DOCTYPE html>
<html lang='es'>
<head>
    <title>Figuras geometricas</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/bootstrap-theme.css'>
</head>
<body>
<div style='padding: 15px;'>
    <span class='h2'>Octogono</span>
    <br>
    <img src='img/octogono.png' alt='octógono'>
    <div style='margin: 10px 0px; padding: 10px; background: #e7eff6'>
        Área = 4 * L * ap
    </div>
    <form method='post'>
        <div style='padding: 10px 5px;'>
            <label for='txtLado'>Lado (L): </label>
            <input type='text' id='txtLado' class='form-control' style='width: 300px;'> cm
        </div>
        <div style='padding: 10px 5px;'>
            <label for='txtApotema'>Apotema (ap): </label>
            <input type='text' id='txtApotema' class='form-control' style='width: 300px;'> cm
        </div>
        <div style='padding: 10px 5px;'>
            <label for='txtArea'>Área: </label>
            <input disabled type='text' id='txtArea' class='form-control' style='width: 300px;'> cm2
        </div>
        <div style='margin-top: 10px; text-align: center;'>
            <a id='btnCalcular' href='#' class='btn btn-danger' onclick='calcular()'>Calcular</a>
            <a id='btnVolver' href='index.php' class='btn btn-default'>Volver</a>
        </div>
    </form>
</div>
<script>
    function calcular() {
        let lado = document.getElementById('txtLado').value;
        let apotema = document.getElementById('txtApotema').value;
        let area = 4 * parseFloat(lado) * parseFloat(apotema);
        document.getElementById('txtArea').value = area;
    }
</script>
</body>
