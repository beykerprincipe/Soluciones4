<!DOCTYPE html>
<html lang='es'>
<head>
    <title>Figuras geometricas</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/bootstrap-theme.css'>
</head>
<body>
<div style='padding: 15px;'>
    <span class='h2'>Romboide</span>
    <br>
    <img src='img/romboide-area.jpg' alt='octógono'>
    <div style='margin: 10px 0px; padding: 10px; background: #e7eff6'>
        Área = b x h
    </div>
    <form method='post'>
        <div style='padding: 10px 5px;'>
            <label for='txtBase'>Base (b): </label>
            <input type='text' id='txtBase' class='form-control' style='width: 300px;'> cm
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
            <a id='btnCalcular' href='#' class='btn btn-danger' onclick='calcular()'>Calcular area</a>
            <a id='btnVolver' href='index.php' class='btn btn-default'>Volver</a>
        </div>
    </form>
</div>
<script>
    function calcular() {
        let b    = document.getElementById('txtBase').value;
        let h    = document.getElementById('txtAltura').value;
        let area = parseFloat(b) * parseFloat(h);

        document.getElementById('txtArea').value = area;
    }
</script>
</body>
