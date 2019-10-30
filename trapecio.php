<!DOCTYPE html>
<html lang='es'>
<head>
    <title>Figuras geometricas</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/bootstrap-theme.css'>
</head>
<body>
<div style='padding: 15px;'>
    <span class='h2'>Trapecio</span>
    <br>
    <img src='img/trapecio.jpg' style='height: 200px;' alt='octógono'>
    <div style='margin: 10px 0px; padding: 10px; background: #e7eff6'>
        Área = (B + b) * h / 2
    </div>
    <form method='post'>
        <div style='padding: 10px 5px;'>
            <label for='txtBaseMayor'>Base mayor (B): </label>
            <input type='text' id='txtBaseMayor' class='form-control' style='width: 300px;'> cm
        </div>
        <div style='padding: 10px 5px;'>
            <label for='txtBaseMenor'>Base menor (b): </label>
            <input type='text' id='txtBaseMenor' class='form-control' style='width: 300px;'> cm
        </div>
        <div style='padding: 10px 5px;'>
            <label for='txtAltura'>Altura (h): </label>
            <input type='text' id='txtAltura' class='form-control' style='width: 300px;'> cm
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
        var base_mayor = document.getElementById('txtBaseMayor').value;
        var base_menor = document.getElementById('txtBaseMenor').value;
        var altura = document.getElementById('txtAltura').value;
        let area = (parseFloat(base_mayor) + parseFloat(base_menor)) * parseFloat(altura) / 2;
        document.getElementById('txtArea').value = area;
    }
</script>
</body>
